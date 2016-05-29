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
    <div class="row card center" style="padding: 10px;"> 
    <div class="input-field col s12">
        <h4 class="pull-left">จัดการประเภทของพืช</h4>
        <br/>
    </div>
    <form class="center" name="form_insert_plant" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">

        <div class="input-field col s12 m6 center">
            
            <select name="type_id" id="type_id">
                <option value="" disabled selected>กรุณาเลือกประเภทพืช</option>
                <?php
                while($rc_typepln = $this->dbTypePlan->fetch()){
                ?>
                <option value="<?php echo $rc_typepln->type_id; ?>" id="<?php echo $rc_typepln->type_id; ?>" description="<?php echo $rc_typepln->type_name; ?>"><?php echo $rc_typepln->type_name; ?></option>
                <?php
                }
                ?>
            </select>
            <label for="type_id">ประเภทของพืช</label>
        </div>

        <div class="input-field col s12 m6 center">
            
            <input type="text" name="plant_name" value="<?php echo $this->row->plant_name; ?>">
            <label for="type_name">ชื่อพืช</label>
        </div>
     
        <div class="input-field col s12 m12 center">
            
            <textarea name="caltivated_area" class="materialize-textarea"><?php echo $this->row->caltivated_area; ?></textarea>
            <label for="type_name">พื้นที่เพาะปลูก</label>
        </div>

        <div class="input-field col s12 m12 center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button> 
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
        $('#type_id').material_select();
    });    
</script>
<!-- DEVAP END SET SELECTED -->