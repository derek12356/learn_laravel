<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Password Recovery</title>
</head>
<body>
  <h1>You are trying to revocer the password.</h1>

  <p>
    To go the next step, click the link below.
    <a href="{{ route('password.reset', $token) }}">
      {{ route('password.reset', $token) }}
    </a>
  </p>

  <p>
    Ignore this email if you did not do it.
  </p>
</body>
</html>
