<?php
Use System\Template\Template;
Use System\Utils\Paging;
$template = new Template();
$template->open();
$template->nav1level();
?>


<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;">


        <h4 class="pull-left">จัดการข้อมูลมาตรฐาน/รางวัล</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;"  >
            <thead class="green">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อมาตรฐานที่ได้รับ</th>
                <th>สถาบันหรือหน่วยงานที่กำหนดมาตรฐาน</th>
                <th>จัดการ</th>
            </tr>
            </thead>

            <tbody>
            <?php $rowId = 1+$this->paging->start(); ?>
            <?php while ($rc = $this->db->fetch()) : ?>
                <tr>
                    <td><?php echo $rowId++; ?>.</td>
                    <td><?php echo $rc->standard_name; ?></td>
                    <td><?php echo $rc->org; ?></td>
                    <td>
                        <a  href="<?php echo $this->route->Edit($rc->sid);?>/<?php echo $this->param(1)?>"><i class="orange-text fa fa-edit"></i> แก้ไข</a>
                        | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->sid);?>/<?php  echo $this->param(1);?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <p><br></p>
        <div class="center">
            <?php echo $this->paging->build();?>
        </div>
        <br/>
        <div class="center"  >
            <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '//' . $this->param(1) ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
            <a class="btn waves-effect orange" href="?"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
        </div>
    </div>
</div>
<?php

?>

<?php
$template->close();
?>
