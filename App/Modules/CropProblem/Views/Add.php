<?php

use App\Modules\CropProblem\Controllers\CropProblem;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));

$service = new Service();
$sv = $service->getCropByID(ID);
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
            <select name="disease_symptom_id" id="disease_symptom_id">
            </select>
            <label for="disease_symptom_id">อาการ</label>
        </div>
        <div class="input-field  col  s12 m4">
            <select name="in_seiouscase">
                <option disabled selected>กรุณาเลือกรายการ</option>
                <option value="1">ใช่</option>
                <option value="2">ไม่</option>
            </select>
            <label for="in_seiouscase">ความร้ายแรง</label>
        </div>
        <div class="input-field col  s12 m4">
            <label for="note">เพิ่มเติม</label>
            <input name="note" type="text" class="validate" required>
        </div>
    </div>
    <div class="row" style="text-align: left">
        <div id="symptom_list">   
            <a class="btn-floating center-align modal-trigger" href="#add_symptom"><i  class=" material-icons" style="padding-left: 5px;" >add circle</i></a>
            <!--<div class="chip">Tag<i class="material-icons">close</i></div>-->
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
<div id="add_symptom" class="modal" style="max-width: 400px">
    <div style="text-align: center;padding: 3px">
        <span style="float: right">
            <a href="javascript:;" class="modal-action modal-close red-text"><i class="fa fa-lg fa-times"></i></a>
        </span>
    </div>
    <div>
        <div class="input-field  col  s12 m12">
            <label for="sym_add">อาการ</label>
            <input name="sym_add" id="sym_add" type="text">
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
        $('#sym_add').typeahead({
            displayField: 'name',
            valueField: 'id',
            source: <?= $this->json; ?>,
            onSelect: displayResult
        });

        function displayResult(item) {
            window.setTimeout(function () {
                var newText, newValue;
                newText = item.text;
                newValue = item.value;
                if (newValue > 0) {
                    $('#sym_add').val(newText);
                    $("#sym_add").data('id', newValue);
                    save_add();
                } else {
                    $('#sym_add').val('');
                    $("#sym_add").data('id', '');
                }
            }, 100);
        }

        $('select').on('contentChanged', function () {
            $(this).material_select('destroy');
            $(this).material_select();
        });
        $(document).on('change', '#problem_type_id', function () {
            $('#disease_symptom_id').empty();
            $('#disease_symptom_id').trigger('contentChanged');
            reData();

        });
        $(document).on('change', '#disease_pest_weed_id', function () {
            $('#disease_symptom_id').empty();
            $('#disease_symptom_id').trigger('contentChanged');
            window.setTimeout(function () {
                reSymptom();
            }, 500);
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

                window.setTimeout(function () {
                    reSymptom();
                }, 200);
            }
        });
    }

    function reSymptom() {
        var id1 = $('#problem_type_id').val();
        var id2 = $('#disease_pest_weed_id').val();
        var select = $('#old_disease_symptom_id').val();
        $('#disease_symptom_id').empty();
        if (id1 == '1' && id2 > '0') {
            $.ajax({
                'type': 'POST',
                'url': '?DiseaseSymptom/getSymptom',
                'cache': false,
                'data': {'id1': id2},
                'success': function (result) {
                    $('#disease_symptom_id').empty();
                    $('#disease_symptom_id').append(result);
                    $('#disease_symptom_id').trigger('contentChanged');
                    $('#disease_symptom_id').val(select).trigger('contentChanged');
                }
            });
        }
    }

    var x_ind = 0;
    function save_add() {
        var check = 0;
        var sym_val = $("#sym_add").val();
        var sym_id = $("#sym_add").data('id');
        $('.symptom').each(function () {
            if ($(this).val() == sym_id) {
                check++;
            }
        });
        if (check == 0) {
            $("#symptom_list").append("<div class=\"chip\">" + sym_val + "<input type=\"hidden\" class=\"symptom\" name=\"symptom[]\" value=\"" + sym_id + "\"><i class=\"material-icons\">close</i></div>");
        }
        $('#add_symptom').closeModal();
        $("#sym_add").val('');
        $("#sym_add").data('id', '');
    }
</script>