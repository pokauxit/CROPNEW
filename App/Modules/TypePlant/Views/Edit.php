<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
?>
<?php 
    echo System\Utils\JS::load();
?>

<script>
    
    function check(obj){
        
        if(!CHECK.val(obj.type_name)){
            return MSG.enter('ประเภทพืช');
        }
        
        if(!CHECK.val(obj.note)){
            return MSG.enter('หมายเหตุ');   
        }
        
    }
    
</script>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div>
        <h4 class="pull-left">จัดการพืช</h4>
        <br/>
        <form name="form_edit_typeplant" id="form_edit_typeplant" method="post" action=""  onsubmit="return check(this)" >
        <table>
            <tr>
                <td>ชื่อประเภท</td>
                <td><input type="text" name="type_name" id="type_name" value="<?php echo $this->row->type_name?>"></td>
            </tr>

            <tr>
                <td>หมายเหตุ</td>
                <td><textarea name="note" id="note" class="materialize-textarea"><?php echo $this->row->note?></textarea></td>
            </tr>
        </table>
            <div class="center">
                <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button> 
            </div>
        </form>
    </div>
    </div>
</div>
<?php
    $template->close();
?>

