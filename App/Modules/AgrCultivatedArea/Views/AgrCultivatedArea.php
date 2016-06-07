<?php

use System\Template\Template;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
$template = new Template();
$template->open();
$template->nav2level(ID);
$template->ageiculturistInfo(ID);
?>
<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 


        <h4 class="pull-left">จัดการพื้นที่</h4>

        <p>
<table class="bordered  striped "  style="min-width: 500px;"  >
    <thead class="green">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อดิน</th>
            <th>ละติจูด</th>
            <th>ลองติจูด</th>
            <th>ข้อมูลพื้นที่</th>
            <th>การระบายน้ำของดิน</th>
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
                <td><?php echo $rc->soil_soil_name; ?></td>
                <td><?php echo $rc->lat_map; ?></td>
                <td><?php echo $rc->long_map; ?></td>
                <td><?php echo $rc->area_detail; ?></td>
                <td><?php echo $rc->soil_drainage; ?></td>
                <td><a href="<?php echo $this->route->Edit($this->param(0) . '/' . $rc->area_sequence); ?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($this->param(0) . '/' . $rc->area_sequence); ?>"><i class="red-text fa fa-trash"></i> ลบ </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<p><br></p>
<div class="center"  >
    
    <?php
    $service  = new Service();
   $rc =  $service->getCropByID(ID);
    
    ?>
    <a class="btn waves-effect green" href="<?php echo $this->route->Add() . '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
    <a class="btn waves-effect orange" href="?Ageiculturist"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
</div>
    </div>
</div>
<?php
$template->close();
?>