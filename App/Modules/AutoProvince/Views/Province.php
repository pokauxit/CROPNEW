<option disabled selected>กรุณาเลือกรายการ</option>
<?php while ($province = $this->provinces->fetch()): ?>
    <option value="<?php echo $province->province_id; ?>"
        <?php $province->province_id == $this->provinceId ? print 'selected' : print '';?>><?php echo $province->province_name; ?></option>
<?php endwhile; ?>