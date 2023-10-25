<select class="form-select" id="aid" name="aid">
<?php
while ($authorItem = $authorList->fetch_assoc()) {
  $selText = "";
  if ($selectedAuthor == $authorItem['author_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $authorItem['author_id']; ?>"<?=$selText?>><?php echo $authorItem['author_name']; ?></option>
<?php
}
?>
</select>
