<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Form Kontak</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fdfcfb, #e2d1c3);
            color: #333;
            padding: 30px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 0 auto;
        }
        h2 {
            background: linear-gradient(135deg, #2563eb, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 22px;
            margin-bottom: 20px;
        }
        p {
            font-size: 15px;
            line-height: 1.6;
            margin: 10px 0;
        }
        strong {
            color: #111827;
        }
        .footer {
            border-top: 1px solid #e5e7eb;
            margin-top: 30px;
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pesan dari: {{ $data['nama'] }}</h2>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Subjek:</strong> {{ $data['subjek'] }}</p>
        <p><strong>Pesan:</strong><br>{{ $data['pesan'] }}</p>

        <div class="footer">
            Pesan ini dikirim melalui formulir kontak di website SMK PGRI 3.
        </div>
    </div>
</body>
</html>
