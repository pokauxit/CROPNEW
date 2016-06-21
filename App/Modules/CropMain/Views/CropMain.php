<?php

use System\Template\Template;

$template = new Template();
$template->open();
$template->nav1level();
?>
<div class="container" id="container-center">


    <div class="row card center-align" style="padding: 10px;">

        <h4 class="center">เมนูหลัก</h4>

        <div class="col s5 m2 menu-item">
            <a href="?Staff"> <p class="z-depth-1 center">Staff</p></a>
        </div>

        <div class="col s5 m2 menu-item">
            <a href="?Ageiculturist"> <p class="z-depth-1 center">เกษตรกร</p></a>
        </div>

        <div class="col s5 m2 menu-item">
            <a href="?Soil"> <p class="z-depth-1 center">ดิน</p></a>
        </div>

        <div class="col s5 m2 menu-item">
            <a href="?DiseasePestWeed"> <p class="z-depth-1 center">ปัญหาของพืชที่มักพบ</p></a>
        </div>


        <div class="col s5 m2 menu-item">
            <a href="?Symptom"> <p class="z-depth-1 center">อาการของพืชที่เป็นโรค</p></a>
        </div>


        <div class="col s5 m2 menu-item">
            <a href="?Standard"> <p class="z-depth-1 center">มาตรฐาน</p></a>
        </div>



        <div class="col s5 m2 menu-item">
            <a href="?TypeFertilizer"> <p class="z-depth-1 center">ประเภทของปุ๋ย</p></a>
        </div>

        <div class="col s5 m2 menu-item">
            <a href="?BioFertilizer"> <p class="z-depth-1 center">ปุ๋ย</p></a>
        </div>


        <div class="col s5 m2 menu-item">
            <a href="?TypePlant"> <p class="z-depth-1 center">ชนิดพืช</p></a>
        </div>

        <div class="col s5 m2 menu-item">
            <a href="?Plant"> <p class="z-depth-1 center">พืช</p></a>
        </div>
        
        <div class="col s5 m2 menu-item">
            <a href="?ProductUnit"> <p class="z-depth-1 center">หน่วยผลผลิต</p></a>
        </div>

        <div class="col s5 m2 menu-item">
            <a href="?FertilizerUnit"> <p class="z-depth-1 center">หน่วยการให้ปุ๋ย</p></a>
        </div>
    </div>
    
    <form class="col s12" action="" method="post">
    
     <div id="symptom_list">   
     <div class="chip">
    Tag
    <i class="material-icons">close</i>
    </div>
         
         
         </div>
        
        <a class="btn-floating center-align modal-trigger" href="#add_symptom"><i  class=" material-icons" style="padding-left: 5px;" >add circle</i></a>

     <div align="center">
      
        <button class="btn waves-effect green" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect light-green" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
        <button class="btn waves-effect orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
    </div>
    <p><br></p>
</form>
    
    <div id="add_symptom" class="modal" style="max-width: 400px">
    <div style="text-align: center;padding: 3px">
        <span style="float: right">
            <a href="javascript:;" class="modal-action modal-close red-text"><i class="fa fa-lg fa-times"></i></a>
        </span>
    </div>
    <div>
        <div class="input-field  col  s12 m12">
            <label for="unit_add">หน่วยนับผลผลิต</label>
            <input name="unit_add" id="unit_add" type="text">
        </div>
        <br>
        <button class="btn waves-effect green" type="button" id="save_add" onclick="save_add();"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect red modal-action modal-close" type="button"><i class="fa fa-times"></i> ยกเลิก </button>
        <br><br>
    </div>
</div>

</div>

<script>
       var x_ind = 0;
        function save_add(){
            var sym = $("#unit_add").val();
            $("#symptom_list").append("<div class=\"chip\">"+sym+"<input type=\"hidden\" name=\"symptom["+x_ind+"]\" value=\""+sym+"\"><i class=\"material-icons\">close</i></div>");
            $('#add_symptom').closeModal();
            $("#unit_add").val("");
           x_ind++;
        }
</script>
<?

$template->close()




?>