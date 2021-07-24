



$(document).ready(function () {

    const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(50, 99, 22)',
            borderColor: 'rgb(105, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    };

    const configBar = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                }
            }
        },
    };

    const configLine = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                }
            }
        },
    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        configBar
    );

    var myChartLine = new Chart(
        document.getElementById('myChartLine'),
        configLine
    );


});

