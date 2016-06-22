<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($rc = $this->db->fetch()) { ?>
    <option value="<?php echo $rc->news_category_id; ?>" <?php if($this->id==$rc->news_category_id){echo 'selected';} ?>><?php echo $rc->news_category_name; ?></option>
<?php } ?>