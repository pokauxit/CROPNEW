<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
?>

<script>
    
    function check(obj){
        
        if(!CHECK.val(obj.type_fertilizer_id)){
            return MSG.enter('รหัสปุ๋ย');
        }
        
        if(!CHECK.val(obj.type_fertilizer_name)){
            return MSG.enter('ขื่อชนิดของปุ๋ย');   
        }
        
    }
    
</script>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div>
        <h4 class="pull-left">จัดการชนิดของปุ๋ย</h4>
        <br/>
        <form name="form_edit_typefertilizer" id="form_insert_typeplant" method="post" action=""  onsubmit="return check(this)" >
        <table>
            <tr>
                <td>รหัสชนิดปุ๋ย</td>
                <td><input type="text" name="type_fertilizer_id" value="<?php echo $this->row->type_fertilizer_id;?>"></td>
            </tr>
            
            <tr>
                <td>ชื่อชนิดของปุ๋ย</td>
                <td><input type="text" name="type_fertilizer_name" value="<?php echo $this->row->type_fertilizer_name?>"></td>
            </tr>
        </table>
        <div class="center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
        </div>
        </form>
    </div>
    </div>
</div>
<?php
    $template->close();
?>