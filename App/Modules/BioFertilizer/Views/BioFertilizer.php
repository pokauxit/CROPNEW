<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
    $template->nav1level();
?>
<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div>
        <h4 class="pull-left">จัดการปุ๋ยและสารชีวภาพ</h4>
        <br/>
        <table class="bordered">
            <thead class="green">
            <tr>
              <th width="5%">No.</th>
              <th width="15%">รหัสสารชีวภาพ/ปุ๋ย</th>
              <th width="15%">ชนิดปุ๋ย</th>
              <th width="20%">ชื่อสารชีวภาพ/ปุ๋ย</th>
              <th width="30%">คุณสมบัติสารชีวภาพ/ปุ๋ย</th>
              <th width="15%">ตัวเลือก</th>
            </tr>  
            </thead>
            <?php
                $i=1;
                while($rc = $this->db->fetch($rs)){
            ?>
            <tr>
              <td><?php echo $i; ?>.</td>
              <td><?php echo $rc->bio_fer_id; ?></td>
              <td><?php echo $rc->typefertilizer_type_fertilizer_name; ?></td>
              <td><?php echo $rc->bio_fer_name; ?></td>
              <td><?php echo $rc->bio_fer_properties; ?></td>
              <td>
                  <a href="<?php echo $this->route->Edit($rc->bio_fer_id);?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>&nbsp;&nbsp;
                  <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->bio_fer_id);?>"><i class="red-text fa fa-trash"></i> ลบ</a>
              </td>
            </tr>    
            <?php 
                $i++;
            }
            ?>
            
        </table>
    </div>
    <br/>
    <div class="center"  >
        <a class="btn waves-effect green" href="<?php echo $this->route->Add();
        echo '/' . $this->param(0) ?>"><i class="fa fa-plus"></i> Add</a>
        <a class="btn waves-effect orange" href="?"><i class="fa fa-arrow-circle-left"></i> Back</a>
    </div> 
    </div>
</div>
<?php
    $template->close();
?>

