<?php

use System\Template\Template;
$template = new Template();
$template->open();
$template->nav2level(ID);
$template->ageiculturistInfo(ID);
?>
<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 


        <h4 class="pull-left">จัดการมาตรฐาน</h4>

        <p>
<table class="bordered  striped "  style="min-width: 500px;"  >
    <thead class="green">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อมาตรฐาน</th>
            <th>ปีที่ได้รับ</th>
            <th>ปีที่สิ้นสุด</th>
            <th>เพิ่มเติม</th>
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
                <td><?php echo $rc->standard_standard_name; ?></td>
                <td><?php echo $rc->start_year; ?></td>
                <td><?php echo $rc->end_year; ?></td>
                <td><?php echo $rc->remark; ?></td>
                <td><a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->agr_standard_id ); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->agr_standard_id ); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<p><br></p>
<div class="center"  >
    <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
    <a class="btn waves-effect orange" href="?Ageiculturist///<?php echo $this->param(1); ?>"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
</div>
   </div>

</div>
<?php
$template->close();
?>