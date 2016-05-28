<?php

use App\Modules\Crop\Controllers\Crop;
use App\Modules\Plant\Controllers\Plant;
Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container" id="container-center">


    <div class="row card" style="padding: 10px;">

        <h4>จัดการพืชที่เกษตรกรปลูก</h4>


        <form class="col s12" action="" method="post">


            <div class="row  ">


                <div class="input-field col s12 m6">
                    <input name="water_source" type="text" class="validate" required>
                    <label for="water_source">แหล่งน้ำ</label>
                </div>

                <div class="input-field  col  s12 m6">
                    <select id="plant_id" name="plant_id">
                        <?php
                        $plant = new Plant();
                        echo $plant->getPlantAll();
                        ?>
                    </select>
                    <label for="plant_id">พืช</label>
                </div>

            </div>


            <div class="row">
                <div class="input-field col  s12 m6">
                    <input name="sunlight" type="text" class="validate" required>
                    <label for="sunlight">ปริมาณแสง</label>
                </div>
                <div class="input-field col s12 m6"> 
                    <input name="wind" type="text" class="validate" required>
                    <label for="wind">ความเร็วลม <i class="pull-right" style="margin-right: 20px;">Km/h</i> </label>

                </div>


            </div>



            <div class="row">   

                <div class="input-field col m12 s12">
                    <textarea name="spetial_information" class="materialize-textarea" rows="1" style="height:20px;"></textarea>
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