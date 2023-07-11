<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    
    <p>User ID: {{ $data['entry'][0]['id'] }}</p>
    <p>Field: {{ $data['entry'][0]['changes'][0]['field'] }}</p>
    <p>Value: {{ $data['entry'][0]['changes'][0]['value']['object_id'] }}</p>
</body>
</html>
