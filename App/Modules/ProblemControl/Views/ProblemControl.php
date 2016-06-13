<?php

use System\Template\Template;
use App\Modules\ServiceData\Controllers\ServiceData as Service;

$template = new Template();
$template->open();
$template->nav3level(ID);
$template->openMain($this->param(-2));
?>


    <div class="container-fluid" style="margin: 13px;">
        <div class="card row" style="padding: 10px; text-align: left">
            <div class="row  " style="margin: 10px;">
                <div class="col s12 left">
                    <b>ข้อมูลของปัญหา </b>
                    <?php $problem = $this->problems->fetch(); ?>
                </div>
                <div class=" col s12 m4 ">
                    <label>ขนิดของปัญหา :
                        <label style="color: #000"><?php

                            switch ($problem->problem_type_id):
                                case 1:
                                    print 'โรค';
                                    break;
                                case 2:
                                    print 'ศัตรูพืช';
                                    break;
                                case 3:
                                    print 'วัชพืช';
                                    break;
                                default:
                                    break;
                            endswitch; ?>
                        </label>
                    </label>

                </div>
                <div class=" col s12 m4 ">
                    <label>ชื่อปัญหา :
                         <label style="color: #000"><?php echo $problem->disease_pest_weed_disease_pest_weed_name; ?></label>
                    </label>
                </div>
                <div class=" col s12 m4 ">
                    <label>ความร้ายแรงของปัญหา :
                        <label style="color: #000"><?php

                            switch ($problem->in_seiouscase):
                                case 1:
                                    print 'ใช่';
                                    break;
                                case 2:
                                    print 'ไม่ใช่';
                                    break;
                                default:
                                    break;
                            endswitch; ?>
                        </label>
                    </label>
                </div>

                
                <div class=" col s12 m8 ">
                    <label>รายละเอียดปัญหาของพืชที่ปลูก :
                         <label style="color: #000"><?php echo $problem->crop_problem_detail; ?></label>
                    </label>
                </div>
                <div class=" col s12 m4 ">
                    <label>หมายเหตุ : <label style="color: #000"><?php echo $problem->note; ?></label></label>
                </div>
            </div>
        </div>
    </div>


    <table class="bordered  striped " style="min-width: 500px;">
        <thead class="green">
        <tr>
            <th>ลำดับ</th>
            <th>สารชีวภาพ/ปุ๋ย</th>
            <th>จำนวนที่ใช้</th>
            <th>หน่วย</th>
            <th>รายละเอียด</th>
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
                <td><?php echo $rc->biofertilizer_bio_fer_name; ?></td>
                <td><?php echo $rc->cmaount; ?></td>
                <td><?php echo $rc->unit; ?></td>
                <td><?php echo $rc->control_detail; ?></td>
                <td>
                    <a href="<?php echo $this->route->Edit($this->param(0) . '/' . $this->param(1) . '/' . $rc->control_id); ?>"><i
                            class="orange-text fa fa-edit"></i> แก้ไข </a>
                    | <a onclick="return confirm('ยืนยันการลบ')"
                         href="<?php echo $this->route->Delete($this->param(0) . '/' . $this->param(1) . "/" . $rc->control_id); ?>"><i
                            class="red-text fa fa-trash"></i> ลบ </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <p><br></p>
    <div class="center">

        <?php
        $service = new Service();
        $rc = $service->getCropByID(ID);
        ?>
        <a class="btn waves-effect green"
           href="<?php echo $this->route->Add() . '/' . $this->param(0) . '/' . $this->param(1) ?>"><i
                class="fa fa-plus"></i> เพิ่มข้อมูล</a>
        <a class="btn waves-effect orange" href="?CropProblem//<?php echo $this->param(0) ?>"><i
                class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
    </div>

<?php
$template->closeMain();
$template->close();
?>