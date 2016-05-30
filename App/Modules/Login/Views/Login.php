<?php
Use System\Template\Template;

$template = new Template();
$template->open();
?>
    <div class="container" id="container-center">
        <div class="row card" style="padding: 10px;">
            <form action="" method="post">
                <div class="row">
                    <div class="col m4"><br></div>
                    <div class="col m4">
                        <div class="row">
                            <h4 class="center">เข้าสู่ระบบ</h4>
                            <div class="input-field col s12">
                                <input id="staff_user" name="staff_user" type="text" class="validate" required>
                                <label for="staff_user">บัญชีผู้ใช้</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="staff_pass" name="staff_pass" type="password" class="validate" required>
                                <label for="staff_pass">รหัสผ่าน</label>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col s12">
                                <button class="btn waves-effect green " style="margin: 5px;" type="submit"
                                        name="submit"
                                        id="btn-submit" value="ss"><i class="fa fa-sign-in"></i> เข้าระบบ
                                </button>
                                <button class="btn waves-effect light-green" style="margin: 5px;" type="reset"
                                        name="reset"
                                        value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col m4"><br></div>
                </div>

            </form>
        </div>
    </div>

<?php
$template->close();
?>