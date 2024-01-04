<?php
require $_SERVER['DOCUMENT_ROOT'] . '/psn/config.php';
if (!empty($_SESSION['emel'])) {
    $emel = $_SESSION['emel'];
    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE emel = '$emel'");
    $row = mysqli_fetch_assoc($result);

    $userType = $row['nama_panggilan'];
} else if (empty($_SESSION['emel'])) {
    $userType = "Pelawat";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        .btn-navigation {
            background-color: transparent;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-navigation:hover {
            background: transparent;
            transform: translate(5px 4px);
        }

        .navbar {
            background-color: #FFB400;
            justify-content: space-around;
            height: 110px;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: fixed;
            top: 90px;
            right: 115px;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .dropdown-content a {
            color: dimgray;
            padding: 10px 10px;
            text-decoration: none;
            display: flex;
            font-size: 12px;
        }

        .dropdown:hover .dropdown-content {
            display: flex;
        }

        .navbar-brand {
            width: 20%;
            margin-bottom: 50px;
        }

        .navbar-title {
            display: block;
            color: white;
            margin-right: 150px;
        }

        h2 {
            font-size: 35px;
        }

        h5 {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light shadow-sm sticky-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a href="/psn/index.php">
                    <img src="/psn/assets/images/logopsn.png" />
                </a>
            </div>

            <div class="navbar-title text-center">
                <h2><strong>Pusat Sains Negara</strong></h2>
                <h5><strong>Sistem Pembelian E-Tiket</strong></h5>
            </div>

            <li class="nav-item">
                <div class="dropdown">
                    <a name="" id="" class="" role="button"><img src="/psn/assets/images/icons/user.png" width="60px"></a>
                    <div class="dropdown-content">
                        <a>Pembeli: <?php echo $userType; ?></a>
                    </div>
                </div>
            </li>
            </ul>

        </div>
    </nav>
</body>


</html>