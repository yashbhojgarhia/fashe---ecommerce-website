<?php include "header.php"; ?>

<?php
if(isset($_GET['id']))
{
    $get_user_id = $_SESSION['user_id'];
    $get_prod_id = $_GET['id'];
    $query12 = "INSERT INTO cart(cart_user_id, cart_prod_id, cart_prod_count) VALUES($get_user_id, $get_prod_id, 1)";
$test12 = mysqli_query($connection, $query12);
}

?>