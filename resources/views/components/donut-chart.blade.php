<div x-data="{ data: {!! json_encode($budgets) !!} }">
    <!-- Container for the donut chart -->
    <canvas id="donutChart"></canvas>

    <script>
        // Use Alpine.js to interact with the chart library and render the donut chart
        document.addEventListener('livewire:load', function () {
            // Initialize the donut chart using the budget data
            var donutChart = new Chart(document.getElementById('donutChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(data),
                    datasets: [{
                        data: Object.values(data),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            // Add more colors as needed
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    // Add options as needed
                }
            });

            // Livewire hook to update the chart when data changes
            Livewire.hook('message.processed', function () {
                donutChart.data.labels = Object.keys(data);
                donutChart.data.datasets[0].data = Object.values(data);
                donutChart.update();
            });
        });
    </script>
</div>
