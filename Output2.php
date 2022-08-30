<html>
    <body>
        <?php
            function family ($nama, $tanggal, $tempat){
                echo ( "Nama    : $nama<br/>");
                echo ( "Lahir $tanggal di $tempat <br/>");
            }
            echo ("Data Anggota Keluarga");
            echo ("<br>");
            family (" Muhammad Arbiansyafa Siswanto","27 April 2002","Gresik");
            echo ("<br>");
            family ("Aira Zahra Nur Safitri","30 September 2009","Gresik");
            echo ("<br>");
            family ("Agus Siswanto","8 Agustus 1979","Gresik");
        ?>
    </body>
</html>