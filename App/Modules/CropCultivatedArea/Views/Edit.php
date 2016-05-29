<?php

use System\Template\Template;
use App\Modules\Soil\Controllers\Soil;

$template = new Template();
$template->open();
$template->openMain($this->param(-2));
?>
<form class="col s12" action="" method="post">

    <div class="row">
        <div class="input-field col s12 m4">
            <select name="soil_id">
                <?php
                $Soil = new Soil();
                echo $Soil->getSoilAll($this->rowId->soil_id); // ส่ง ID ไป Selected
                ?>
            </select>
            <label for="soil_id">ชื่อดิน</label>
        </div>
        <div class="input-field col s12 m4">
            <label for="lat">ละติจูด</label>
            <input name="lat" type="text" class="validate" required value="<?php echo $this->rowId->lat; ?>">
        </div>
        <div class="input-field col s12 m4">
            <label for="long">ลองติจูด</label>
            <input name="long" type="text" class="validate" required value="<?php echo $this->rowId->long; ?>">
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m6">
            <label for="area_detail">ข้อมูลพื้นที่</label>
            <input name="area_detail" type="text" class="validate" required value="<?php echo $this->rowId->area_detail; ?>">
        </div>
        <div class="input-field col s12 m6">
            <label for="soil_drainage">การระบายน้ำของดิน</label>
            <input name="soil_drainage" type="text" class="validate" required value="<?php echo $this->rowId->soil_drainage; ?>">
        </div>
    </div>
    <div align="center">
        <input name="crop_id" type="hidden" value="<?php echo ID; ?>">
        <button class="btn waves-effect green" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect light-green" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
        <button class="btn waves-effect orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
    </div>
    <p><br></p>
</form>
<?php
$template->closeMain();
$template->close();
?>