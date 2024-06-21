<!DOCTYPE html>
<html>
<head>
    <title>My Email Template</title>
</head>
<body>
    <h1>Hello, {{ $data['name'] }}</h1>
    <p>This is a sample email sent from Laravel using a Blade template.</p>
    <p>Message: {{ $data['message'] }}</p>
</body>
</html>