<?php

use App\Modules\CropApplication\Controllers\CropApplication;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain( $this->param(-2));

if (!empty($this->rowId->time_start) && $this->rowId->time_start != '0000-00-00') {
    $date = date_format(date_create($this->rowId->time_start), 'j F, Y');
} else {
    $date = '';
}
?>
<form class="col s12" action="" method="post">


    <div class="row  ">
        <div class="input-field col s12 m12">
            <textarea name="step_detail" class="materialize-textarea" rows="1" style="height:20px;"><?php echo $this->rowId->step_detail; ?></textarea>
            <label for="step_detail">รายละเอียด</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field  col  s12 m6">
            <input name="time_start" type="date" class="datepicker" value="<?php echo $date; ?>">
            <label for="time_start">เวลาที่เริ่มปลูก</label>
        </div>
        <div class="input-field col  s12 m6">  <label for="fertiltzer_peroid">ช่วงเวลาที่ให้ปุ๋ย</label>
            <input name="fertiltzer_peroid" type="text" class="validate" required value="<?php echo $this->rowId->fertiltzer_peroid; ?>">
          
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
<script>
    $(function () {
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>