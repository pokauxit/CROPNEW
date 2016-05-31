<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->dbList->fetch()) { ?>
    <option value="<?php echo $rc->plant_id; ?>" <?php if($this->id==$rc->plant_id){echo 'selected';} ?>><?php echo $rc->plant_name; ?></option>
<?php } ?>

