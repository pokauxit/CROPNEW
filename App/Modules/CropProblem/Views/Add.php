<?php

use App\Modules\CropProblem\Controllers\CropProblem;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));

$service = new Service();
$sv =  $service->getCropByID(ID);
?>
<form class="col s12" action="" method="post">
    <input type="hidden" id="id_plant" value="<?php echo $sv->plant_id; ?>">
    <div class="row">
        <div class="input-field  col  s12 m4">
            <select name="problem_type_id" id="problem_type_id">
                <option disabled selected>กรุณาเลือกรายการ</option>
                <option value="1">โรค</option>
                <option value="2">ศัตรูพืช</option>
                <option value="3">วัชพืช</option>
            </select>
            <label for="problem_type_id">ชนิดปัญหา</label>
        </div>
        <div class="input-field  col  s12 m4">
            <select name="disease_pest_weed_id" id="disease_pest_weed_id">
            </select>
            <label for="disease_pest_weed_id">ชื่อปัญหา</label>
        </div>
        <div class="input-field  col  s12 m4">
            <label for="crop_problem_detail">รายละเอียด</label>
            <input name="crop_problem_detail" type="text" class="validate" required>
        </div>
    </div>

    <div class="row">
        <div class="input-field  col  s12 m4">
            <select name="in_seiouscase">
                <option disabled selected>กรุณาเลือกรายการ</option>
                <option value="1">ใช่</option>
                <option value="2">ไม่</option>
            </select>
            <label for="in_seiouscase">ความร้ายแรง</label>
        </div>
        <div class="input-field col  s12 m8">
            <label for="note">เพิ่มเติม</label>
            <input name="note" type="text" class="validate" required>
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
        $('select').on('contentChanged', function () {
            $(this).material_select('destroy');
            $(this).material_select();
        });
        $(document).on('change', '#problem_type_id', function () {
            reData();
        });
    });

    function reData() {
        var id1 = $('#problem_type_id').val();
        var id2 = $('#id_plant').val();
        $('#disease_pest_weed_id option').remove();
        $.ajax({
            'type': 'POST',
            'url': '?DiseasePestWeed/getWeed',
            'cache': false,
            'data': {'id1': id1, 'id2': id2},
            'success': function (result) {
                $('#disease_pest_weed_id').append(result);
                $('#disease_pest_weed_id').trigger('contentChanged');
                $('#disease_pest_weed_id').val(select).trigger('contentChanged');
            }
        });
    }
</script>