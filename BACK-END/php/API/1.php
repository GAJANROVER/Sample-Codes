

<?php
$con = mysqli_connect('localhost', 'root', '', 'mint_v3');
$response = array();
if ($con) {
    $sql = 'Select * from user limit 1';
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        foreach ($row as $value) {
            $response['ref_emp_id'] = $row['ref_emp_id'];
            $response['user_name'] = $row['user_name'];
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo 'DB Connection Failed';
}
