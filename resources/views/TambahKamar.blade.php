<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/prosesinsert" method="post">
        {{ csrf_field() }}
        Nomor Kamar:
        <input type="text" name="nk"><br>
        Tipe Kamar:
        <input type="text" name="tk"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>