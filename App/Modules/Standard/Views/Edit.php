<?php
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
?>

    <div class="container" id="container-center">

        <div class="row card" style="padding: 10px;">

            <h4>ข้อมูลมาตรฐาน/รางวัล</h4>
            <form class="col s12" action="" method="post">
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input name="standard_name" type="text" class="validate" required
                               value="<?php echo $this->row->standard_name; ?>">
                        <label for="standard_name">ชื่อมาตรฐานที่ได้รับ</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input name="org" type="text" class="validate" required
                               value="<?php echo $this->row->org; ?>">
                        <label for="org">สถาบันหรือหน่วยงานที่กำหนดมาตรฐาน</label>
                    </div>
                </div>

                <div align="center" class="row">
                    <br> <br> <br>
                    <div class="col s12">
                        <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit"
                                id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก
                        </button>
                        <button class="btn waves-effect light-green" style="margin: 5px;" type="reset" name="reset"
                                value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่
                        </button>
                        <button class="btn waves-effect orange" style="margin: 5px;" type="button"
                                onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'">
                            <i class="fa fa-arrow-circle-left"></i> ย้อนกลับ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
$template->close();
?>