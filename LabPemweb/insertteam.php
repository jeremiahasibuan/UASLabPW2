<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Klub Olahraga</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('assets/image/Logo WS.png'); 
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            max-width: 100%;
            background-color: rgba(225, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 35%;
        }

        h2 {
            color: #d9534f;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #d9534f;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            border: none;
        }

        button {
            background-color: #d9534f;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>

    <form action="datatim.php" method="post" enctype="multipart/form-data">
        <h2>Form Pendaftaran Tim</h2>

        <label for="logo">Logo Tim:</label>
        <input type="file" id="logo" name="logo" accept="image/*" required>

        <label for="cabangOlahraga">Cabang Olahraga:</label>
            <select name="cabangOlahraga">
                <option value="sepakbola">Sepak Bola</option>
                <option value="bulutangkis">Bulutangkis</option>
                <option value="futsal">Futsal</option>
                <option value="basket">Basket</option>
                <option value="minisoccer">Mini Soccer</option>
            </select>

        <label for="namaClub">Nama Club:</label>
        <input type="text" id="namaClub" name="namaClub" required>

        <label for="lokasi">Lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" required>

        <label for="biaya">Biaya:</label>
        <input type="number" id="biaya" name="biaya" required>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
