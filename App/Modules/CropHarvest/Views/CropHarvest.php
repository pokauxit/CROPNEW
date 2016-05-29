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
            <th>ฤดูกาล</th>
            <th>จำนานผลผลิต</th>
            <th>หน่วยผลผลิต</th>
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
                <td><?php echo $rc->season; ?></td>
                <td><?php echo $rc->amout; ?></td>
                <td><?php echo $rc->unit; ?></td>
                <td><a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->harvest_id); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->harvest_id); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
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