<?php

Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
?>
<?php
echo System\Utils\JS::load();
?>
<script>

    function check(obj) {

        if (!CHECK.val(obj.unit_name)) {
            return MSG.enter('ชื่อหน่วย');
        }

    }

</script>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
        <div class="input-field col s12">
            <h4 class="pull-left">จัดการหน่วยผลผลิต</h4>
        </div>
        <br/>
        <form class="center" name="" id="" action="" method="post" onsubmit="return check(this);">
            <div class="row">
                <div class="input-field col s12 m12 center">
                    <input type="text" name="unit_name" id="unit_name" value="<?php echo $this->row->unit_name; ?>">
                    <label for="unit_name">ชื่อหน่วย</label>
                </div>

            </div>

            <div class="center">
                <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
                <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
            </div>            
        </form>
    </div>
</div>
</div>
<?php
$template->close();
?>
<!-- DEVAP START SET SELECTED -->
<script>
    $("#jQuery").ready(function () {
        $("#type_fertilizer_id option[id='<?php echo $this->row->type_fertilizer_id; ?>']").attr("selected", "selected");
        $('#type_fertilizer_id').material_select();
    });
</script>
<!-- DEVAP END SET SELECTED -->



