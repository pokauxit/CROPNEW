<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->db->fetch()) { ?>
    <option value="<?php echo $rc->disease_symptom_id; ?>"><?php echo $rc->detail; ?></option>
<?php } ?>