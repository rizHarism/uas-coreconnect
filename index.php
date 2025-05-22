<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: pages/list_product.php");
} else {
    header("Location: pages/login.php");
}
exit;
