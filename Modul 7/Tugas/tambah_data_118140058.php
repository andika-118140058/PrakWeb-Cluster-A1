<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h2>Tambah Data</h2>
        <?php
            if(isset($_POST['tambah'])){
                $nama = $_POST["nama"];
                $nrp = $_POST["nrp"];
                $foto = $_POST["foto"];
                $id_jurusan=$_POST["id_jur"];
                $conn=mysqli_connect("localhost","root","") or die ("Koneksi gagal");
                mysqli_select_db($conn,"universitas");
                $sqlstr="insert into mahasiswa values ($nrp,'$nama','$foto',$id_jurusan)";
                if($nrp=="" || $nama=="" || $foto=="" || $id_jurusan=="--Pilih Jurusan--"){
                    echo "Data tidak berhasil ditambahkan";
                }
                else{
                    mysqli_query($conn,$sqlstr);
                    echo "NRP : $nrp <br>";
                    echo "Nama : $nama <br>";
                    echo "Foto : $foto <br>";
                    echo "ID Jurusan : $id_jurusan <br>";
                    echo "Tambah data berhasil dilakukan";
                }  
            }
        ?>
        <form action="Index_Tugas_118140058.php">
            <input type="submit" name="kembali" value="Kembali">
        </form>
    </body>
</html>