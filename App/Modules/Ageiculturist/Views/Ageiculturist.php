<?php
Use System\Template\Template;

$template = new Template();
$template->open();
?>

<div class="container">

    <div style="margin-top: 15px;">
        <h4 class="pull-left">จัดการเกษตรกร</h4>
<!--        <a class="btn waves-effect waves-light pull-right"-->
<!--           href="--><?php //echo $this->route->Add(); ?><!--"><i class="fa fa-plus"></i> Add</a>-->
    </div>
    <div class="row">
        <table class="responsive-table highlight striped">
            <thead>
            <tr>
                <th>ลำดับ</th>
                <th>บ้านเลขที่</th>
                <th>หมายเลขโทรศัพท์</th>
                <th>ชื่อเกษตรกร</th>
                <th>รหัสจังหวัด</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>ลำดับ</th>
                <th>บ้านเลขที่</th>
                <th>หมายเลขโทรศัพท์</th>
                <th>ชื่อเกษตรกร</th>
                <th>รหัสจังหวัด</th>
            </tr>
            </tfoot>
            <tbody>
            <?php $rowId = 1; ?>
            <?php while ($rc = $this->db->fetch()) : ?>
                <tr>
                    <td><?php echo $rowId++; ?></td>
                    <td><?php echo $rc->home_no; ?></td>
                    <td><?php echo $rc->phone_no; ?></td>
                    <td><?php echo $rc->agriculturist_name; ?></td>
                    <td><?php echo $rc->tambon_tambon_name; ?></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>


<?php
$template->close();
?>
