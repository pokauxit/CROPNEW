<div class="row  " style="padding: 10px;"> 
   <?php  $rc = $this->dbSoil->fetch();?>
    <div class=" col s12 left"> 
        <b >ข้อมูลดิน </b>
    </div>    
    <div class=" col s12 m6 "> 
        <label >ชื่อ : </label>
        <?php echo  $rc->soil_name;?>
    </div>
    <div class=" col s12 m6 "> 
        <label >ชนิด : </label>
        <?php if($rc->soil_type==1){echo 'ดินทราย';} ?> 
        <?php if($rc->soil_type==2){echo 'ดินตะกอน';} ?> 
        <?php if($rc->soil_type==3){echo 'ดินเหนียว';} ?> 
        <?php if($rc->soil_type==4){echo 'ดินร่วน';} ?> 
        <?php if($rc->soil_type==5){echo 'ดินเค็ม';} ?> 
    </div>
    <div class=" col s12 m6 "> 
        <label >จุดเด่น : </label>
        <?php echo $rc->soil_factor; ?>
    </div>
    <div class=" col s12 m6 "> 
        <label >ปัญหา : </label>
        <?php echo $rc->soil_problem; ?>
    </div>
    <div class=" col s12 m6 "> 
        <label >คุณค่า : </label>
        <?php echo $rc->soil_nutrition; ?>
    </div>
</div>