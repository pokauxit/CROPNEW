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
            <div class="pull-left" style="width:80%;display: inline-block;">
                <select id="apply_fertiltzer_unit" name="apply_fertiltzer_unit">
                </select>
                <label for="apply_fertiltzer_unit">หน่วยการให้ปุ๋ย</label>
            </div>
            <a class="btn-floating center-align modal-trigger" href="#unit_add_m"><i  class=" material-icons" style="padding-left: 5px;" >add circle</i></a>
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
<div id="unit_add_m" class="modal" style="max-width: 400px">
    <div style="text-align: center;padding: 3px">
        <span style="float: right">
            <a href="javascript:;" class="modal-action modal-close red-text"><i class="fa fa-lg fa-times"></i></a>
        </span>
    </div>
    <div>
        <div class="input-field  col  s12 m12">
            <label for="unit_add">หน่วยการให้ปุ๋ย</label>
            <input name="unit_add" id="unit_add" type="text">
        </div>
        <br>
        <button class="btn waves-effect green" type="button" id="save_add" onclick="save_add();"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect red modal-action modal-close" type="button"><i class="fa fa-times"></i> ยกเลิก </button>
        <br><br>
    </div>
</div>
<?php
$template->closeMain();
$template->close();
?>
<script>
    $(function () {
        $('select').on('contentChanged', function () {
            $(this).material_select('destroy');
            $(this).material_select();
        });

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
                    $('#bio_fer_id').trigger('contentChanged');
                    $('#bio_fer_id').val(select).trigger('contentChanged');
                }
            });
        });

        ReData();
    });
    function ReData() {
        $.ajax({
            'type': 'GET',
            'url': '?FertilizerUnit/getUnitAll/',
            'cache': false,
            'success': function (result) {
                $('#apply_fertiltzer_unit').empty();
                $('#apply_fertiltzer_unit').append(result);
                $('#apply_fertiltzer_unit').trigger('contentChanged');
                $('#apply_fertiltzer_unit').val(select).trigger('contentChanged');
            }
        });
    }
    function save_add() {
        var data = $('#unit_add').val();
        $.ajax({
            'type': 'POST',
            'url': '?FertilizerUnit/AddByAJAX/',
            'cache': false,
            'data': {'unit_name': data},
            'success': function (result) {
                if ($.trim(result) == 'Success') {
                    $('#unit_add').val('');
                    alert('บันทึกสำเร็จ');
                    ReData();
                    $('#unit_add_m').closeModal();
                } else {
                    alert('บันทึกไม่สำเร็จ');
                }
            }
        });
    }
</script>