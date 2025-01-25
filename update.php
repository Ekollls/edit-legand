<?php
$data = json_decode($_POST['data'], true);

foreach ($data as $item) {
    $id = $item['id'];
    $value = $item['value'];
}
    // Your code to update the database goes here
// Example:
// $sql = "UPDATE your_table SET your_column = $