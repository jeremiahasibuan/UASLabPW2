<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Lapangan</title>
    <style>
        body {
            background-color: #f8f9fa;
            color: #dc3545;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dc3545;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #dc3545;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #dc3545;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #dc3545;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Lapangan</h2>
        <form action="datalapangan.php" method="post" enctype="multipart/form-data">
            <label for="gambar">Gambar Lapangan:</label>
            <input type="file" id="gambarLapangan" name="gambarLapangan" accept="image/*" required>
            
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasiLapangan" name="lokasiLapangan" required>

            <label for="nama_lapangan">Nama Lapangan:</label>
            <input type="text" id="namaLapangan" name="namaLapangan" required>
            
            <label for="cabang_olahraga">Cabang Olahraga:</label>
            <select id="olahragaLapangan" name="olahragaLapangan" required>
                <option value="sepakbola">Sepak Bola</option>
                <option value="bulutangkis">Bulutangkis</option>
                <option value="futsal">Futsal</option>
                <option value="basket">Basket</option>
                <option value="minisoccer">Mini Soccer</option>
            </select>
            
            <label for="harga">Harga:</label>
            <input type="number" id="biayaLapangan" name="biayaLapangan" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
