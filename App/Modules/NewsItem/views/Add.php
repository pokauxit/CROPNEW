<?php
    Use System\Template\Template;
  
    $template = new Template();
    $template->open();
    $template->nav1level();
    
    $today = date("Y-m-d H:i:s");
    $staff_id = "1";
?>
<?php 
    echo System\Utils\JS::load();
?>
<script>
    
    function check(obj){
        
        if(!CHECK.val(obj.news_category_name)){
            return MSG.enter('ประเภทข่าว');
        }
        
        if(!CHECK.val(obj.staff_id)){
            return MSG.enter('ผู้โพส');   
        }
        
        if(!CHECK.val(obj.news_title)){
            return MSG.enter('หัวข้อข่าว');   
        }
        
        if(!CHECK.val(obj.news_text)){
            return MSG.enter('เนื้อหาข่าว');   
        } 
        
    }
    
</script>

<div class="container" id="container-center">
    <div class="row card center" style="padding: 10px;">  
    <div class="input-field col s12">
        <h4 class="pull-left">จัดการข่าว</h4>
    </div>
        <br/>
    <form class="center" name="form_insert_news_item" id="form_insert_news_item" action="" method="post" onsubmit="return check(this);">

        <div class="input-field col s12 m6 center">
            <select name="news_category_name" id="news_category_name">
                <option value="" disabled selected>กรุณาเลือกประเภทข่าว</option>
                <?php
                    while($rc_news_category = $this->dbNewsCategory->fetch()){
                ?>
                    <option value="<?php echo $rc_news_category->news_category_id; ?>"><?php echo $rc_news_category->news_category_name; ?></option>
                <?php
                }
                ?>
            </select>
            <label for="news_category_name">ประเภทข่าว</label>
        </div>

        <div class="input-field col s12 m6 center">
            <input type="text" name="news_title" value="">
            <label for="news_title">หัวข้อข่าว</label>
        </div>

         <div class="input-field col s12 m12 center">
            <textarea name="news_text" class="materialize-textarea"></textarea>
            <label for="news_text">เนื้อหาข่าว</label>
         </div>

        <div class="col s12 m12 center">
            <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
            <button class="btn waves-effect light-green"  style="margin: 5px;" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
            <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '///' . $this->param(1); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
        </div>
        <input type="hidden" name="post_date" value="<?php echo $today ;?>">
        <input type="hidden" name="staff_id"  value="<?php echo $staff_id;?>">
    </form>
    </div>
</div>
    

<?php
    $template->close();
?>