<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Portfolio</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px;">
        <h2 style="color: #10b981; border-bottom: 2px solid #10b981; padding-bottom: 10px;">Pesan Baru dari Portfolio</h2>
        
        <p><strong>Nama:</strong> {{ $name }}</p>
        <p><strong>Email Pengirim:</strong> {{ $email }}</p>
        
        <div style="background: #f9f9f9; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p><strong>Pesan:</strong></p>
            <p style="white-space: pre-wrap;">{{ $messageBody }}</p>
        </div>
        
        <p style="font-size: 12px; color: #888; margin-top: 30px; text-align: center;">
            Dikirim secara otomatis dari website Portfolio Zaki.
        </p>
    </div>
</body>
</html>
