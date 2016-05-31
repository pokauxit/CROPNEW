<?php
Use System\Template\Template;
use \App\Models\plant as pln;

$template = new Template();
$template->open();
$template->nav1level();
?>

<div class="container" id="container-center">

    <div class="row card" style="padding: 10px;">

        <h4>ข้อมูลอาการ</h4>
        <form class="col s12" action="" method="post">
            <div class="row">
                <div class="input-field col m6 s12">
                    <select id="symptom_id" name="symptom_id">
                        <option selected disabled>กรุณาเลือกรายการ</option>
                        <?php while ($symptom = $this->symptoms->fetch()): ?>
                            <option
                                value="<?php echo $symptom->symptom_id; ?>"
                                <?php if ($this->rowId->symptom_id == $symptom->symptom_id):
                                    print 'selected';
                                else:
                                    print '';
                                endif; ?>><?php echo $symptom->symptom_name; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <label for="plant_id">อาการ</label>
                </div>
                <div class="input-field col  m6 s12">
                    <input name="detail" type="text" class="validate" required
                           value="<?php echo $this->rowId->detail; ?>">
                    <label for="detail">รายละเอียด</label>
                </div>
            </div>
            <div class="row">
                <input name="disease_pest_weed_id" type="hidden" value="<?php echo ID; ?>">
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
                            onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'">
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
<script>
    $(document).ready(function () {
        $(document).on('submit', 'form', function (e) {
            if ($('#symptom_id').val() > 0) {
                $('form').submit();
            } else {
                alert('กรุณาเลือกอาการ');
                $('#symptom_id').focusin();
                e.preventDefault();
            }

            e.preventDefault();
        });
    });
</script>
