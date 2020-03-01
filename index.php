<?php 

require 'vendor/autoload.php';
use Carbon\Carbon;

$api = new RestClient([
	'base_url' => "https://ibnux.github.io/BMKG-importer",
	'format' => "json"
]);
$result = $api->get("cuaca/501320");
$data = $result->decode_response();


foreach((array) $data as $item) {
$date = Carbon::createFromFormat('Y-m-d H:i:s', @$item->jamCuaca);

##$time = date('d M Y', strtotime($item->jamCuaca));
	printf("Cuaca kota singkawang hari %s tanggal %s jam %s dengan suhu %s derajat celcius. \n", @$date->format('l'), @$date->format('d M Y'), @$date->format('H:i'), $item->cuaca, $item->tempC );
}
