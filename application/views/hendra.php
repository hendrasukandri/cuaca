<!DOCTYPE html>
<html>
<head>
	<title>Nama Saya <?<?php echo $nama; ?></title>
</head>
<body>
	<p><?php echo $nama; ?></p>
	<h3>Ramalan Cuaca Singkawang</h3>
	<ul>
		<?php foreach((array) $data as $item) {  ?>
			<?php $date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', @$item->jamCuaca);?>
			<li>
				Cuaca kota singkawang hari <?php echo $date->format('l'); ?> 
				tanggal <?php echo $date->format('d M Y'); ?> 
				jam <?php echo $date->format('H:i');?> 
				adalah <?php echo $item->cuaca; ?>
				dengan suhu <?php echo $item->tempC; ?> 
				°C
</li>
<?php }  ?>
	</ul>
</body>
</html>