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
    <div>
        <h4 class="pull-left">จัดการพืช</h4>
        <br/>
        <form name="form_insert_typeplant" id="form_insert_typeplant" method="post" action=""  onsubmit="return check(this)" >
        <table>
            <tr>
                <td>ชื่อประเภท</td>
                <td><input type="text" name="type_name" id="type_name" value=""></td>
            </tr>

            <tr>
                <td>หมายเหตุ</td>
                <td><textarea name="note" id="note" class="materialize-textarea"></textarea></td>
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


