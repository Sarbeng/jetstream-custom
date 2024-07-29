
<div class="flex gap-4 mb-8">
    <div class="w-1/2 bg-white p-4">
        <canvas id="barChart"></canvas>
    </div>

    <div class="w-1/2 bg-white p-4">
        <canvas id="lineChart"></canvas>
    </div>
</div>
<div class="flex gap-4">
    <div class="w-1/2 bg-white p-4">
        <canvas id="donutChart"></canvas>
    </div>

    <div class="w-1/2 bg-white p-4 rounded">
        <canvas id="pieChart"></canvas>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // bar chart
    const barChart = document.getElementById('barChart');

    new Chart(barChart, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // line chart goes here
    const lineChart = document.getElementById('lineChart');

    new Chart(lineChart, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // line chart goes here
    const donutChart = document.getElementById('donutChart');

    new Chart(donutChart, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 205, 80)',
                    'rgb(255, 205, 200)',
                    'rgb(255, 215, 86)'
                ],
                hoverOffset: 4
            }]
        },

    });


    // line chart goes here
    const pieChart = document.getElementById('pieChart');

    new Chart(pieChart, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 105, 86)',
                    'rgb(255, 235, 80)',
                    'rgb(255, 145, 200)',
                    'rgb(255, 215, 186)'
                ],
                hoverOffset: 4
            }]
        },

    });

</script>
