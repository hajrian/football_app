<?php
session_start();

// Variabel global clubs untuk menampung data klub
$clubs = [
    ['name' => 'Persib', 'played' => 2, 'won' => 2, 'drawn' => 0, 'lost' => 0, 'goals_for' => 4, 'goals_against' => 0, 'points' => 6],
    ['name' => 'Arema', 'played' => 2, 'won' => 1, 'drawn' => 0, 'lost' => 1, 'goals_for' => 2, 'goals_against' => 2, 'points' => 3],
    ['name' => 'Persija', 'played' => 2, 'won' => 0, 'drawn' => 0, 'lost' => 2, 'goals_for' => 0, 'goals_against' => 4, 'points' => 0]
];

// Fungsi untuk menampilkan klasemen
function displayStandings() {
    global $clubs;

    // Pastikan $clubs memiliki nilai sebelum menggunakan foreach
    if (!empty($clubs)) {
        echo "<table>";
        echo "<tr><th>No</th><th>Klub</th><th>Ma</th><th>Me</th><th>S</th><th>K</th><th>GM</th><th>GK</th><th>Point</th></tr>";
        $rank = 1;
        foreach ($clubs as $club) {
            echo "<tr>";
            echo "<td>$rank</td>";
            echo "<td>{$club['name']}</td>";
            echo "<td>{$club['played']}</td>";
            echo "<td>{$club['won']}</td>";
            echo "<td>{$club['drawn']}</td>";
            echo "<td>{$club['lost']}</td>";
            echo "<td>{$club['goals_for']}</td>";
            echo "<td>{$club['goals_against']}</td>";
            echo "<td>{$club['points']}</td>";
            echo "</tr>";
            $rank++;
        }
        echo "</table>";
    } else {
        echo "<p>Tidak ada data klasemen yang tersedia.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Klasemen</title>
    <style>
        /* Gaya CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        p {
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
    <h2>Tampilan Klasemen</h2>
    <?php displayStandings(); ?>
</body>
</html>
