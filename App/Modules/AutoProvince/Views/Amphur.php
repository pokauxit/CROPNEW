<?php while ($amphur = $this->amphurs->fetch()): ?>
    <option value="<?php echo $amphur->amphur_id; ?>"><?php echo $amphur->amphur_name; ?></option>
<?php endwhile; ?>