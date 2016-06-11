<?php
Use System\Template\Template;
Use System\Utils\Paging;
$template = new Template();

$template->open();
 $template->nav1level();
?>


<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;">


        <h4 class="pull-left">จัดการข้อมูลเกษตรกร</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;"  >
            <thead class="green">
            <tr>
                <th>ลำดับ</th>
                <th>บ้านเลขที่</th>
                <th>หมายเลขโทรศัพท์</th>
                <th>ชื่อเกษตรกร</th>
                <th>รหัสจังหวัด</th>
                <th>จัดการ</th>
            </tr>
            </thead>

            <tbody>
            <?php $rowId = 1; ?>
            <?php while ($rc = $this->db->fetch()) : ?>
                <tr>
                    <td><?php echo $rowId++; ?></td>
                    <td><?php echo $rc->home_no; ?></td>
                    <td><?php echo $rc->phone_no; ?></td>
                    <td><?php echo $rc->agriculturist_name; ?></td>
                    <td><?php echo $rc->tambon_tambon_name; echo $rc->amphur_amphur_name; echo $rc->province_province_name;  echo $rc->postcode; ?></td>
                    <td> <a href="<?php echo '?AgrCultivatedArea//' . $rc->agriculturist_id; ?>/<?php echo $this->param(1);?>"><i class="green-text fa fa-arrow-circle-right"></i> พื้นที่ </a>
                         <a href="<?php echo '?AgrStandard//' . $rc->agriculturist_id; ?>/<?php echo $this->param(1);?>"><i class="green-text fa fa-arrow-circle-right"></i> มาตรฐาน </a>
                        | <a href="<?php echo '?Crop//' . $rc->agriculturist_id; ?>/<?php echo $this->param(1);?>"><i class="green-text fa fa-arrow-circle-right"></i> เปิด </a>
                       | <a  href="<?php echo $this->route->Edit($rc->agriculturist_id);?>/<?php echo $this->param(1);?>"><i class="orange-text fa fa-edit"></i> แก้ไข</a>
                        | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->agriculturist_id)?>/<?php echo $this->param(1);?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    <br/>
    <div class="center">
         <?php echo Paging::build($this->allRow, $this->pageLimit, $this->param(1), $this->route->backToModule()."///")?>
    </div>
        <br/>
        <div class="center"  >
            <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '//'. $this->param(1);  ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
            <a class="btn waves-effect orange" href="<?php echo $template->mainPanel?>"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
        </div>
    </div>
</div>
<?php 
 
?>

<?php
$template->close();
?>
