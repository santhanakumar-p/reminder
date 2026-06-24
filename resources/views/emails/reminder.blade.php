<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reminder Email</title>
</head>

<body>
    <h2>{{ $reminder->name }}</h2>

    <p>{{ $reminder->description }}</p>

    <p>
        Reminder Time:
        {{ $reminder->reminder_at }}
    </p>
</body>

</html>
