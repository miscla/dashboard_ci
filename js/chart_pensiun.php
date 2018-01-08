var ctx = document.getElementById('myChart').getContext('2d');
<?php
$jumlah = 0;
$total_orang = 0;
foreach($query3 as $row) {
  $date1 = strtotime($row->tgl_awal_tangguhan);
  $date2 = strtotime(date('Y-m-d'));
  $jumlah = $date2 - $date1;
  $days = $jumlah / 86400;
  $months = $days / 30;
  if($months <= 6 && $months > 0) {
    $total_orang = $total_orang + count($row->nik);
}
}
?>
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'horizontalBar',

    // The data for our dataset
    data: {
        labels: ["1 - 6 Bulan", "6 - 12 Bulan", "12 Bulan ++"],
        datasets: [{
            label: "Pensiunan yang Ditangguhkan",
            borderColor: ['rgb(0, 255, 0)', 'rgb(255, 255, 0)', 'rgb(255, 0, 0)'],
            backgroundColor: ['rgb(0, 255, 0)', 'rgb(255, 255, 0)', 'rgb(255, 0, 0)'],
            data: [<?php echo $total_orang; ?>, 28, 46],
        }]
    },
});