<?php

use App\Modules\CropProblem\Controllers\CropProblem;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));
?>
<form class="col s12" action="" method="post">

    <div class="row">
        <div class="input-field  col  s12 m4">
            <select name="problem_type_id">
                <option disabled selected>กรุณาเลือกรายการ</option>
                <option value="1" <?php if($this->rowId->problem_type_id == 1){echo 'selected';} ?>>โรค</option>
                <option value="2" <?php if($this->rowId->problem_type_id == 2){echo 'selected';} ?>>ศัตรูพืช</option>
                <option value="3" <?php if($this->rowId->problem_type_id == 3){echo 'selected';} ?>>วัชพืช</option>
            </select>
            <label for="problem_type_id">ชนิดปัญหา</label>
        </div>
        <div class="input-field  col  s12 m8">
            <label for="crop_problem_detail">รายละเอียด</label>
            <input name="crop_problem_detail" type="text" class="validate" required value="<?php echo $this->rowId->crop_problem_detail; ?>">
        </div>
    </div>

    <div class="row">
        <div class="input-field  col  s12 m4">
            <select name="in_seiouscase">
                <option disabled selected>กรุณาเลือกรายการ</option>
                <option value="1" <?php if($this->rowId->in_seiouscase == 1){echo 'selected';} ?>>ใช่</option>
                <option value="2" <?php if($this->rowId->in_seiouscase == 2){echo 'selected';} ?>>ไม่</option>
            </select>
            <label for="in_seiouscase">ความร้ายแรง</label>
        </div>
        <div class="input-field col  s12 m8">
            <label for="note">เพิ่มเติม</label>
            <input name="note" type="text" class="validate" required value="<?php echo $this->rowId->note; ?>">
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