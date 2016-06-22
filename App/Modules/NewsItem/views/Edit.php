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
    <div class="row card center" style="padding: 10px;"> 
    <div class="input-field col s12">
       <h4 class="pull-left">จัดการข่าว</h4>
        <br/>
    </div>
    <form class="center" name="form_insert_plant" id="form_inert_plant" action="" method="post" onsubmit="return check(this);">

        <div class="input-field col s12 m6 center">
            
            <select name="news_category_name" id="news_category_name">
                <option value="" disabled selected>กรุณาเลือกประเภทข่าว</option>
                <?php
                while($rc_news_category = $this->dbNewsCategory->fetch()){
                ?>
                <option value="<?php echo $rc_news_category->news_category_id; ?>" id="<?php echo $rc_news_category->news_category_id; ?>" description="<?php echo $rc_news_category->news_category_name; ?>"><?php echo $rc_news_category->news_category_name; ?></option>
                <?php
                }
                ?>
            </select>
            <label for="type_id">ประเภทข่าว</label>
        </div>

        <div class="input-field col s12 m6 center">
            
            <input type="text" name="news_title" value="<?php echo $this->row->news_title; ?>">
            <label for="news_title">หัวข้อข่าว</label>
        </div>

        <div class="input-field col s12 m12 center">
            
            <textarea name="news_text" class="materialize-textarea"><?php echo $this->row->news_text; ?></textarea>
            <label for="news_text">เนื้อหาข่าว</label>
        </div>
        
        <div class="input-field col s12 m12 center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button> 
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
        $("#news_category_name option[id='<?php echo $this->row->news_category_id; ?>']").attr("selected", "selected");
        $('#news_category_name').material_select();
    });    
</script>
<!-- DEVAP END SET SELECTED -->