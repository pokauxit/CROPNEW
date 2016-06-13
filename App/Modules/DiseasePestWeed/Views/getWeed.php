<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->dbList->fetch()) { ?>
    <option value="<?php echo $rc->disease_pest_weed_id; ?>"><?php echo $rc->disease_pest_weed_name; ?></option>
<?php } ?>