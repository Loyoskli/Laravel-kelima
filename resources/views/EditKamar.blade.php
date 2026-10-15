<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/prosesupdate/{{ $kh->id }}" method="post">
        {{ csrf_field() }}
        Nomor Kamar:
        <input type="text" name="nk" value="{{ $kh->no_kamar }}"><br>
        Tipe Kamar:
        <input type="text" name="tk" value="{{ $kh->tipe_kamar }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
