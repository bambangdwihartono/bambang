<?php 

	include 'Database1.php';
	
 ?>
 <a href="input1.php">Input Data</a>
 <table border="1">
 	<tr>
 		<th>No</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 		<th>Usia</th>
 		<th>Option</th>
 	</tr>
 	<?php 

 	$no = 1;
 	foreach ($db->tampil_data() as $x) {
 	 ?>
	 	<tr>
	 		<td><?php echo $no; ?></td>
	 		<td><?php echo $x['nama']; ?></td>
	 		<td><?php echo $x['alamat']; ?></td>
	 		<td><?php echo $x['usia']; ?></td>
	 		<td>
	 			<a href="edit.php?id=<?php echo $s['id']?>&aksi=edit">Edit</a>
	 			<a href="proses.php?id=<?php echo $s['id']?>&aksi=hapus">Edit</a>
	 		</td>
	 	</tr>
	 <?php 

	}

	  ?>
 </table>