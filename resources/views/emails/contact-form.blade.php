<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau message</title>
</head>
<body>
    <h1>Bonjour</h1>
    <p>From: {{$content['firstname'].' '.$content['lastname']}}</p>
    <p>Subject: {{$content['subject']}}</p>
    <p>{{$content['content']}}</p>
</body>
</html>
