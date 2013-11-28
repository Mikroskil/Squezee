<?php
include 'header.php';
?>
	<div class="container">
		<div class="row">
			
			<div class="span9">
                <div class="hero-unit">
                	<center>
                	<h2>Calon kandidat kategori 1</h2>
                        
                        <table width="100%">
                        <tbody>
                        <?php 
						$total = mysql_query("select * from vote where kategori='1'");
						$tot_suara = mysql_num_rows($total);
						
						$total1 = mysql_query("select * from vote where kategori='1' and id_kan ='3'");
						$tot_user1 = mysql_num_rows($total1);
						
						$select="select * from kandidat where kategori='1' order by id_kan desc";
                             $query=mysql_query($select);
                             while($row=mysql_fetch_array($query))
                             {
							 ?>
                             
                        	<tr>
                            	<td rowspan="4"><img  class="foto" src="foto/<?php echo $row['foto'];?>" width='160' height='190'></td>
                              	<td>Nama</td>
                                <td>:</td>
                                <td><?php echo $row['nama'];?></td>
                            </tr>
                            <tr>
                            	<td>NPM</td>
                                <td>:</td>
                                <td><?php echo $row['npm'];?></td>
                            </tr>
                            <tr>
                            	<td>Motto</td>
                                <td>:</td>
                                <td><i><?php echo $row['motto'];?></i></td>
                            </tr>
                            <tr>
                                <td>Jlh.Vote</td>
                                <td>:</td> 
                                <td><?php echo $row['jlh_vote'];?></td>
                            </tr>
                            <tr>
                            	<td colspan="4"><hr></td>
                            </tr>
                            <?php } ?>
                            <tr>
                            	<td colspan="4" align="center"><b>Total suara : <?php echo $tot_suara; ?></b></td>
                                
                            </tr>
                          </tbody>
                        </table>
                        
                        <br /><p><a href="vote1.php" class="btn btn-primary btn-large">Pilih</a></p>
                    </center>
				</div>

				
			</div>
		</div>
	</div>
	
	<hr />
	<?php
	include 'footer.php';
	?>