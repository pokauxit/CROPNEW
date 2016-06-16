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
    <div class="input-field col s12">
        <h4 class="pull-left">จัดการพืช</h4>
    </div>
        <br/>
    <form class="center" name="form_insert_plant" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">

        <div class="input-field col s12 m6 center">
            <select name="type_id" id="type_id">
                <option value="" disabled selected>กรุณาเลือกชนิดของพืช</option>
                <?php
                    while($rc_typepln = $this->dbTypePlan->fetch()){
                ?>
                    <option value="<?php echo $rc_typepln->type_id; ?>"><?php echo $rc_typepln->type_name; ?></option>
                <?php
                }
                ?>
            </select>
            <label for="type_id">ชนิดของพืช</label>
        </div>

        <div class="input-field col s12 m6 center">
            <input type="text" name="plant_name" value="">
            <label for="plant_name">ชื่อพืช</label>
        </div>

         <div class="input-field col s12 m12 center">
            <textarea name="caltivated_area" class="materialize-textarea"></textarea>
            <label for="caltivated_area">พื้นที่เพาะปลูก</label>
         </div>

        <div class="col s12 m12 center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
        </div>
    </form>
    </div>
    </div>

<?php
    $template->close();
?>