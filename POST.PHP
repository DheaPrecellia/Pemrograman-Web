<!DOCTYPE html>
<html>
<head>
    <center>
    <title>Form Biodata </title>
    </center>
</head>
<body>
    <center>
    <h2>FORM SEDERHANA DAN HIT COUNTER</h2>
    <form method="post">
        Nama: <input type="text" name="nama"><br><br>
        Nim: <input type="text" name="nim"><br><br>
        Prodi <input type="text" name="prodi"><br><br>
        Jenis Kelamin : <input type="radio" name="jk" value="laki-laki" id="laki-laki">
                        <label for="laki">Laki-Laki</label>
                        <input type="radio" name="jk" value="perempuan" id="perempuan">
                        <label for="Laki">Perempuan</label><br><br>
        Alamat: <textarea name="alamat"> </textarea> <br><br>

        <input type="submit" value="Kirim">
    </form>
    </center>
    
    <center>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $prodi = $_POST["prodi"];
         $jk = $_POST["jk"];
        $alamat = $_POST["alamat"];

        echo "<hr><h3>Data yang Anda Masukan:</h3>";
        echo "Nama: $nama<br>";
        echo "Nim: $nim <br>";
        echo "Prodi: $prodi <br>";
        echo "Jenis Kelamin: $jk<br>";
        echo "Alamat: $alamat<br>";
        
    $filecounter = "counter.txt";
    $fl = fopen($filecounter, "r+");
    $hit = fread($fl, filesize($filecounter));

    echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
    echo("<td width=250 valign=middle align=center>");
    echo("<font face=verdana size=2 color=#FF0000><b>");
    echo("Anda pengunjung yang ke:");
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");

    fclose($fl);

    $fl = fopen($filecounter, "w+");
    $hit = $hit + 1;

    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
 
    }
    ?>
    </center>
</body>
</html>