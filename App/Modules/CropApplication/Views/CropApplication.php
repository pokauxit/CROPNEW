<?php

use System\Template\Template;

$template = new Template();
$template->open();
$template->openMain( $this->param(-2));
?>

<table class="bordered  striped "  style="min-width: 500px;"  >
    <thead class="green">
        <tr>
            <th>ลำดับ</th>
            <th>รายละเอียด</th>
            <th>เวลาที่เริ่มปลูก</th>
            <th>ช่วงเวลาที่ให้ปุ๋ย</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $rowId = 1;
        while ($rc = $this->db->fetch()) {
            if (!empty($rc->time_start) && $rc->time_start != '0000-00-00') {
                $date = date_format(date_create($rc->time_start), 'd/m/Y');
            } else {
                $date = '';
            }
            ?>
            <tr>
                <td><?php echo $rowId++; ?></td>
                <td><?php echo $rc->step_detail; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $rc->fertiltzer_peroid; ?></td>
                <td><a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->step); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->step); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
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