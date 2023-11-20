<!DOCTYPE html>
<html>

<head>
    <title>Contactus {{ $mailData['email'] }} </title>
</head>

<body>
    <h4 style="margin:0; padding: 5px 0 5px 0">Name :{{ $mailData['name'] }}</h4>
    <h4 style="margin:0; padding: 0; color:blue">Email :{{ $mailData['email'] }}</h4>
    <p style="margin:0; padding: 5px 0 5px 0">Message: {{ $mailData['message'] }}</p>
</body>

</html>