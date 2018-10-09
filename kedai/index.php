<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM barangmainan ORDER BY id DESC");
?>

<html>
    <head>
          <title>Senarai Barangan Kedai Dulu-Dulu</title>
    </head>
    <body>
    <center>
    	<img src="1.png">
        <h2>SENARAI BARANGAN DAN HARGA</h2> 
        
            <table witdh='80%'bordercolor="black" cellpadding="10" cellspacing="0">
                <tr bgcolor='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>

<?php
      $no=1;
      
      while($res = mysqli_fetch_array($result)) {
          echo "<tr>";  
          echo "<td>".$no; 
          echo "<td>".$res['nama']."</td>"; 
          echo "<td>".$res['harga']."</td>"; 
          echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\return confirm('Adakah anda pasti?')
                    \">hapus</a></td>";
          $no++;
      }
         ?>
            </table>
            <br><button  href="add.php">Daftar Barang Baru</button>
    </center>

  	<img src="2.png">
    </body>
</html>   

