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
            <label for="type">ชนิดปุ๋ย</label>
        </div>
        <div class="input-field  col  s12 m6">
            <select name="bio_fer_id" id="bio_fer_id">
            </select>
            <label for="bio_fer_id">ชื่อปุ๋ย</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field  col  s12 m4">
            <label for="apply_fertilizer_amout">จำนวนการให้ปุ้ย</label>
            <input name="apply_fertilizer_amout" type="number" class="validate" required>
        </div>
        <div class="input-field col  s12 m4">
            <label for="apply_fertiltzer_unit">หน่วยการให้ปุ๋ย</label>
            <input name="apply_fertiltzer_unit" type="text" class="validate" required>
        </div>
        <div class="input-field col s12 m4">
            <label for="appy_fertilizer_frequency">ความถี่ในการให้ปุ๋ย</label>
            <input name="appy_fertilizer_frequency" type="text" class="validate" required>
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