<?php

use App\Modules\Staff\Controllers\Staff;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
echo System\Utils\JS::load();
?>
<script>function check(obj) {
        if (!CHECK.val(obj.staff_name)) {
            return MSG.enter('ชื่อ-สกุล');
        }
        if (!CHECK.val(obj.staff_user)) {
            return MSG.enter('ชื่อผู้ใช้');
        }
        if (!CHECK.val(obj.staff_pass)) {
            return MSG.enter('รหัสผ่าน');
        }
        if (!CHECK.eda(obj.staff_pass, obj.staff_pass_confirm)) {
            return MSG.enter('รหัสผ่านไม่ตรงกัน');
        }
    }</script>
<div class="container" id="container-center">


    <div class="row card" style="padding: 10px;">

        <h4>จัดการเจ้าหน้าที่</h4>


        <form class="col s12" action="" method="post" onsubmit="return check(this)" >


            <div class="row  ">


                <div class="input-field col s12 m6">
                    <input name="staff_name" type="text" class="validate" required>
                    <label for="staff_name">ชื่อ - สกุล</label>
                </div>
                <div class="input-field col s12 m6">
                    <input name="staff_user" type="text" class="validate" required>
                    <label for="staff_user">ชื่อเข้าใช้งาน</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col  s12 m6">
                    <input name="staff_pass" type="password" class="validate" required>
                    <label for="staff_pass">รหัสผ่าน</label>
                </div>
                <div class="input-field  col  s12 m6">
                    <select name="staff_level">
                        <!--<option disabled selected>กรุณาเลือกรายการ</option>-->
                        <option value="1"> ระดับ 1 </option>
                        <option value="2"> ระดับ 2 </option>
                        <option value="3"> ระดับ 3 </option>
                        <option value="4"> ระดับ 4 </option>
                    </select>
                    <label for="staff_level">สิทธิ์เข้าใช้งาน</label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col  s12 m6">
                    <input name="staff_pass_confirm" type="password" class="validate" required>
                    <label for="staff_pass_confirm">ยืนยันรหัสผ่าน</label>
                </div>
            </div>
            <div class="row">

                <div class=" col m2 s12">
                    &nbsp;

                </div>
                <div class="col m8 s12 center">
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