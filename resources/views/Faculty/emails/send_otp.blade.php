<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .email-wrapper {
            width: 100%;
            padding: 30px;
            display: flex;
            justify-content: center;
            background-color: #f4f7fc;
        }

        .email-container {
            background: #ffffff;
            max-width: 600px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            border-top: 5px solid #1a2d62;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        h1 {
            color: #1a2d62;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
        }

        .otp-container {
            background: linear-gradient(135deg, #1a2d62, #3a539b);
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            display: inline-block;
        }

        .otp {
            font-size: 34px;
            font-weight: bold;
            color: #fff;
            letter-spacing: 3px;
        }

        .btn {
            background: #1a2d62;
            color: #fff;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin-top: 25px;
        }

        .footer {
            font-size: 14px;
            color: #666;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .footer p {
            margin: 5px 0;
        }

        /* Mobile Responsiveness */
        @media (max-width: 600px) {
            .email-container {
                padding: 30px;
            }

            .otp {
                font-size: 28px;
            }

            .btn {
                padding: 10px 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        <div class="email-container">
            <h1>Email Verification</h1>
            <p>Hello, <strong>{{ $name }}</strong>,</p>
            <p>We received a request to verify your email address. Use the OTP below to proceed:</p>

            <div class="otp-container">
                <h2 class="otp">{{ $otp }}</h2>
            </div>

            <p>Please do not share this OTP with anyone. It is valid for the next 15 minutes.</p>

            <div class="footer">
                <p>If you did not request this, please ignore this email.</p>
                <p>Need help? <a href="mailto:support@example.com">Contact Support</a></p>
            </div>
        </div>
    </div>

</body>
</html>
