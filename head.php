<?php
require "function.php";
session_start();
$loggedIn = false;
$userID = isset($_SESSION['userID']) ? $_SESSION['userID'] : null;

if (isset($_SESSION["loggedIn"]) && isset($_SESSION["name"])) {
    $loggedIn = true;
}
        $queryProduk = mysqli_query($conn,"SELECT id, nama, foto, detail FROM produk ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let Him Cook</title>
    <link rel="stylesheet" href="../proyek2_web/fontawesome/fontawesome-free-6.4.2-web/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../proyek2_web/js/script.js"></script>
</head>