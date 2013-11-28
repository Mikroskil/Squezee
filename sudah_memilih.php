<?php
include 'header.php';
$pilih = mysql_query("select * from vote where id_user=".mysql_real_escape_string($id_user)." and kategori='1' ");
//$pilih = mysql_query("select * from users where id_user=".mysql_real_escape_string($id_user)."");
						$plh = mysql_fetch_array($pilih);
						
						if ($plh['status']=='')
						{
							header('location:vote1.php');
						}
						else 
						{
?>
	<div class="container">
		<div class="row">
			
			<div class="span9">
                <div class="hero-unit">
                	<center>
                	
                    <?php
					echo '<h2>Anda Sudah memilih</h2>';
					?>
                        
                    </center>
				</div>

				
			</div>
		</div>
	</div>
	<?php } ?>
	<hr />
	<?php
	include 'footer.php';
	?>