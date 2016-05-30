<?php

use App\Modules\CropHarvest\Controllers\CropHarvest;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));
?>
<form class="col s12" action="" method="post">

    <div class="row">
        <div class="input-field col s12 m3">
            <label for="harvest_algorithm">วิธีการเก็บเกียว</label>
            <input name="harvest_algorithm" type="text" class="validate" required value="<?php echo $this->rowId->harvest_algorithm; ?>">
        </div>
        <div class="input-field  col  s12 m3">
            <select name="season">
                <option selected disabled>กรุณาเลือกรายการ</option>
                <option value="ฤดูร้อน" <?php if($this->rowId->season=='ฤดูร้อน'){echo 'selected';} ?>>ฤดูร้อน</option>
                <option value="ฤดูฝน" <?php if($this->rowId->season=='ฤดูฝน'){echo 'selected';} ?>>ฤดูฝน</option>
                <option value="ฤดูหนาว" <?php if($this->rowId->season=='ฤดูหนาว'){echo 'selected';} ?>>ฤดูหนาว</option>
            </select>
            <label for="season">ฤดูกาล</label>
        </div>
        <div class="input-field  col  s12 m3">
            <label for="amout">จำนานผลผลิต</label>
            <input name="amout" type="number" class="validate" required value="<?php echo $this->rowId->amout; ?>">
        </div>
        <div class="input-field col  s12 m3">
            <label for="unit">หน่วยผลผลิต</label>
            <input name="unit" type="text" class="validate" required value="<?php echo $this->rowId->unit; ?>">
        </div>
    </div>
    
    <div class="row  ">
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