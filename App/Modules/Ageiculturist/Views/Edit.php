<?php
use App\Modules\AutoProvince\Controllers\AutoProvince;
Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container" id="container-center">

    <div class="row card" style="padding: 10px;">

        <h4>จัดการข้อมูลเกษตรกร</h4>

        <form class="col s12" action="" method="post">
            <div class="row">
                <div class="input-field col m4 s12">
                    <input name="home_no" type="text" class="validate" required
                           value="<?php echo $this->row->home_no; ?>">
                    <label for="home_no">บ้านเลขที่</label>
                </div>
                <div class="input-field col   m4 s12">
                    <input name="phone_no" type="number" class="validate" required
                           value="<?php echo $this->row->phone_no; ?>">
                    <label for="phone_no">หมายเลขโทรศัพท์</label>
                </div>
                <div class="input-field col  m4 s12">
                    <input name="agriculturist_name" type="text" class="validate" required
                           value="<?php echo $this->row->agriculturist_name; ?>">
                    <label for="agriculturist_name">ชื่อเกษตรกร</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col  m4 s12">
                    <select id="province_id" name="province_id">
                        <option disabled selected>กรุณาเลือกรายการ</option>
                        <?php $province = new AutoProvince();
                        echo $province->getProvinceFromEdit($this->row->tambon_id);
                        ?>
                    </select>
                    <label for="province_id">จังหวัด</label>
                </div>
                <div class="input-field col  m4 s12">
                    <select id="amphur_id" name="amphur_id">
                        <option disabled selected>กรุณาเลือกจังหวัด</option>
                        <?php $amphur = new AutoProvince();
                        echo $amphur->getAmphurFromEdit($this->row->tambon_id);
                        ?>
                    </select>
                    <label for="amphur_id">อำเภอ</label>

                </div>
                <div class="input-field col  m4 s12">
                    <select id="tambon_id" name="tambon_id">
                        <option disabled selected>กรุณาเลือกอำเภอ</option>
                        <?php $tambon = new AutoProvince();
                        echo $tambon->getTambonFromEdit($this->row->tambon_id);
                        ?>
                    </select>
                    <label for="tambon_id">ตำบล</label>
                </div>
            </div>


            <div align="center" class="row">
                <br> <br> <br>
                <div class="col s12">
                    <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                    <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
                    <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
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

        try {
            refreshOption();
            $(document).on('submit', 'form', function (e) {

                if ($('#tambon_id').val() > 0) {
                    $("form").submit();
                } else {
                    alert('กรุณาเลือกตำบล');
                }
                e.preventDefault();
            });

            $(document).on('change', '#province_id', function (e) {
                e.preventDefault();

                if ($('#province_id').val() > 0) {
                    validateProvince();
                    var provinceId = $('#province_id').val();
                    callBackAjax('province_id', provinceId);
                } else {
                    validateProvince();
                }
            });

            $(document).on('change', '#amphur_id', function (e) {
                e.preventDefault();

                if ($('#amphur_id').val() > 0) {
                    validateAmphur();
                    var amphurId = $('#amphur_id').val();
                    callBackAjax('amphur_id', amphurId);
                } else {
                    validateAmphur();
                }
            });


            function callBackAjax(key, value) {
                var action = key;

                console.log("action " + key);
                console.log("id " + value);

                $.ajax({
                    'type': 'POST',
                    'url': '?AutoProvince',
                    'cache': false,
                    'data': {'action': key, 'value': value},
                    'success': function (result) {
                        console.log(action);
                        console.log(result);
                        if (action === 'province_id') {
                            $('#amphur_id').append(result);
                            refreshOption();
                        }

                        if (action === 'amphur_id') {
                            $('#tambon_id').append(result);
                            refreshOption();
                        }
                    }
                });
            }

            function refreshOption() {
                $('select').material_select('destroy');
                $('select').material_select();
            }

            function validateAll() {
                $('#amphur_id').empty();
                $('#tambon_id').empty();

                $('#amphur_id').html('<option disabled selected>กรุณาเลือกจังหวัด</option>');
                $('#tambon_id').html('<option>กรุณาเลือกจอำเภอ</option>');
            }

            function validateProvince() {
                $('#amphur_id').empty();
                $('#tambon_id').empty();

                $('#amphur_id').html('<option disabled selected>กรุณาเลือกรายการ</option>');
                $('#tambon_id').html('<option>กรุณาเลือกจอำเภอ</option>');
            }

            function validateAmphur() {
                $('#tambon_id').empty();
                $('#tambon_id').html('<option disabled selected>กรุณารายการ</option>');
            }

        } catch (e) {
            alert(e);
        }
    });

</script>