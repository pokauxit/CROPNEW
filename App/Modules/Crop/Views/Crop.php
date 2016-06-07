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
                    <th>รหัสพืช</th>
                    <th>ปริมาณแสง</th>
                    <th>แหล่งน้ำ</th>
                    <th>ความเร็วลม (Km/h)</th>
                    <th>ข้อมูลพิเศษ</th>
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
                        <td><?php echo $rc->plant_plant_name; ?></td>
                        <td><?php echo $rc->sunlight; ?></td>
                        <td><?php echo $rc->water_source; ?></td>
                        <td><?php echo $rc->wind; ?></td>
                        <td><?php echo $rc->spetial_information; ?></td>
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
<?php
$template->close();
?>
