<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #e74c3c;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #e74c3c;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Password</h2>
        <form action="gantiproses.php" method="post">
            <label for="gmail">Email:</label>
            <input type="email" name="gmail" required>
            <br>
            <label for="password_lama">Old Password:</label>
            <input type="password" name="password_lama" required>
            <br>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" required>
            <br>
            <input type="submit" name="update_password" value="Update Password">
        </form>
    </div>
</body>
</html>
