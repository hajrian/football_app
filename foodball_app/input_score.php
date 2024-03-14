<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Skor Pertandingan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"], button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Input Skor Pertandingan</h2>
    <form method="post">
        <input type="hidden" name="action" value="AddMatch">
        <label for="club1">Klub 1:</label>
        <input type="text" id="club1" name="club1" required>
        <label for="score1">Skor 1:</label>
        <input type="number" id="score1" name="score1" required>
        <label for="club2">Klub 2:</label>
        <input type="text" id="club2" name="club2" required>
        <label for="score2">Skor 2:</label>
        <input type="number" id="score2" name="score2" required>
        <button type="submit">Save</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($message)) echo "<p>$message</p>"; ?>
</body>
</html>
