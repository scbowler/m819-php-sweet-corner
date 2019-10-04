<?php
require_once('../../config/db_connect.php');

$output = [
    'message' => 'Nothing happened'
];

$result = mysqli_query($conn, 'UPDATE cartItems set quantity=quantity+1 WHERE id=1');

if(mysqli_affected_rows($conn) > 0){
    $output['message'] = 'Successfully updated cart item';
} else {
    $output['message'] = 'Failed to update cart item';
}

header('Content-Type: json');

echo json_encode($output);
