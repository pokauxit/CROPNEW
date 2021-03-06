<?php
Use System\Template\Template;
Use System\Utils\Paging;
$template = new Template();
$template->open();
$template->nav1level();
?>


<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;">


        <h4 class="pull-left">จัดการข้อมูลโรค/แมลง/วัชพืช</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;">
            <thead class="green">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อโรค/ศัตรูพืช/วัชพืช</th>
                <th>รายละเอียดของโรค/ศัตรูพืช/วัชพืช</th>
                <th>ชนิดปัญหา</th>
                <th style="width: 200px; text-align: center">จัดการ</th>
            </tr>
            </thead>

            <tbody>
            <?php $rowId=1+$this->paging->start(); ?>
            <?php while ($rc = $this->db->fetch()) : ?>
                <tr>
                    <td><?php echo $rowId++; ?>.</td>
                    <td><?php echo $rc->disease_pest_weed_name; ?></td>
                    <td><?php echo $rc->disease_pest_weed_detail; ?></td>
                    <td><?php  if($rc->problem_type_id == "1"){ echo 'โรค';};
                        if($rc->problem_type_id == "2"){ echo 'ศัตรูพืช';};
                        if($rc->problem_type_id == "3"){echo 'วัชพืช';};
                         ?></td>
                    <td style="text-align: right">
                        <?php if ($rc->problem_type_id == 1): ?>
                            <a href='<?php echo "?DiseaseSymptom//{$rc->disease_pest_weed_id}"; ?>'><i
                                    class="orange-text fa fa-sign-in"></i> เปิด</a>
                        <?php endif; ?>
                        |<a href=" <?php echo $this->route->Edit($rc->disease_pest_weed_id);?>/<?php echo $this->param(1);?>"><i class="orange-text fa fa-edit"></i> แก้ไข</a>
                        | <a onclick="return confirm('ยืนยันการลบ')" href="<?php echo $this->route->Delete($rc->disease_pest_weed_id);?>/<?php echo $this->param(1);?>"><i
                            class="red-text fa fa-trash"></i> ลบ </a>
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
        <div class="center">
            <div class="center"  >
                <a class="btn waves-effect green" href="<?php echo $this->route->Add();
                echo '//' . $this->param(1); ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
                <a class="btn waves-effect orange" href="?"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
            </div> 
        </div>
    </div>
</div>
<?php
$template->close();
?>
