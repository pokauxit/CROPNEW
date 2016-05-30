<?php

Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
?>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 


        <h4 class="pull-left">จัดการเจ้าหน้าที่</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;"  >
            <thead class="green">
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ - สกุล</th>
                    <th>ชื่อเข้าใช้งาน</th>
                    <th>สิทธิ์เข้าใช้งาน</th>
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
                        <td><?php echo $rc->staff_name; ?></td>
                        <td><?php echo $rc->staff_user; ?></td>
                        <td><?php echo $rc->staff_level; ?></td>
                        <td>
                            <a href="<?php echo $this->route->Edit($rc->staff_id); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                            | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->staff_id); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p><br></p>
  <div class="center"  >
            <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/'  ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
            <a class="btn waves-effect orange" href="<?php echo $template->mainPanel?>"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
        </div>
         
    </div>

</div>
<?php
$template->close();
?>
