<?php

use App\Modules\TypePlant\Controllers\TypePlant;
Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container" id="container-center">


    <div class="row card" style="padding: 10px;">

        <h4>จัดการพืชที่เกษตรกรปลูก</h4>


        <form class="col s12" action="" method="post">
<div class="row  ">
                <div class="input-field  col  s12 m6">
                    <select name="area_sequence">
                        <option disabled selected>กรุณาเลือกรายการ</option>
                        <?php while ($rc = $this->dbArea->fetch()) {
                          ?>
                          <option value="<?php echo $rc->area_sequence; ?>" <?php if($this->rowId->area_sequence==$rc->area_sequence){echo 'selected';} ?>><?php echo $rc->soil_soil_name; ?></option>
                          <?php }  ?>
                    </select>
                    <label for="area_sequence">พื้นที่</label>
                </div>
                <div class="input-field  col  s12 m6">
                    <select name="agr_standard_id">
                        <option disabled selected>กรุณาเลือกรายการ</option>
                        <?php while ($rc = $this->dbStandard->fetch()) {
                          ?>
                          <option value="<?php echo $rc->agr_standard_id; ?>" <?php if($this->rowId->agr_standard_id==$rc->agr_standard_id){echo 'selected';} ?>><?php echo $rc->standard_type_fertilizer_name; ?></option>
                          <?php }  ?>
                    </select>
                    <label for="agr_standard_id">มาตราฐาน</label>
                </div>
            </div>

            <div class="row  ">


                <div class="input-field col s12 m6">
                    <input name="water_source" type="text" class="validate" required>
                    <label for="water_source">แหล่งน้ำ</label>
                </div>
                
                <div class="input-field  col  s12 m6">
                    <select name="type_name" id="type_name">
                    <?php
                        $TypePlant = new TypePlant();
                        echo $TypePlant->getTypePlantAll(); // ส่ง ID ไป Selected
                    ?>
                    </select>
                    <label for="type_name">ชนิดพืช</label>
                </div>
                

            </div>


            <div class="row">
                
                    <div class="input-field  col  s12 m6">
                    <select name="plant_id" id="plant_id">
                    </select>
                    <label for="plant_id">พืช</label>
                </div>
                <div class="input-field col  s12 m6">
                    <input name="sunlight" type="text" class="validate" required>
                    <label for="sunlight">ปริมาณแสง</label>
                </div>

            </div>



            <div class="row">   
                <div class="input-field col s12 m6"> 
                    <input name="wind" type="text" class="validate" required>
                    <label for="wind">ความเร็วลม <i class="pull-right" style="margin-right: 20px;">Km/h</i> </label>

                </div>
                
                <div class="input-field col m6 s12">
                    <input name="spetial_information" type="text" class="validate" required>
                    <label for="spetial_information">ข้อมูลพิเศษ</label>
                </div>


            </div>

            <div class="row">

                <div class=" col m2 s12">
                    &nbsp;

                </div>
                <div class="col m8 s12 center">
                    <input name="argiculturist_id" type="hidden" value="<?php echo ID; ?>">

                    <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                    <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
                    <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>

                </div>
                <div class=" col m2 s12">
                    &nbsp;

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