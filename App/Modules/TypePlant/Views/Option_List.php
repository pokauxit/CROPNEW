<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->db->fetch()) { ?>
    <option value="<?php echo $rc->type_id; ?>" <?php if($this->id==$rc->type_id){echo 'selected';} ?>><?php echo $rc->type_name; ?></option>
<?php } ?>