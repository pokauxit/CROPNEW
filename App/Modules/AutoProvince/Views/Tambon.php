<?php while ($tambon = $this->tambons->fetch()): ?>
    <option value="<?php echo $tambon->tambon_id; ?>"><?php echo $tambon->tambon_name; ?></option>
<?php endwhile; ?>