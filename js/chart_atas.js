var ctx = document.getElementById('pieChart').getContext('2d');
var pieChart = new Chart(ctx,{
    type: 'pie',
    data: {
        datasets: [{
            data: [3000, 2000, 2500]
        }],

        borderColor: [
            "#FF6384",
            "#36A2EB",
            "#FFCE56"
        ],

        backgroundColor: [
            "#FF6384",
            "#36A2EB",
            "#FFCE56"
       ],
       
       hoverBackgroundColor: [
            "#FF6384",
            "#36A2EB",
            "#FFCE56"
       ],
    
       labels: [
            'Langsung',
            'Janda/Duda',
            'Anak'
        ]
    },
    options: {
        legend: {
            display: true,
            position: "right",
            labels: {
                fontColor: '#666',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                fontSize: 16
            }
        }
    }
});