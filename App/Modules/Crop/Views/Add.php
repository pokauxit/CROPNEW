<?php

use App\Modules\Crop\Controllers\Crop;
Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container">
    <div style="margin-top: 15px;">
        <h4>จัดการพืชที่เกษตรกรปลูก</h4>
    </div>
    <div class="row">
        <form class="col s12" action="" method="post">
            <div class="row">
                <div class="input-field col m4 s12">
                    <select id="plant_id" name="plant_id">
                        <option value="1" >1</option>
                        <?php
                        //if($this->rowId->plant_id == $rs->plant_id){echo 'selected';}
                        //$province = new AutoProvince();
                        //echo $province->getProvinceAll();
                        ?>
                    </select>
                    <label for="plant_id">พืช</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m3 s10">
                    <input name="sunlight" type="text" class="validate" required>
                    <label for="sunlight">ปริมาณแสง</label>
                </div>
                <div class="input-field col m1 s2">
                    <label for="sunlight"></label>
                </div>
                <div class="input-field col m3 s10">
                    <input name="water_source" type="text" class="validate" required>
                    <label for="water_source">แหล่งน้ำ</label>
                </div>
                <div class="input-field col m1 s2">
                    <label for="sunlight"></label>
                </div>
                <div class="input-field col m3 s10">
                    <input name="wind" type="text" class="validate" required>
                    <label for="wind">ความเร็วลม</label>
                </div>
                <div class="input-field col m1 s2">
                    <label for="sunlight">Km/h</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s12">
                    <textarea name="spetial_information" class="materialize-textarea "></textarea>
                    <label for="spetial_information">ข้อมูลพิเศษ</label>
                </div>
            </div>
            <div align="center">
                <input name="argiculturist_id" type="hidden" value="<?php echo ID; ?>">
                <button class="btn waves-effect waves-light orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-reply"></i> ย้อนกลับ </button>
                <button class="btn waves-effect waves-light" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            </div>
        </form>
    </div>
</div>
<?php
$template->close();
?>