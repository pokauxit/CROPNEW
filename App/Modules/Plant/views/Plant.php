<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
?>
<div class="container">
    <table class="bordered">
        <tr>
          <th>รหัสชนิดพืช</th>
          <th>ชื่อประเภท</th>
          <th>ชื่อพืช</th>
          <th>พื้นที่เพาะปลูก</th>
          <th>ตัวเลือก</th>
        </tr>
    <?php
        $i=1;
        $pk = $this->pk;
        while($rc2 = $this->dbPlant->fetch()){
    ?>
        <tr>
          <td><?php echo $rc2->plant_id; ?></td>
          <td><?php echo $rc2->typeplant_type_name ?></td>
          <td><?php echo $rc2->plant_name; ?></td>
          <td><?php echo $rc2->caltivated_area; ?></td>
          <td>
                <a href="<?php echo $this->route->Edit($rc2->plant_id);?>">edit </a> 
                <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc2->plant_id);?>"> delete</a>
          </td>
        </tr>
    <?php
        $i++;
    }
    ?>   
        <tr>
            <td colspan="5">
                <a href="<?php echo $this->route->Add();?>">Add</a>

            </td>
        </tr>
    </table>
</div>
<?php
    $template->close();
?>

