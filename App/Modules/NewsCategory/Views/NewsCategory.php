<?php
    Use System\Template\Template;
    Use System\Utils\Paging;
    $template = new Template();
    $template->open();
    $template->nav1level();
?>
<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div>
        <h4 class="pull-left">จัดการชนิดของพืช</h4>
        <br/>
        <table class="bordered">
            <thead class="green">
            <tr>
              <th>ลำดับ</th>
              <th>ประเภทข่าว</th>
              <th>จัดการ</th>
            </tr>  
            </thead>
            <?php
            $i = 1+$this->paging->start();
            $pk = $this->db->pk;
            while ($rc  = $this->db->fetch()){
            ?>
            <tr>
                <td><?php echo $i; ?>.</td>
                <td><?php echo $rc->news_category_name; ?></td>
                <td>
                  <a href="<?php echo $this->route->Edit($rc->news_category_id);?>/<?php echo $this->param(1)?>"><i class="orange-text fa fa-edit"></i> แก้ไข </a>&nbsp;|&nbsp;
                  <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->news_category_id);?>/<?php $this->param(1)?>"><i class="red-text fa fa-trash"></i> ลบ</a>
                </td>
            </tr>
            <?php
             $i++;
            }
            ?>
        </table>
    </div>
    <br/>
    <div class="center">
        <?php echo $this->paging->build();?>
    </div>
    <br/>
    <div class="center"  >
        <a class="btn waves-effect green" href="<?php echo $this->route->Add();
        echo '//' . $this->param(1) ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
        <a class="btn waves-effect orange" href="?"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ</a>
    </div> 
    </div>
</div>

<?php
    $template->close();
?>