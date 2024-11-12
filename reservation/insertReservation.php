<?php
// reservation.php
require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/function.php';

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    

    // Get the values from the form
    $member_name = $_POST["member_name"];
    $table_id = intval($_POST["table_id"]);
    $reservation_time = $_POST["reservation_time"];
    $reservation_date = $_POST["reservation_date"];
    $special_request = $_POST["special_request"];
    $member_id = $_SESSION['memberId'];

    $check_reservation_query = "SELECT * FROM reservations WHERE member_name='$member_name'";
    $check_reservation_result = mysqli_query($conn, $check_reservation_query);
    $check_reservation_count = mysqli_num_rows($check_reservation_result);
    if ($check_reservation_count > 0) {
        header("Location: index.php?reservation=failed");

        exit();
    }
    
    $select_query_capacity = "SELECT capacity FROM restaurant_tables WHERE table_id='$table_id';";
    $results_capacity = mysqli_query($conn, $select_query_capacity);

    if ($results_capacity) {
        $row = mysqli_fetch_assoc($results_capacity);
        $head_count = $row['capacity'];

        $reservation_id = intval($reservation_time)  . intval($reservation_date)  . intval($table_id);

        // Prepare the SQL query for insertion
        $insert_query1 = "INSERT INTO Reservations (reservation_id, member_id, member_name, table_id, reservation_time, reservation_date, head_count, special_request) 
                        VALUES ('$reservation_id', $member_id, '$member_name', '$table_id', '$reservation_time', '$reservation_date', '$head_count', '$special_request');";
        $insert_query2 = "INSERT INTO Table_Availability (availability_id, table_id, reservation_date, reservation_time, status) 
                        VALUES ('$reservation_id', '$table_id', '$reservation_date', '$reservation_time',  1);";
        mysqli_query($conn, $insert_query1);
        mysqli_query($conn, $insert_query2);

        $_SESSION['member_name'] = $member_name;
        header("Location: index.php?reservation=success&reservation_id=$reservation_id");
    } else {
        // Handle the case where the query failed
        echo "Error fetching table capacity: " . mysqli_error($conn);
    }
}
?>
