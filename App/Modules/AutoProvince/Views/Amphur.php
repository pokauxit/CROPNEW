<?php while ($amphur = $this->amphurs->fetch()): ?>
    <option value="<?php echo $amphur->amphur_id; ?>"
        <?php $amphur->amphur_id == $this->amphurId ? print 'selected' : print '';?>><?php echo $amphur->amphur_name; ?></option>
<?php endwhile; ?>