<?php

use App\Modules\AgrStandard\Controllers\AgrStandard;
use App\Modules\Standard\Controllers\Standard;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav2level(ID);
$template->ageiculturistInfo(ID);
?>
<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 


        <h4 class="pull-left">จัดการมาตรฐาน</h4>

        <form class="col s12" action="" method="post">

            <div class="row">
                <div class="input-field  col  s12 m6">
                    <select name="sid">
                        <?php
                        $Standard = new Standard();
                        echo $Standard->getStandardAll(); // ส่ง ID ไป Selected
                        ?>
                    </select>
                    <label for="sid">ชื่อมาตรฐาน</label>
                </div>
                <div class="input-field  col  s12 m3">
                    <label for="start_year">ปีที่ได้รับ</label>
                    <input name="start_year" type="text" class="validate" required>
                </div>
                <div class="input-field col  s12 m3">
                    <label for="end_year">ปีที่สิ้นสุด</label>
                    <input name="end_year" type="text" class="validate" required>
                </div>
            </div>

            <div class="row  ">
                <div class="input-field col s12 m12">
                    <label for="remark">เพิ่มเติม</label>
                    <textarea name="remark" class="materialize-textarea" rows="1" style="height:20px;"></textarea>
                </div>
            </div>
            <div align="center">
                <input name="agriculturist_id" type="hidden" value="<?php echo ID; ?>">
                <button class="btn waves-effect green" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                <button class="btn waves-effect light-green" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
                <button class="btn waves-effect orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
            </div>
            <p><br></p>
        </form>
    </div>
</div>
<?php
$template->close();
?>