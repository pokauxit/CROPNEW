<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
?>
<div class="container">
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
                <a href="<?php echo $this->route->Edit($rc->type_id);?>">edit </a> 
                <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->type_id);?>"> delete</a>
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