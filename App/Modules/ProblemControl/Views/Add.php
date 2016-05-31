<?php

use App\Modules\TypeFertilizer\Controllers\TypeFertilizer;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));
?>
<form class="col s12" action="" method="post">

    <div class="row">
        <div class="input-field  col  s12 m6">
            <select name="type_bio" id="type_bio">
                <?php
                $TypeFertilizer = new TypeFertilizer();
                echo $TypeFertilizer->getTypeFertilizerAll(); // ส่ง ID ไป Selected
                ?>
            </select>
            <label for="type">ชนิดสารชีวภาพ/ปุ๋ย</label>
        </div>
        <div class="input-field  col  s12 m6">
            <select name="bio_fer_id" id="bio_fer_id">
            </select>
            <label for="bio_fer_id">สารชีวภาพ/ปุ๋ย</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field  col  s12 m3">
            <label for="cmaount">จำนวนที่ใช้</label>
            <input name="cmaount" type="number" class="validate" required>
        </div>
        <div class="input-field col  s12 m3">
            <label for="unit">หน่วย</label>
            <input name="unit" type="text" class="validate" required>
        </div>
        <div class="input-field col s12 m6">
            <label for="control_detail">รายละเอียด</label>
            <input name="control_detail" type="text" class="validate" required>
        </div>
    </div>
    <div align="center">
        <input name="crop_problem_id" type="hidden" value="<?php echo $this->param(1); ?>">
        <button class="btn waves-effect green" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect light-green" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
        <button class="btn waves-effect orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0) . '/' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
    </div>
    <p><br></p>
</form>
<?php
$template->closeMain();
$template->close();
?>
<script>
    $(function () {
        $(document).on('change', '#type_bio', function () {
            var value = $(this).val();
            $('#bio_fer_id option').remove();
            $.ajax({
                'type': 'POST',
                'url': '?CropApplyFertilizer',
                'cache': false,
                'data': {'List': value},
                'success': function (result) {
                    $('#bio_fer_id').append(result);
                    refreshOption();
                }
            });
        });

        function refreshOption() {
            $('select').material_select('destroy');
            $('select').material_select();
        }
    });
</script>