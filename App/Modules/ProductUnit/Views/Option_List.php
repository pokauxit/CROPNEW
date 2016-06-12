<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->db->fetch()) { ?>
    <option value="<?php echo $rc->unit_id; ?>" <?php if($this->id==$rc->unit_id){echo 'selected';} ?>><?php echo $rc->unit_name; ?></option>
<?php } ?>