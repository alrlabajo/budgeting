<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>

    <div class="p-2 sm:ml-64">
        <div class="p-2 space-y-4">
            <div class="flex flex-col sm:flex-row space-x-0 sm:space-x-2 space-y-2 sm:space-y-0">
                <div class="flex flex-col sm:flex-row space-x-0 sm:space-x-2 space-y-2 sm:space-y-0">
                    <!-- WELCOME! -->
                    <div class="relative max-w-xl rounded-lg shadow border border-gray border-opacity-50 bg-cover bg-center w-full">
                        <div class="absolute inset-0 rounded-lg"></div>
                        <img class="w-[649px] h-[385px] opacity-40 mx-auto mt-auto" src="css/images/background.png">
                        <div class="absolute inset-0 flex flex-col items-start ml-6 justify-top text-left left-2 mt-8">
                            <div class="flex items-center">
                                <img class="w-[50px] h-[50px]" src="css/images/image 5.png">
                                <img class="h-[40px] ml-2" src="css/images/image 4.png">
                            </div>
                            <h1 class="text-2xl font-extrabold ml-2 mt-3 mb-3 text-blue-800 z-10 relative">PLM Budget System</h1>
                            <h3 class="text-[55px] font-extrabold ml-2 mb-1 text-blue-800 z-10 relative">Welcome,</h3>
                            <h2 class="text-2xl font-bold ml-2 text-cyan-800 z-10 relative">{{ Auth::user()?->name }}.</h2>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-4 w-full">
                        <!-- Budget Call Forms -->
                        <div class="max-w-2xl h-56 md:h-56 sm:h-64 rounded-lg shadow border border-gray border-opacity-20 justify-center place-items-center w-full">
                            <!-- Header -->
                            <div class="flex items-center px-4 py-3">
                                <img class="w-[30px] h-[30px] mr-2" src="css/images/icon1.png">
                                <h1 class="text-xl font-extrabold text-blue-800 px-1">Budget Call Forms</h1>
                            </div>
                            <!-- 1st Row -->
                            <div class="flex-col justify-items-center grid grid-col-3 md:grid-col-2 sm:grid-col-2 gap-x-3 gap-y-1 items-center content-center px-2 pt-2">
                                <div class="grid grid-cols-3 md:grid-cols-3 sm:grid-cols-2 gap-x-2 gap-y-2 md:gap-x-2 sm:gap-x-2">
                                    <!-- Activity Justification Document -->
                                    <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md">
                                        <a href="/activity-justification-form" class="text-xs text-white btn text-center">Activity Justification</a>
                                    </div>
                                    <!-- Personnel Schedule -->
                                    <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md">
                                        <a href="/personnel-schedule-form" class="text-sm text-white btn text-center">Personnel Schedule</a>
                                    </div>
                                    <!-- Project Procurement Management Plan -->
                                    <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md">
                                        <a href="/PPMP-form" class="text-xs text-white btn text-center">Project Procurement Management Plan</a>
                                    </div>
                                    <!--Personal Services-->
                                    <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md">
                                        <a href="/personal-services-form" class="text-sm text-white btn text-center">Personal Services</a>
                                    </div>
                                    <!-- Maintenance and Other Operating Expenses -->
                                    <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-[13px] text-white rounded-md">
                                        <a href="/MOOE-form" class="text-xs text-white btn text-center">Maintenance and Other Operating Expenses</a>
                                    </div>
                                    <!-- Capital Outlay -->
                                    <div class="flex items-center justify-center w-30 h-16 bg-blue-800 text-white rounded-md">
                                        <a href="/capital-outlay-form" class="text-sm text-white btn text-center">Capital Outlay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Payment Request -->
                        <div class="max-w-2xl h-36 md:h-36 sm:h-72 rounded-lg shadow border border-gray border-opacity-20 justify-center place-items-center w-full">
                            <div class="flex items-center px-4 py-3">
                                <img class="w-[30px] h-[30px] mr-2" src="css/images/icon1.png">
                                <h1 class="text-xl font-extrabold text-blue-800">Payment Request Forms</h1>
                            </div>
                            <div class="grid grid-cols-2 px-6 md:gap-x-1 md:grid-cols-2 sm:grid-cols-1 justify-items-center sm:py-2 md:gap-y-2 sm:gap-y-2 sm:gap-x-4">
                                <div class="flex items-center justify-center w-72 h-16  bg-blue-800 text-white rounded-md">
                                    <a href="/BUR-form" class="text-sm text-white btn text-center">Budget Utilization Request</a>
                                </div>
                                <div class="flex items-center justify-center w-72 h-16 bg-blue-800 text-white rounded-md">
                                    <a href="/amendment-form" class="text-sm text-white btn text-center">Amendment Form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row sm:flex-row space-x-0 sm:space-x-4 space-y-4 sm:space-y-0">
                <!-- Status of Appropriations -->
                <div class="flex flex-col max-w-2xl max-h-xl rounded-lg shadow border border-gray border-opacity-20 w-full">
                    <!-- Title -->
                    <div class="flex items-center ml-5 mt-5">
                        <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
                        <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Status of Appropriations</h1>
                    </div>
                    <h2 class="text-[15px] font-extrabold ml-[55px] text-cyan-800">Budget Call Documents</h2>
                    <!-- Donut Chart -->
                    <livewire:donut-chart />
                </div>
                <!-- Project Procurement Management Plan -->
                <div class="max-w-2xl max-h-xl rounded-lg shadow border border-gray border-opacity-20 w-full">
                    <div class="flex items-center ml-5 mt-5">
                        <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
                        <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Project Procurement Management Plan</h1>
                    </div>
                    <!-- NEED FUNCTIONALITY Column Chart -->
                    <h2 class="text-[15px] font-extrabold ml-[55px] text-cyan-800">Overall Budget</h2>
                </div>
                <!-- Calendar -->
                <div x-data="calendarData()" x-init="init()" class="relative flex flex-col items-center max-w-full md:w-[290px] md:max-w-xl rounded-lg shadow border border-gray border-opacity-20 w-full">
                    <div class="flex items-center">
                        <button @click="prevMonth" class="absolute left-3 top-3 flex items-center justify-center w-5 h-10 rounded-lg shadow border border-gray border-opacity-20 text-black font-bold py-4 px-4">&lt;</button>
                        <h1 x-text="currentMonth" class="text-[25px] font-bold mb-3 mt-3 mx-5">February</h1>
                        <button @click="nextMonth" class="absolute right-3 top-3 flex items-center justify-center w-5 h-10 rounded-lg shadow border border-gray border-opacity-20 text-black font-bold py-4 px-4">&gt;</button>
                    </div>
                    <!-- Calendar Table -->
                    <div class="flex w-[290px] h-[240px] ml-3 mt-5">
                        <table class="calendar-table pt-1">
                            <thead>
                                <tr>
                                    <template x-for="day in daysOfWeek" :key="day">
                                        <th x-text="day" class="px-1.5 py-1"></th>
                                    </template>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(week, index) in weeks" :key="index">
                                    <tr>
                                        <template x-for="(day, dayIndex) in week" :key="dayIndex">
                                            <td :class="{ 'bg-blue-700 rounded-full': day.highlighted }" class="px-2 py-0.5" style="text-align: center;" x-text="day.day"></td>
                                        </template>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>