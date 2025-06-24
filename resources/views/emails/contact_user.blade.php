<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You for Contacting PSUS</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        .email-container {
            background-color: #ffffff;
            max-width: 650px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #28a745;
            color: white;
            padding: 25px 30px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .email-body {
            padding: 30px;
            color: #333;
        }

        .email-body p {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .email-body .label {
            font-weight: 600;
            color: #000;
        }

        .email-footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #666;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Thank You for Contacting PSUS</h1>
        </div>

        <div class="email-body">
            <p>Dear {{ $data['first_name'] }},</p>

            <p>We’ve received your message and one of our team members will get back to you shortly. Here's what we received from you:</p>

            <p><span class="label">Name:</span> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            <p><span class="label">Mobile:</span> {{ $data['mobile'] }}</p>
            <p><span class="label">City:</span> {{ $data['city'] }}</p>
            <p><span class="label">Region:</span> {{ $data['region'] }}</p>
            <p><span class="label">Message:</span><br>{{ $data['description'] }}</p>

            <a href="{{ url('/') }}" class="btn">Visit Our Website</a>
        </div>

        <div class="email-footer">
            &copy; {{ date('Y') }} PSUS. All rights reserved.
        </div>
    </div>
</body>
</html>
