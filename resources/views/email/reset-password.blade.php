<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <p>Hello,</p>
    <p>You have requested to reset your password. Click the button below to proceed:</p>

    <a href="{{ url('reset-password', $token) }}"
       style="display: inline-block; padding: 10px 20px; color: white; background-color: blue; text-decoration: none; border-radius: 5px;">
        Reset Password
    </a>

    <p>If you did not request this, please ignore this email.</p>
</body>
</html>
