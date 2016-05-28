<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
?>

<script>
    
    function check(obj){
        
        if(!CHECK.val(obj.type_id)){
            return MSG.enter('ประเภทพืช');
        }
        
        if(!CHECK.val(obj.plant_name)){
            return MSG.enter('ชื่อพืช');   
        }
        
        if(!CHECK.val(obj.caltivated_area)){
            return MSG.enter('พื้นที่เพาะปลูก');   
        }
        
    }
    
</script>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div>
        <h4 class="pull-left">จัดการประเภทของพืช</h4>
        <br/>
    <form name="form_insert_plant" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">
        <table>
            <tr>
                <td>ประเภทของพืช</td>
                <td>
                <select class="browser-default" name="type_id" id="type_id">
                    <option value="" disabled selected>กรุณาเลือกประเภทพืช</option>
                    <?php
                    while($rc_typepln = $this->dbTypePlan->fetch()){
                    ?>
                    <option value="<?php echo $rc_typepln->type_id; ?>" id="<?php echo $rc_typepln->type_id; ?>" description="<?php echo $rc_typepln->type_name; ?>"><?php echo $rc_typepln->type_name; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
            </tr>

            <tr>
                <td>ชื่อพืช</td>
                <td><input type="text" name="plant_name" value="<?php echo $this->row->plant_name; ?>"></td>
            </tr>

            <tr>
                <td>พื้นที่เพาะปลูก</td>
                <td><textarea name="caltivated_area" class="materialize-textarea"><?php echo $this->row->caltivated_area; ?></textarea></td>
            </tr>
        </table>
        <div class="center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button> 
        </div>
    </div>
</form>
    </div>
</div>
<?php
    $template->close();
    
?>

<!-- DEVAP START SET SELECTED -->
<script>
    $("#jQuery").ready(function(){
        $("#type_id option[id='<?php echo $this->row->type_id; ?>']").attr("selected", "selected");
    });    
</script>
<!-- DEVAP END SET SELECTED -->