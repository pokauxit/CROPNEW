<?php

Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav2level(ID);
$template->ageiculturistInfo(ID);
?>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 


        <h4 class="pull-left">จัดการพืชที่เกษตรกรปลูก</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;"  >
            <thead class="green">
                <tr>
                    <th>ลำดับ</th>
                    <th>พืช</th>
                    <th>ปริมาณแสง</th>
                    <th>แหล่งน้ำ</th>
                    <th>ความเร็วลม (Km/h)</th>
                    <th>ข้อมูลพิเศษ</th>
                    <th>พื้นที่</th>
                    <th>มาตราฐาน</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rowId = 1;
                while ($rc = $this->db->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $rowId++; ?></td>
                        <td><a href="javascropt:" onclick="showPlantInfo('<?php echo $rc->plant_id; ?>');"><?php echo $rc->plant_plant_name; ?></a></td>
                        <td><?php echo $rc->sunlight; ?></td>
                        <td><?php echo $rc->water_source; ?></td>
                        <td><?php echo $rc->wind; ?></td>
                        <td><?php echo $rc->spetial_information; ?></td>
                        <td><?php echo $rc->area_sequence; ?></td>
                        <td><?php echo $rc->agr_standard_id; ?></td>
                        <td>
                            <a href="<?php echo '?CropApplication//' . $rc->crop_id; ?>"><i class="green-text fa fa-arrow-circle-right"></i> เปิด </a>
                            | <a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->crop_id); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                            | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->crop_id); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p><br></p>

        <div class="center"  >
            <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
            <a class="btn waves-effect orange" href="?Ageiculturist"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
        </div>
    </div>

</div>
<div id="plant" class="modal">
    <div style="text-align: center;padding: 3px">
        <span style="float: right">
            <a href="javascript:;" class="modal-action modal-close red-text"><i class="fa fa-lg fa-times"></i></a>
        </span>
    </div>
    <div id="plant_detail"></div>
</div>
<?php
$template->close();
?>
<script>
    function showPlantInfo(plant_id) {
        var value = plant_id;
        $.ajax({
            'type': 'POST',
            'url': '?ServiceData',
            'cache': false,
            'data': {'showPlant': value},
            'success': function (result) {
                $('#plant_detail').html(result);
                $('#plant').openModal();
            }
        });
    }
</script>