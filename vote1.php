<?php
include 'header.php';

$pilih = mysql_query("select * from vote where id_user=".mysql_real_escape_string($id_user)." and kategori='1' ");
//$pilih = mysql_query("select * from users where id_user=".mysql_real_escape_string($id_user)."");
						$plh = mysql_fetch_array($pilih);
						
						if ($plh['status']=='1')
						{
							header('location:sudah_memilih.php');
						}
						else 
						{
?>
	<div class="container">
		<div class="row">
			
			<div class="span9">
                <div class="hero-unit">
                	<center>
                	<h2>Pilih Kandidat Anda</h2>
                    
                        <form name="myform" id="myform" action="action_add.php" method="POST">  
                       
                        <table>
                        
                       <?php 
						$qj = mysql_query("select * from kandidat where kategori='1' order by id_kan desc ");
                        //$id = "";
                        while($rj=mysql_fetch_array($qj))
                        {
                        ?>
                        
                        <tr>
                        
                            <td><input type="radio" name="id_kan" checked="checked" value=" <?php echo $rj["id_kan"]; ?>"/></td>
                            <td> <?php echo $rj["nama"]; ?></td>
                            </tr>
                        <?php
                        }
						?>
                         </table>
                            <br><input type="submit" name="submit" value="Submit"> 
                            
                        </form>
                        
                        <table width="100%">
                        <tbody>
                        <?php $select="select * from kandidat where kategori='1' order by id_kan desc";
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
                                <td><?php echo $row['motto'];?></td>
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
                          </tbody>
                        </table>
                    </center>
				</div>

				
			</div>
		</div>
	</div>
	     <?php
                         } ?>
                    
	<hr />
	<?php
	include 'footer.php';
	?>