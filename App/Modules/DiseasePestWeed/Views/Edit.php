<?php

use App\Modules\TypePlant\Controllers\TypePlant;
use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
?>

<div class="container" id="container-center">

    <div class="row card" style="padding: 10px;">

        <h4>ข้อมูลโรค/แมลง/วัชพืช</h4>
        <form class="col s12" action="" method="post">
            <div class="row">
                <div class="input-field  col  s12 m6">
                     <?php
                     
                   
                     
                        $plantObj = $this->getTypeIdByPlantId($this->row->plant_id);
                       
                      //  print_r($plantObj)
                    ?>
                    <select name="type_name" id="type_name">
                    <?php
                        $TypePlant = new TypePlant();
                        echo $TypePlant->getTypePlantAll($plantObj->type_id); // ส่ง ID ไป Selected
                    ?>
                    </select>
                    <label for="type_name">ชนิดพืช</label>
                </div>
                
                <div class="input-field  col s12 m6">
                    <input type="hidden" id="old_value" value="<?php echo $this->row->plant_id;?>">
                    <select id="plant_id" name="plant_id">
                    </select>
                    <label for="plant_id">พืช</label>
                </div>
            
            <div class="row">
                <div class="input-field col m6 s12">
                    <select id="problem_type_id" name="problem_type_id">
                        <option value="0" selected disabled>กรุณาเลือกรายการ</option>
                        <option value="1" <?php $this->row->problem_type_id == 1 ? print 'selected' : print ''; ?>>โรค</option>
                        <option value="2" <?php $this->row->problem_type_id == 2 ? print 'selected' : print ''; ?>>ศัตรูพืช</option>
                        <option value="3" <?php $this->row->problem_type_id == 3 ? print 'selected' : print ''; ?>>วัชพืช</option>
                    </select>
                    <label for="problem_type_id">ชนิดปัญหา</label>
                </div>

            
                <div class="input-field col  m6 s12">
                    <input name="disease_pest_weed_name" type="text" class="validate" required
                           value="<?php echo $this->row->disease_pest_weed_name; ?>">
                    <label for="disease_pest_weed_name">ชื่อโรค/ศัตรูพืช/วัชพืช</label>
                </div>
            </div>
                
            <div class="row">
                <div class="input-field col  m12 s12">
                    <input name="disease_pest_weed_detail" type="text" class="validate" required
                           value="<?php echo $this->row->disease_pest_weed_detail; ?>">
                    <label for="disease_pest_weed_detail">รายละเอียดของโรค/ศัตรูพืช/วัชพืช</label>
                </div>
            </div>

            <div align="center" class="row">
                <br> <br> <br>
                <div class="col s12">
                    <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit"
                            id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก
                    </button>
                    <button class="btn waves-effect light-green" style="margin: 5px;" type="reset" name="reset"
                            value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่
                    </button>
                    <button class="btn waves-effect orange" style="margin: 5px;" type="button"
                            onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'">
                        <i class="fa fa-arrow-circle-left"></i> ย้อนกลับ
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
$template->close();
?>
<script>
    $(function () {
      edit();
        $(document).on('change', '#type_name', function () {
            var value = $(this).val();
            $('#plant_id option').remove();
            $.ajax({
                'type': 'GET',
                'url': '?DiseasePestWeed/getListByType/'+value+'/',
                'cache': false,
               
                'success': function (result) {
                    $('#plant_id').append(result);
                    $('#plant_id').trigger('contentChanged');
                }
            });
        });

        function edit() {
            var value = $('#type_name').val();
            var select = $('#old_value').val();
           
            $.ajax({
                'type': 'GET',
                 'url': '?DiseasePestWeed/getListByType/'+value+'/',
                'cache': false,
               
                'success': function (result) { 
                    $('#plant_id').append(result);
                    $('#plant_id').trigger('contentChanged');
                    $('#plant_id').val(select).trigger('contentChanged');
                }
            });
        }

        $('select').on('contentChanged', function () {
            $(this).material_select('destroy');
            $(this).material_select();
        });
    });

                </script>