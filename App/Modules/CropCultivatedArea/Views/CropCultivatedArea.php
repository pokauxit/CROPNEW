<?php

use System\Template\Template;

$template = new Template();
$template->open();

$template->openMain($this->param(-2));
?>

<table class="bordered  striped "  style="min-width: 500px;"  >
    <thead class="green">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อดิน</th>
            <th>ละติจูด</th>
            <th>ลองติจูด</th>
            <th>ข้อมูลพื้นที่</th>
            <th>การระบายน้ำของดิน</th>
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
                <td><?php echo $rc->soil_soil_name; ?></td>
                <td><?php echo $rc->lat; ?></td>
                <td><?php echo $rc->long; ?></td>
                <td><?php echo $rc->area_detail; ?></td>
                <td><?php echo $rc->soil_drainage; ?></td>
                <td><a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->area_sequence); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->area_sequence); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<p><br></p>
<div class="center"  >
    <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> Add</a>
    <a class="btn waves-effect orange" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i class="fa fa-arrow-circle-left"></i> Back</a>
</div>

<?php
$template->closeMain();
$template->close();
?>