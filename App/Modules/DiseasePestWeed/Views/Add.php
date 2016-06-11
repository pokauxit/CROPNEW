<?php
Use System\Template\Template;
use \App\Models\plant as pln;
use App\Modules\TypePlant\Controllers\TypePlant;

$template = new Template();
$template->open();
$template->nav1level();
?>

    <div class="container" id="container-center">

        <div class="row card" style="padding: 10px;">

            <h4>ข้อมูลโรค/แมลง/วัชพืช</h4>
            <form class="col s12" action="" method="post">
                <div class="row">
                    <div class="input field col m6 s12">
                        <label for="type_name">พืชที่ปลูก</label>
                        <select id="type_name" name="type_name">
                            <?php
                                $TypePlant = new TypePlant();
                                echo $TypePlant->getTypePlantAll();
                            ?>
                        </select>
                    </div>
                    
                    <div class="input-field col m6 s12">
                        <select id="plant_id" name="plant_id">
                        </select>
                        <label for="plant_id">พืชที่ปลูก</label>
                    </div>
                </div>
                
                <div class="row">
                         <div class="input-field col m6 s12">
                        <select id="problem_type_id" name="problem_type_id">
                            <option value="0" selected disabled>กรุณาเลือกรายการ</option>
                            <option value="1">โรค</option>
                            <option value="2">ศัตรูพืช</option>
                            <option value="3">วัชพืช</option>
                        </select>
                        <label for="problem_type_id">ชนิดปัญหา</label>
                    </div>
                    <div class="input-field col  m6 s12">
                        <input name="disease_pest_weed_name" type="text" class="validate" required>
                        <label for="disease_pest_weed_name">ชื่อโรค/ศัตรูพืช/วัชพืช</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col  m12 s12">
                        <input name="disease_pest_weed_detail" type="text" class="validate" required>
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
        $(document).on('change', '#type_name', function () {
            var value = $(this).val();
            $('#plant_id option').remove();
            $.ajax({
                'type': 'POST',
                'url': '?Crop',
                'cache': false,
                'data': {'List': value},
                'success': function (result) {
                    $('#plant_id').append(result);
                    refreshOption();
                }
            });
        });

        function refreshOption() {
            $('select').material_select('destroy');
            $('select').material_select();
        }
    });
</script>