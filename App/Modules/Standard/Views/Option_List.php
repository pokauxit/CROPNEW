<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->db->fetch()) { ?>
    <option value="<?php echo $rc->sid; ?>" <?php if($this->id==$rc->sid){echo 'selected';} ?>><?php echo $rc->standard_name; ?></option>
<?php } ?>