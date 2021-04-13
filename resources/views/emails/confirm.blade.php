<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Confirm Sign Up Link</title>
</head>
<body>
  <h1>Thank you for signing up with Weibo App！</h1>

  <p>
    Finish sign up by clicking the link：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    Ignore this email if you did not sign up.
  </p>
</body>
</html>
