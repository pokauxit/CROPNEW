<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
?>
<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div>
        <h4 class="pull-left">จัดการพืช</h4>
        <br/>
        <table class="bordered">
            <tr>
              <th>รหัสพืช</th>
              <th>ชื่อประเภท</th>
              <th>หมายเหตุ</th>
              <th>ตัวเลือก</th>
            </tr>  
            <?php
            $i = 1;
            $pk = $this->pk;
            while ($rc  = $this->db->fetch()){
            ?>
            <tr>
                <td><?php echo $rc->type_id; ?></td>
                <td><?php echo $rc->type_name; ?></td>
                <td><?php echo $rc->note; ?></td>
                <td>
                  <a href="<?php echo $this->route->Edit($rc->type_id);?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>&nbsp;&nbsp;
                  <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->type_id);?>"><i class="red-text fa fa-trash"></i> ลบ</a>
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
        <a class="btn waves-effect orange" href="<?php echo $this->route->Add();
        echo '/' . $this->param(0) ?>"><i class="fa fa-arrow-circle-left"></i> Back</a>
    </div> 
    </div>
</div>
<?php
    $template->close();
?>