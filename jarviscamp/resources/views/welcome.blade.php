<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
    <p>Nama Depan : {{ $p->fname }}</p>
    <p>Nama Belakang : {{ $p->lname }}</p>
    {{-- <p>Nama Panjang : {{ $fname }} {{ $lname }}</p> --}}
</body>
</html>