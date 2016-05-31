<?php
Use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
?>


<div class="container" id="container-center">

    <div class="card row" style="padding: 10px;">
        <div class="row  " style="padding: 10px;">
            <div class=" col s12 left">
                <b>ข้อมูลโรค </b>

                <?php $diseasePestWeed = $this->diseasePestWeeds->fetch(); ?>
            </div>
            <div class=" col s12 m12 ">
                <label>โรค : <?php echo $diseasePestWeed->disease_pest_weed_name; ?></label>

            </div>
            <div class=" col s12 m12 ">
                <label>รายละเอียดของโรค : <?php echo $diseasePestWeed->disease_pest_weed_detail; ?></label>

            </div>
        </div>
    </div>

    <div class="row card " style="padding: 10px;">


        <h4 class="pull-left">จัดการข้อมูลอาการ</h4>

        <p>

        <table class="bordered  striped " style="min-width: 500px;">
            <thead class="green">
            <tr>
                <th>ลำดับ</th>
                <th>อาการ</th>
                <th>รายละเอียด</th>
                <th>จัดการ</th>
            </tr>
            </thead>

            <tbody>
            <?php $rowId = 1; ?>
            <?php while ($rc = $this->db->fetch()) : ?>
                <tr>
                    <td><?php echo $rowId++; ?></td>
                    <td><?php echo $rc->symptom_symptom_name; ?></td>
                    <td><?php echo $rc->detail; ?></td>
                    <td>
                        <a href=" <?php echo $this->route->Edit($this->param(0) . '/' . $rc->disease_symptom_id); ?>"><i
                                class="orange-text fa fa-edit"></i> แก้ไข</a>
                        | <a onclick="return confirm('ยืนยันการลบ')"
                             href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->disease_symptom_id); ?>""><i
                            class="red-text fa fa-trash"></i> ลบ </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <p><br></p>

        <div class="center">
            <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i
                    class="fa fa-plus"></i> เพิ่มข้อมูล</a>
            <a class="btn waves-effect orange" href="?DiseasePestWeed"><i
                    class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
        </div>
    </div>
</div>
<?php

?>

<?php
$template->close();
?>
