<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
    $template->nav1level();
?>
<?php 
    echo System\Utils\JS::load();
?>
<script>
    
    function check(obj){
        
        if(!CHECK.val(obj.type_fertilizer_id)){
            return MSG.enter('ชนิดปุ๋ย');
        }
        
        if(!CHECK.val(obj.bio_fer_name)){
            return MSG.enter('ชื่อสารชีวภาพ/ปุ๋ย');   
        }
        
        if(!CHECK.val(obj.bio_fer_properties)){
            return MSG.enter('คุณสมบัติสารชีวภาพ/ปุ๋ย');   
        }
        
    }
    
</script>

<div class="container" id="container-center">
    <div class="row card " style="padding: 10px;"> 
    <div class="input-field col s12">
            <h4 class="pull-left">จัดการปุ๋ยและสารชีวภาพ</h4>
    </div>
        <br/>
        <form class="center" name="form_insert_bio_ferilizer" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">

            
            <div class="input-field col s12 m6 center">
            <select name="type_fertilizer_id" id="type_fertilizer_id">
                <option value="" disabled selected>กรุณาเลือกประเภทพืช</option>
            <?php
                while($rc_TypeFtz = $this->dbTypeFtz->fetch()){
            ?>
                <option value="<?php echo $rc_TypeFtz->type_fertilizer_id; ?>" id="<?php echo $rc_TypeFtz->type_fertilizer_id; ?>" description="<?php echo $rc_TypeFtz->type_fertilizer_name; ?>"><?php echo $rc_TypeFtz->type_fertilizer_name; ?></option>
            <?php
            }
            ?>
            </select>
                <label for="type_fertilizer_id">ชนิดของปุ๋ย</label>
            </div>
            
            <div class="input-field col s12 m6 center">
                <input type="text" name="bio_fer_name" id="bio_fer_name" value="<?php echo $this->row->bio_fer_name; ?>">
                <label for="type_fertilizer_id">ชื่อสารชีวภาพ/ปุ๋ย</label>
            </div>
            
            <div class="input-field col s12 m12 center">
                <input type="text" name="bio_fer_properties" id="bio_fer_properties" value="<?php echo $this->row->bio_fer_properties; ?>">
                <label for="type_fertilizer_id">คุณสมบัติ</label>
            </div>
            
        <div class="center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
        </div>            
        </form>
    </div>
    </div>
</div>
<?php
    $template->close();
?>
<!-- DEVAP START SET SELECTED -->
<script>
    $("#jQuery").ready(function(){
        $("#type_fertilizer_id option[id='<?php echo $this->row->type_fertilizer_id; ?>']").attr("selected", "selected");
        $('#type_fertilizer_id').material_select();
    });    
</script>
<!-- DEVAP END SET SELECTED -->



