<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Uus kontaktivormi sõnum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            color: #111827;
            padding: 2rem;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            color: #1f2937;
            margin-bottom: 1rem;
        }
        p {
            margin-bottom: 0.5rem;
        }
        .label {
            font-weight: bold;
        }
        .message {
            margin-top: 1rem;
            padding: 1rem;
            background-color: #f3f4f6;
            border-left: 4px solid #4b5563;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Uus kontaktivormi sõnum</h2>

        <p><span class="label">Nimi:</span> {{ $name }}</p>
        <p><span class="label">Email:</span> {{ $email }}</p>
        <p><span class="label">Telefon:</span> {{ $phone }}</p>

        <div class="message">
            <p><span class="label">Sõnum:</span></p>
            <p>{{ $messageText }}</p>
        </div>
    </div>
</body>
</html>
