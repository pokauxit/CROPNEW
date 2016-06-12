<?php

use App\Modules\CropProduct\Controllers\CropProduct;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));
?>
<form class="col s12" action="" method="post">

    <div class="row">
        <div class="input-field  col  s12 m4">
            <select name="season">
                <option selected disabled>กรุณาเลือกรายการ</option>
                <option value="ฤดูร้อน" <?php
                if ($this->rowId->season == 'ฤดูร้อน') {
                    echo 'selected';
                }
                ?>>ฤดูร้อน</option>
                <option value="ฤดูฝน" <?php
                if ($this->rowId->season == 'ฤดูฝน') {
                    echo 'selected';
                }
                ?>>ฤดูฝน</option>
                <option value="ฤดูหนาว" <?php
                if ($this->rowId->season == 'ฤดูหนาว') {
                    echo 'selected';
                }
                ?>>ฤดูหนาว</option>
            </select>
            <label for="season">ฤดูกาล</label>
        </div>
        <div class="input-field  col  s12 m4">
            <label for="amout">จำนานผลผลิต</label>
            <input name="amout" type="number" class="validate" required value="<?php echo $this->rowId->amout; ?>">
        </div>
        <div class="input-field col  s12 m4">
            <div class="pull-left" style="width:80%;display: inline-block;">
                <input type="hidden" id="old_value" value="<?php echo $this->rowId->unit; ?>">
                <select id="unit" name="unit">
                </select>
                <label for="unit">หน่วยนับผลผลิต</label>
            </div>
            <a class="btn-floating center-align modal-trigger" href="#unit_add_m"><i  class=" material-icons" style="padding-left: 5px;" >add circle</i></a>
        </div>
    </div>

    <div class="row  ">
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
            <label for="unit_add">หน่วยนับผลผลิต</label>
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
        ReData();
        $('select').on('contentChanged', function () {
            $(this).material_select('destroy');
            $(this).material_select();
        });
    });
    function ReData() {
        var select = $('#old_value').val();
        $.ajax({
            'type': 'POST',
            'url': '?ProductUnit/getUnitAll/',
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
            'url': '?ProductUnit/AddByAJAX/',
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