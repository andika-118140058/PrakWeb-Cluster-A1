<!DOCTYPE html>
<html>
    <head>
        <title>Search Data</title>
    </head>
    <body>
        <h2>Search Data</h2>
        <?php
            if(isset($_POST["search"])){
                $nama=$_POST["nama_search"];
                $conn=mysqli_connect("localhost","root","") or die ("Koneksi gagal");
                mysqli_select_db($conn,"universitas");
                $query=mysqli_query($conn,"SELECT nrp, nama, foto, nama_jur FROM mahasiswa NATURAL JOIN jurusan WHERE nama LIKE '$nama'");
                $jumlah=mysqli_num_rows($query);
                echo "<br>";
                echo "Ditemukan: $jumlah";
                echo "<br>";
                while($baris=mysqli_fetch_array($query)){
                    echo "NRP : ";
                    echo $baris[0];
                    echo "<br>";
                    echo "Nama : ";
                    echo $baris[1];
                    echo "<br>";
                    echo "Foto : ";
                    echo $baris[2];
                    echo "<br>";
                    echo "Nama Jurusan : ";
                    echo $baris[3];
                    echo "<br>";
                }
            }
        ?>
        <form action="Index_Tugas_118140058.php">
            <input type="submit" name="kembali" value="Kembali">
        </form>
    </body>
</html>