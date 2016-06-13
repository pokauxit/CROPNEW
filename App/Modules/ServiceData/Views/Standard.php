<div class="row  " style="padding: 10px;"> 
   <?php  $rc = $this->dbStandard->fetch();?>
    <div class=" col s12 left"> 
            <b >ข้อมูลมาตรฐาน </b>
    </div>    
    <div class=" col s12 m6 "> 
            <label >ชื่อมาตรฐานที่ได้รับ : </label>
            
         <?php echo  $rc->standard_name; ?>
    </div>
    <div class=" col s12 m6 "> 
        <label >สถาบันหรือหน่วยงานที่กำหนด : </label>
        <?php echo  $rc->org;?>
    </div>
</div>

