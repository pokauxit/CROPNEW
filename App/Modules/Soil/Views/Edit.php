<?php

use App\Modules\Soil\Controllers\Soil;
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
echo System\Utils\JS::load();
?>
<script>
    function check(obj) {
        if (!CHECK.val(obj.soil_name)) {
            return MSG.enter('ชื่อของดิน');
        }
        if (!CHECK.val(obj.soil_factor)) {
            return MSG.enter('จุดเด่นของดิน');
        }
        if (!CHECK.val(obj.soil_problem)) {
            return MSG.enter('ปัญหาของดิน');
        }
        if (!CHECK.val(obj.soil_nutrition)) {
            return MSG.enter('คุณค่าของดิน');
        }
    }
</script>
<div class="container" id="container-center">


    <div class="row card" style="padding: 10px;">

        <h4>จัดการดิน</h4>


        <form class="col s12" action="" method="post" onsubmit="return check(this)" >


            <div class="row  ">


                <div class="input-field col s12 m6">
                    <input name="soil_name" type="text" class="validate" required value="<?php echo $this->rowId->soil_name; ?>">
                    <label for="soil_name">ชื่อของดิน</label>
                </div>
                <div class="input-field  col  s12 m6">
                    <select name="soil_type">
                        <!--<option disabled selected>กรุณาเลือกรายการ</option>-->
                        <option value="1" <?php if($this->rowId->soil_type==1){echo 'selected';} ?>> ดินทราย  </option>
                        <option value="2" <?php if($this->rowId->soil_type==2){echo 'selected';} ?>> ดินตะกอน </option>
                        <option value="3" <?php if($this->rowId->soil_type==3){echo 'selected';} ?>> ดินเหนียว </option>
                        <option value="4" <?php if($this->rowId->soil_type==4){echo 'selected';} ?>> ดินร่วน </option>
                        <option value="5" <?php if($this->rowId->soil_type==5){echo 'selected';} ?>> ดินเค็ม  </option>
                    </select>
                    <label for="soil_type">ชนิดของดิน</label>
                </div>


            </div>

            <div class="row">
                <div class="input-field col  s12 m6">
                    <input name="soil_factor" type="text" class="validate" required value="<?php echo $this->rowId->soil_factor; ?>">
                    <label for="soil_factor">จุดเด่นของดิน</label>
                </div>

                <div class="input-field col s12 m6">
                    <input name="soil_problem" type="text" class="validate" required value="<?php echo $this->rowId->soil_problem; ?>">
                    <label for="soil_problem">ปัญหาของดิน</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col  s12 m6">
                    <input name="soil_nutrition" type="text" class="validate" required value="<?php echo $this->rowId->soil_nutrition; ?>">
                    <label for="soil_nutrition">คุณค่าของดิน</label>
                </div>
            </div>
            <div class="row">

                <div class=" col m2 s12">
                    &nbsp;

                </div>
                <div class="col m8 s12 center">
                    <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                    <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
                    <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>

                </div>
                <div class=" col m2 s12">
                    &nbsp;

                </div>
            </div>

        </form>
    </div>
</div>
<?php
$template->close();
?>