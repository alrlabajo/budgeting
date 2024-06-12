<div class="p-1 sm:ml-64">
    <x-slot name="title">PLM Budgeting Dashboard</x-slot>
    <div class="flex-col grid grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-4 px-4 py-6">
        <!-- WELCOME! -->
        <div class="relative max-w-xl max-h-xl rounded-lg shadow border border-gray border-opacity-50 bg-cover bg-center">
            <div class="absolute inset-0 rounded-lg"></div>
            <img class="w-[540px] h-[350px] opacity-40 mx-auto mt-auto" src="css/images/background.png">
            <div class="absolute inset-0 flex flex-col items-start ml-6 justify-top text-left left-2 mt-8">
                <div class="flex items-center">
                    <img class="w-[50px] h-[50px]" src="css/images/image 5.png">
                    <img class="h-[40px] ml-2" src="css/images/image 4.png">
                </div>
                <h1 class="text-2xl font-extrabold ml-2 mt-3 mb-3 text-blue-800 z-10 relative">PLM Budget System</h1>
                <h3 class="text-[55px] font-extrabold ml-2 mb-1 text-blue-800 z-10 relative">Welcome,</h3>
                <h2 class="text-2xl font-bold ml-2 text-cyan-800 z-10 relative">Maribeth Solquio.</h2>
            </div>
        </div>
        <div class="flex flex-col space-y-4">
            <!-- Budget Call Forms -->
            <div class="max-w-xl h-48 md:h-52 sm:h-64 rounded-lg shadow border border-gray border-opacity-20 justify-center ">
                <!-- Header -->
                <div class="flex items-center px-2 py-2">
                    <img class="w-[30px] h-[30px] mr-2" src="css/images/icon1.png">
                    <h1 class="text-xl font-extrabold text-blue-800">Budget Call Forms</h1>
                </div>
                <!-- 1st Row -->
                <div class="flex-col justify-items-center grid grid-col-3 md:grid-col-2 sm:grid-col-2 gap-x-3 gap-y-2 items-center content-center p-2">
                    <div class="grid grid-cols-3 md:grid-cols-3 sm:grid-cols-2 gap-x-2 gap-y-2 md:gap-x-2 sm:gap-x-2">
                        <!-- Activity Justification Document -->
                        <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md ">
                            <a href="/activity-justification-form" class="text-xs text-white btn text-center">Activity
                                Justification</a>
                        </div>
                        <!-- Personnel Schedule -->
                        <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md ">
                            <a href="/personnel-schedule-form" class="text-sm text-white btn text-center">Personnel
                                Schedule</a>
                        </div>
                        <!-- Project Procurement Management Plan -->
                        <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md ">
                            <a href="/PPMP-form" class="text-xs text-white btn text-center">Project Procurement
                                Management Plan</a>
                        </div>
                        <!--Personal Services-->
                        <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md ">
                            <a href="/personal-services-form" class="text-sm text-white btn text-center">Personal
                                Services</a>
                        </div>
                        <!-- Maintenance and Other Operating Expenses -->
                        <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md ">
                            <a href="/MOOE-form" class="text-xs text-white btn text-center">Maintenance and Other
                                Operating Expenses</a>
                        </div>
                        <!-- Capital Outlay -->
                        <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-white rounded-md">
                            <a href="/capital-outlay-form" class="text-sm text-white btn text-center">Capital Outlay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment Request-->
            <div class="max-w-xl h-44 md:h-32 sm:h-72 rounded-lg shadow border border-gray border-opacity-20 justify-items-center">
                <div class="flex items-center px-2 py-2">
                    <img class="w-[30px] h-[30px] mr-2" src="css/images/icon1.png">
                    <h1 class="text-xl font-extrabold text-blue-800">Payment Request Forms</h1>
                </div>

                <div class="grid grid-cols-2 p-2 md:gap-x-1 md:grid-cols-2 sm:grid-cols-1 justify-items-center sm:py-2 md:gap-y-2 sm:gap-y-2 sm:gap-x-2">
                    <div class="flex items-center justify-center w-44 h-16 bg-blue-800  text-white rounded-md">
                        <a href="/BUR-form" class="text-sm text-white btn text-center">Budget Utilization<br>Request</a>
                    </div>
                    <div class="flex items-center justify-center w-44 h-16 bg-blue-800 text-white rounded-md">
                        <a href="/amendment-form" class="text-sm text-white btn text-center">Amendment</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Calendar -->
        <div class="relative flex flex-col items-center max-w-full md:w-[290px] md:max-w-xl rounded-lg shadow border border-gray border-opacity-20 ">
            <livewire:calendar />
        </div>
    </div>

    <div class="flex flex-row gap-x-4 px-4">
        <!-- Status of Appropriations -->
        <div class="flex flex-col w-1/2 max-h-xl rounded-lg shadow border border-gray border-opacity-20">
            <!-- Title -->
            <div class="flex items-center gap-x-3 px-3 mt-5">
                <img class="w-[30px] h-[30px]" src="css/images/icon1.png">
                <h1 class="text-[20px] font-extrabold text-blue-800">Status of Appropriations</h1>
            </div>
            <h2 class="text-[15px] font-extrabold ml-14 text-cyan-800">Budget Call Documents</h2>
            <div class="flex justify-end pr-5 mb-2">
                <select class="border border-gray-300 rounded-md p-2">
                    <option value="option1">Select Form</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
            </div>
            <!-- Donut Chart -->
            <div wire:ignore class="py-3 px-2">
                <canvas id="myDoughnutChart" class="w-[300px] h-[200px]"></canvas>
            </div>
            @assets
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            @endassets


            @script
            <script>
                const ctx = document.getElementById('myDoughnutChart');

                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Salaries & Wages - Regular', 'Salaries & Wages - Casual', 'Subsistence Allowance', 'Hazard Pay', 'Longevity Pay', 'Pag-IBIG Contributions'],
                        datasets: [{
                            data: [12, 19, 3, 5, 2, 3],
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'right',
                            }
                        }
                    }
                });
            </script>
            @endscript

        </div>
        <!-- Project Procurement Management Plan -->
        <div class="w-[490px] max-h-xl rounded-lg shadow border border-gray border-opacity-20">
            <div class="flex items-center gap-x-3 px-3 mt-5">
                <img class="w-[30px] h-[30px]" src="css/images/icon1.png">
                <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Project Procurement Management Plan</h1>
            </div>


            <!-- NEED FUNCTIONALITY Column Chart -->
            <h2 class="text-[15px] font-extrabold ml-14 text-cyan-800">Overall Budget</h2>



            <div class="px-3 py-2" style="width: 100%; height: 300px;">
                <canvas id="myChart"></canvas>
            </div>
            @assets
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            @endassets

            @script
            <script>
                const bar = document.getElementById('myChart');
                const subscriptions = $wire.subscriptions;

                const labels = subscriptions.map(item => item.Day);
                const values = subscriptions.map(item => item.Value);

                new Chart(bar, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Budget',
                            data: values,
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
            @endscript
        </div>
    </div>
</div>

<!-- User Menu -->
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdown");
        dropdown.classList.toggle("hidden");
        console.log("Dropdown toggled");
    }
</script>
</div>