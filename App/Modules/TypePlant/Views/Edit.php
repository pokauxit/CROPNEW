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
        <div class="input-field col s12 m12 center">
         <h4 class="pull-left">จัดการชนิดของพืช</h4>
        </div>
        <br/>
        <form class="center" name="form_edit_typeplant" id="form_edit_typeplant" method="post" action=""  onsubmit="return check(this)" >
            
            <div class="input-field col s12 m6 center">
                <input type="text" name="type_name" id="type_name" value="<?php echo $this->row->type_name?>">
                <label for="type_name">ชื่อประเภท</label>
            </div>
            
            <div class="input-field col s12 m6 center">
                <input type="text" name="note" id="note" value="<?php echo $this->row->note?>">
                <label for="note">หมายเหตุ</label>
            </div>
            <div class="center s12">
                <button class="btn waves-effect green " style="margin: 5px;" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
                <button class="btn waves-effect orange"  style="margin: 5px;" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button> 
            </div>
        </form>
    </div>
</div>

<?php
    $template->close();
?>

