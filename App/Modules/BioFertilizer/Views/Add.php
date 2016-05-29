<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
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
    <div>
        <h4 class="pull-left">จัดการชนิดปุ๋ยและสารชีวภาพ</h4>
        <br/>
        <form name="form_insert_bio_ferilizer" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">
        <table>
            <tr>
                <td>ชนิดของปุ๋ย</td>
                <td>
                    <select name="type_fertilizer_id" class="browser-default">
                        <option value="" disabled selected>กรุณาเลือกประเภทพืช</option>
                    <?php
                        while($rc_TypeFtz = $this->dbTypeFtz->fetch()){
                    ?>
                        <option value="<?php echo $rc_TypeFtz->type_fertilizer_id; ?>"><?php echo $rc_TypeFtz->type_fertilizer_name; ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>ชื่อสารชีวภาพ/ปุ๋ย</td>
                <td><input type="text" name="bio_fer_name" value=""></td>
            </tr>
            
            <tr>
                <td>คุณสมบัติ</td>
                <td><textarea name="bio_fer_properties" class="materialize-textarea"></textarea></td>
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



