
 <div class="container mx-auto space-y-4 p-4 sm:p-0">
    <div class="card card-body">
        {{-- CONTENT --}}
        <div>
            <canvas id="myChart"></canvas>
        </div>        {{-- JAVASCRIPT --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
        // var chartData = JSON.parse({!! $paten !!})
        // console.log(chartData)
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart =
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['0','2022','2022'],
                datasets: [{
                    label: 'paten',
                    data: [0,2,3],
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
        </script>

    </div>

 </div>


