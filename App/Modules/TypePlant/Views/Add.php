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

<div class="container">
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
        
        <tr>
            <td></td>
            <td>
                <input class="waves-effect waves-light btn" type="submit" name="submit" value="  บันทึก  ">
                <a class="waves-effect waves-light red lighten-1 btn" onclick="location.href='?TypePlant'">ยกเลิก</a>
            </td>
        </tr>
        
    </table>
    </form>
</div>
<?php
    $template->close();
?>


