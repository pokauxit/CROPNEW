<?php while ($tambon = $this->tambons->fetch()): ?>
    <option value="<?php echo $tambon->tambon_id; ?>"
        <?php $tambon->tambon_id == $this->tambonId ? print 'selected' : print '';?>><?php echo $tambon->tambon_name; ?></option>
<?php endwhile; ?>