<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football App</title>
    <style>
        /* CSS styling */
        nav {
            margin-bottom: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Football App</h1>
    <nav>
        <ul>
            <li><a href="index.php?menu=input_club">Input Data Klub</a></li>
            <li><a href="index.php?menu=input_score">Input Skor Pertandingan</a></li>
            <li><a href="index.php?menu=standings">Tampilan Klasemen</a></li>
        </ul>
    </nav>

    <?php
    // Memproses rute yang diminta
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['menu'])) {
            $menu = $_GET['menu'];
            switch ($menu) {
                case 'input_club':
                    include('input_club.php');
                    break;
                case 'input_score':
                    include('input_score.php');
                    break;
                case 'standings':
                    include('standings.php');
                    break;
                default:
                    echo "Halaman tidak ditemukan.";
                    break;
            }
        } else {
            echo "Silakan pilih menu.";
        }
    }
    ?>
</body>
</html>
