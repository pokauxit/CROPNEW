<div class="row  " style="padding: 10px;"> 
    <?php $rc = $this->db->fetch(); ?>
    <div class=" col s12 left"> 
        <b >ข้อมูลเกษตรกร  </b>


    </div>    
    <div class=" col s12 m6 "> 
        <label >เกษตร : </label>

        <?php echo $rc->agriculturist_name; ?>
    </div>
    <div class=" col s12 m6 "> 
        <label >บ้านเลขที่ : </label>
        <?php echo $rc->home_no; ?>
        <label >ตำบล : </label>
        <?php echo $rc->tambon_tambon_name; ?>
        <label >อำเภอ : </label>
        <?php echo $rc->amphur_amphur_name; ?>
        <label >จังหวัด : </label>
        <?php echo $rc->province_province_name; ?> <?php echo $rc->postcode; ?>
    </div>
    <div class=" col s12 m6 "> 
        <label >หมายเลขโทรศัพท์ : </label>
        <?php echo $rc->phone_no; ?>
    </div>
</div>
