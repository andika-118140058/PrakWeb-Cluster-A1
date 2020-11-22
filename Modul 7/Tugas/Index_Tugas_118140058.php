<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1>Data Mahasiswa</h1><hr width="50%" align="left"><hr width="50%" align="left">
        <h2>Tambah Data</h2>
        <form action="tambah_data_118140058.php" method="post">
            <label>NRP : </label>
            <input type="text" name="nrp"><br>
            <label>Nama : </label>
            <input type="text" name="nama"><br>
            <label>Foto : </label>
            <input type="file" name="foto"><br>
            <label>Jurusan : </label>
            <select name="id_jur">
                <option>--Pilih Jurusan--</option>
                <option value="1">Telekomunikasi</option>
                <option value="2">IT</option>
                <option value="3">Elka</option>
                <option value="4">Elin</option>
            </select><br>
            <input type="submit" name="tambah" value="Tambah Data">
        </form>
        <hr width="50%" align="left"><hr width="50%" align="left">
        <h2>Search Data</h2>
        <form action="Search_data_118140058.php" method="post">
            <label>Nama : </label>
            <input type="text" name="nama_search">
            <input type="submit" name="search" value="Cari Data">
        </form>
        <hr width="50%" align="left"><hr width="50%" align="left">
        <h2>Delete Data</h2>
        <form action="Delete_Data_118140058.php" method="post">
            <label>NRP : </label>
            <input type="text" name="nrp_delete">
            <input type="submit" name="delete" value="Hapus Data">
        </form>
    </body>
</html>