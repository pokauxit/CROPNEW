<div class="row  " style="padding: 10px;"> 
   <?php  $rc = $this->dbPlant->fetch();?>
     <div class=" col s12 left"> 
            <b >ข้อมูลพืช </b>
            
         
        </div>    
    <div class=" col s12 m6 "> 
            <label >พืช : </label>
            
         <?php echo  $rc->plant_name;?>
        </div>
    <div class=" col s12 m6 "> 
            <label >ชนิดพืช : </label>
            
         <?php echo  $rc->typeplant_type_name;?>
        </div>
    <div class=" col s12 m12 "> 
            <label >พื้นที่เหมาะสม : </label>
            
         <?php echo  $rc->caltivated_area;?>
        </div>
    
    </div>