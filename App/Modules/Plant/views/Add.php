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

<div class="container">
<form name="form_insert_plant" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">
    <table>
        <tr>
            <td>ประเภทของพืช</td>
            <td>
              <select class="browser-default" name="type_id">
                <option value="" disabled selected>กรุณาเลือกประเภทพืช</option>
                <?php
                while($rc_typepln = $this->dbTypePlan->fetch()){
                ?>
                <option value="<?php echo $rc_typepln->type_id; ?>"><?php echo $rc_typepln->type_name; ?></option>
                <?php
                }
                ?>
              </select>
            </td>
        </tr>
        
        <tr>
            <td>ชื่อพืช</td>
            <td><input type="text" name="plant_name" value=""></td>
        </tr>
        
        <tr>
            <td>พื้นที่เพาะปลูก</td>
            <td><textarea name="caltivated_area" class="materialize-textarea"></textarea></td>
        </tr>
        
        <tr>
            <td></td>
            <td>
            <input class="waves-effect waves-light btn" type="submit" name="submit" value="Submit"> 
            <input class="waves-effect waves-light btn" type="reset" name="reset" value=" Reset "> 
            <input class="waves-effect waves-light red lighten-1 btn" type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
            </td>
        </tr>
    </table>
</form>
</div>
<?php
    $template->close();
?>

