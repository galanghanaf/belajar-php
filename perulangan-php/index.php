<!DOCTYPE html>
<html>
	<body>
		<h2>Data Kelompok 3</h2>
		<?php
                include "./koneksi.php";
                $query = mysqli_query($conn, 'SELECT * FROM anggota_kelompok3');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $loopdata){                                
                	echo "Saya " .$loopdata['nama'];               
                	echo " dengan NPM 0" .$loopdata['npm']; 
                	echo ", saya tinggal di ".$loopdata['domisili'].".</br>";                                    
				}
		?>
	</body>
</html>
