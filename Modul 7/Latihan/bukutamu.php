<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu</title>
    </head>
    <body>
        <h1>Buku Tamu untuk Database MySQLi</h1>
        <form action="prosestambah.php" method="POST">
            Nama : <input type="text" name="nama" size="35" maxlength="50"><br>
            Email : <input type="text" name="email" size="35" maxlength="50"><br>
            Komentar : <textarea name="komentar" rows="5" cols="30"></textarea><br>
            <input type="submit" name="simpan">
            <input type="reset" name="reset">
        </form>
    </body>
</html>