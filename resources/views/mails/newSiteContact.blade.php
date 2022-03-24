<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nuovo messaggio ricveuto dal form contacts</h1>

    <ul>
        <li>
            Nome Utente : {{ $newContactInfo->name }}
        </li>
        <li>
            Email : {{ $newContactInfo->email }}
        </li>
        <li>
            contenuto : {{ $newContactInfo->content }}
        </li>
    </ul>
</body>
</html>
