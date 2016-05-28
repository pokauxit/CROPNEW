<?php

Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 


        <h4 class="pull-left">จัดการดิน</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;"  >
            <thead class="green">
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อของดิน</th>
                    <th>ชนิดของดิน</th>
                    <th>จุดเด่นของดิน</th>
                    <th>ปัญหาของดิน</th>
                    <th>คุณค่าของดิน</th>
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
                        <td><?php echo $rc->soil_name; ?></td>
                        <td><?php echo $rc->soil_type; ?></td>
                        <td><?php echo $rc->soil_factor; ?></td>
                        <td><?php echo $rc->soil_problem; ?></td>
                        <td><?php echo $rc->soil_nutrition; ?></td>
                        <td>
                            <a href="<?php echo $this->route->Edit($rc->soil_id); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                            | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->soil_id); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
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
    </div>

</div>
<?php
$template->close();
?>
