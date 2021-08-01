<!DOCTYPE html>
<html>
<head><title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>NIP</th>
			<th>NAMA</th>
			<th>URL</th>
			<th>QR CODE</th>
		</tr>
		<tr>
			<td><?php echo $queryPgwDetail->pegawai_id ?></td>
			<td><?php echo $queryPgwDetail->nip ?></td>
			<td><?php echo $queryPgwDetail->nama_pegawai ?></td>
			<td><?php echo $queryPgwDetail->url ?></td>
			<td><img style="width: 200px;" src="assets/images/<?=$queryPgwDetail->qr_code?>"></td>
			<!--<td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$queryPgwDetail->qr_code;?>"></td>-->
		</tr>

	</table>

</body></html>
