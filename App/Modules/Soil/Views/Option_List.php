<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->dbSoil->fetch()) { ?>
    <option value="<?php echo $rc->soil_id; ?>" <?php if($this->id==$rc->soil_id){echo 'selected';} ?>><?php echo $rc->soil_name; ?></option>
<?php } ?>