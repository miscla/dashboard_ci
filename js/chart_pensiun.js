var ctx = document.getElementById('myChart').getContext('2d');
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
            data: [116, 28, 46],
        }]
    },
});