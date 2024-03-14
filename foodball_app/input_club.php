<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Klub</title>
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
    <h2>Input Data Klub</h2>
    <form method="post">
        <input type="hidden" name="action" value="AddClub">
        <label for="club_name">Nama Klub:</label>
        <input type="text" id="club_name" name="club_name" required>
        <label for="club_city">Kota Klub:</label>
        <input type="text" id="club_city" name="club_city" required>
        <button type="submit">SAVE</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($message)) echo "<p>$message</p>"; ?>
</body>
</html>
