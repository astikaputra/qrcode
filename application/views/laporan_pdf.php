<!DOCTYPE html>
<html>
<head><title></title>
</head>
<body>
	<table>
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>NAMA</th>
			<th>URL</th>
			<th>QR CODE</th>
		</tr>
		<?php
		$no=1;
		foreach ($pegawai as $pgw): ?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pgw->nip ?></td>
			<td><?php echo $pgw->nama_pegawai ?></td>
			<td><?php echo $pgw->url ?></td>
			<td><img style="width: 200px;" src="assets/images/<?=$pgw->qr_code?>"></td>
		</tr>

	<?php endforeach;?>
	</table>

</body></html>
