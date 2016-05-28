<?php

Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container">
    <div style="margin-top: 15px;">
        <h4 class="pull-left">จัดการพืชที่เกษตรกรปลูก</h4>
        <a class="btn waves-effect waves-light pull-right" href="<?php echo $this->route->Add();
echo '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> Add</a>
    </div>
    <div class="row">
        <table class="responsive-table highlight striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสพืช</th>
                    <th>ปริมาณแสง</th>
                    <th>แหล่งน้ำ</th>
                    <th>ความเร็วลม</th>
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
                        <td><?php echo $rc->plant_id; ?></td>
                        <td><?php echo $rc->sunlight; ?></td>
                        <td><?php echo $rc->water_source; ?></td>
                        <td><?php echo $rc->wind; ?></td>
                        <td><?php echo $rc->spetial_information; ?></td>
                        <td>
                            <!--class="btn waves-effect waves-light blue" -->
                            <a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->crop_id); ?>"><i class="fa fa-edit"></i> แก้ไข </a>
                            | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->crop_id); ?>"><i class="fa fa-trash"></i> ลบ </a>
                        </td>
                    </tr>
<?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$template->close();
?>
