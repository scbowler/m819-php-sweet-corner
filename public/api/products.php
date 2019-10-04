<?php
require_once('../../config/db_connect.php');

$rows = mysqli_query($conn, 'SELECT * FROM products');

$output = [
    'products' => []
];

if(mysqli_num_rows($rows) > 0) {
    while($row = mysqli_fetch_assoc($rows)){
        $output['products'][] = $row;
    }
}

echo json_encode($output);
