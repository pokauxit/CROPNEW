<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->dbBioFtz->fetch()) { ?>
    <option value="<?php echo $rc->type_fertilitzer_id; ?>" <?php if($this->id==$rc->type_fertilitzer_id){echo 'selected';} ?>><?php echo $rc->type_fertilitzer_name; ?></option>
<?php } ?>