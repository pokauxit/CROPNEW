<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->dbList->fetch()) { ?>
    <option value="<?php echo $rc->bio_fer_id; ?>" <?php if($this->id==$rc->bio_fer_id){echo 'selected';} ?>><?php echo $rc->bio_fer_name; ?></option>
<?php } ?>