<?php
// Create a session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <!-- This page displays all doctors -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- https://www.w3schools.com/bootstrap5/bootstrap_navbar.php -->
    <link rel="stylesheet" href="../css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/index.js"></script>

</head>

<body class="actor">

    <!-- Background effects -->
    <div class="Circle_BG_1"></div>
    <div class="Circle_BG_2"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-none navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="appointments.php" style="margin-left: 50px; margin-top: -10px;">
                <img src="../assets/images/Logo.svg" alt="VeriCalm Logo" style="width:auto;" class="rounded-pill">
            </a>

            <ul class="navbar-nav" style="margin-right: 100px; padding-top: 15px;">
                <li class="nav-item" style="padding-top: 5px;">
                    <a class="nav-link nav_sign_out" href="actions/signout.php">Sign Out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_item" href="appointments.php">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_item" href="patients.php">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_item nav_active" href="doctors.php">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_item" href="receptionists.php">Receptionists</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Table Selected -->
    <div class="table_selected">

        <?php include 'components/doctors_selected.php' ?>

    </div>
    <!-- Table Selected End -->

    <!-- All Table -->
    <div class="all_table">
        <table class="table_all_table">
            <?php include 'components/doctors_populate.php' ?>
        </table>
    </div>
    <!-- All Table End -->

    <!-- Footer -->
    <div class="footer">
        <?php include 'components/footer.php' ?>
    </div>
    <!-- Footer End -->

</body>