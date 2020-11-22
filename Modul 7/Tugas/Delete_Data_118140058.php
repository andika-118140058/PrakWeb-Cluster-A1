<!DOCTYPE html>
<html>
    <head>
        <title>Delete Data</title>
    </head>
    <body>
        <h2>Delete Data</h2>
        <?php
            if(isset($_POST["delete"])){
                $nrp_del=$_POST["nrp_delete"];
                $conn=mysqli_connect("localhost","root","") or die ("Koneksi gagal");
                mysqli_select_db($conn,"universitas");
                $query=mysqli_query($conn,"DELETE FROM mahasiswa WHERE nrp=$nrp_del;");
                if($query==true){
                    echo "Data Berhasil dihapus";
                }
                else{
                    echo "Data tidak berhasil dihapus";
                }
            }
        ?>
        <form action="Index_Tugas_118140058.php">
            <input type="submit" name="kembali" value="Kembali">
        </form>
    </body>
</html>