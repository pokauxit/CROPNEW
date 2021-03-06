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
                echo $TypeFertilizer->getTypeFertilizerAll($this->rowId2->type_fertilizer_id); // ส่ง ID ไป Selected
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
            <input name="cmaount" type="number" class="validate" required value="<?php echo $this->rowId->cmaount; ?>">
        </div>
        <div class="input-field col  s12 m4">
            <input type="hidden" id="unit_value" value="<?php echo $this->rowId->unit; ?>">
            <div class="pull-left" style="width:80%;display: inline-block;">
                <select id="unit" name="unit">
                </select>
                <label for="unit">หน่วย</label>
            </div>
            <a class="btn-floating center-align modal-trigger" href="#unit_add_m"><i  class=" material-icons" style="padding-left: 5px;" >add circle</i></a>
        </div>
        <div class="input-field col s12 m5">
            <label for="control_detail">รายละเอียด</label>
            <input name="control_detail" type="text" class="validate" required value="<?php echo $this->rowId->control_detail; ?>">
        </div>
    </div>
    <div align="center">
        <input name="crop_problem_id" type="hidden" value="<?php echo $this->param(1); ?>">
        <input id="tmp_bio" type="hidden" value="<?php echo $this->rowId->bio_fer_id; ?>">
        <button class="btn waves-effect green" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect light-green" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
        <button class="btn waves-effect orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0) . '/' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
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
        edit();
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
                }
            });
        });

        function edit() {
            var value = $('#type_bio').val();
            var select = $('#tmp_bio').val();
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
        }

        $('select').on('contentChanged', function () {
            $(this).material_select('destroy');
            $(this).material_select();
        });
        window.setTimeout(function () {
            ReData();
        }, 100);
    });

    function ReData() {
        var select = $('#unit_value').val();
        $.ajax({
            'type': 'GET',
            'url': '?FertilizerUnit/getUnitAll/',
            'cache': false,
            'success': function (result) {
                $('#unit').empty();
                $('#unit').append(result);
                $('#unit').trigger('contentChanged');
                $('#unit').val(select).trigger('contentChanged');
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