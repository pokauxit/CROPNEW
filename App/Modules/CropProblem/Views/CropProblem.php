<?php

use System\Template\Template;
use App\Modules\ServiceData\Controllers\ServiceData as Service;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));
?>

<table class="bordered  striped "  style="min-width: 500px;"  >
    <thead class="green">
        <tr>
            <th>ลำดับ</th>
            <th>ชนิดปัญหา</th>
            <th>ชื่อปัญหา</th>
            <th>รายละเอียด</th>
            <th>ความร้ายแรง</th>
            <th>อาการ</th>
            <th>เพิ่มเติม</th>
            <th>จัดการ</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $rowId = 1;
        while ($rc = $this->db->fetch()) {
            if ($rc->in_seiouscase == 1) {
                $in_seiouscase = 'ใช่';
            } else {
                $in_seiouscase = 'ไม่';
            }
            if ($rc->problem_type_id == 1) {
                $problem_type = 'โรค';
            } else if ($rc->problem_type_id == 2) {
                $problem_type = 'ศัตรูพืช';
            } else {
                $problem_type = 'วัชพืช';
            }
            ?>
            <tr>
                <td><?php echo $rowId++; ?></td>
                <td><?php echo $problem_type; ?></td>
                <td><?php echo $rc->disease_pest_weed_disease_pest_weed_name; ?></td>
                <td><?php echo $rc->crop_problem_detail; ?></td>
                <td><?php echo $in_seiouscase; ?></td>
                <td><?php echo $rc->symptom_symptom_name; ?></td>
                <td><?php echo $rc->note; ?></td>
                <td>
                      <a href="?ProblemControl//<?php echo $this->param(0) . '/' . $rc->crop_problem_id; ?>"><i class="green-text fa fa-arrow-circle-right"></i> เปิด </a>
                    | <a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->crop_problem_id); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->crop_problem_id); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                </td>
            </tr>
    <?php } ?>
    </tbody>
</table>

<p><br></p>
<div class="center"  >

<?php
$service = new Service();
$rc = $service->getCropByID(ID);
?>
    <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
    <a class="btn waves-effect orange" href="?Crop//<?php echo $rc->argiculturist_id ?>"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
</div>
<?php
$template->closeMain();
$template->close();
?>