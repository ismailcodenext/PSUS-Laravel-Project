<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        .email-container {
            background-color: #fff;
            max-width: 650px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #343a40;
            color: #fff;
            padding: 25px 30px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .email-body {
            padding: 30px;
        }

        .email-body p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #333;
        }

        .email-body .label {
            font-weight: 600;
            color: #000;
        }

        .email-footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #666;
        }

        .email-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .email-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>New Contact Message Received</h1>
        </div>

        <div class="email-body">
            <p><span class="label">Name:</span> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            <p><span class="label">Mobile:</span> {{ $data['mobile'] }}</p>
            <p><span class="label">City:</span> {{ $data['city'] }}</p>
            <p><span class="label">Region:</span> {{ $data['region'] }}</p>
            <p><span class="label">Message:</span><br>{{ $data['description'] }}</p>
        </div>

        <div class="email-footer">
            This message was sent via the PSUS Contact Form.<br>
            <a href="mailto:{{ $data['email'] }}">Reply to {{ $data['email'] }}</a>
        </div>
    </div>
</body>
</html>
