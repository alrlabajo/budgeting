<div class="flex flex-col grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">
    <!-- Top Bar -->
    <div class="flex w-[1420px]">
        <div class="w-[1420px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-1.5 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personnel Schedule
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personnel Schedule Form No.</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('components\layouts.schedule-buttons')
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="w-[1420px] h-[620px] font-['Inter'] rounded-lg border border-gray-300 flex flex-col overflow-auto">

        <!-- SY & College -->
        <div class="py-4 px-3 rounded-lg space-y-2 justify-items-start">
            <div class="justify-start items-center gap-0.5 flex">
                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">School Year 2023</div>
            </div>

            <select id="college_office" name="college_office" class="block w-56 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                <option disabled selected>Select College/Office</option>
                <option value="College 1">College 1</option>
                <option value="College 2">College 2</option>
                <option value="">...</option>
            </select>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto px-3">
            <table id="myTable" class="min-w-full divide-y divide-gray-200 border border-slate-300">
                <thead>
                    <tr>
                        <th class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                        </th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item No.</th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Grade Step</th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Position Chief (By Designation)</th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Name of Incumbent</th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year 2023 (Current Year) Actual Salary/Annum</th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year 2025 (Budget Year) Proposed Salary/Annum</th>
                        <th scope="col" class="px-6 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Increase</th>
                        <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Item No.</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Grade Step Value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Position Chief Value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Name of Incumbent Value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Actual Salary/Annum Value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Proposed Salary/Annum Value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-black border border-slate-300">Increase Value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <!-- Dropdown -->
                            <div class="relative z-50" x-data="{ open: false }">
                                <button @click="open = true" id="dropdownMenuIconButton" class="inline-flex items-center text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-200 dark:focus:ring-gray-200" type="button">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>
                                </button>
                                <!-- Menu -->
                                <div class="absolute right-0 mt-2 bg-white divide-y divide-gray-800 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600 z-10" x-show="open" @click.away="open = false">
                                    <ul class="py-2 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                        <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                            <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex z-50">
                                                @include('components\layouts.edit-modal')
                                            </div>
                                        </li>
                                        <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                            <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                                <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                    @include('components\layouts.delete-modal')
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-right font-semibold text-black items-center">Subtotal</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200"></td>
                        <td class="border-t border-gray-200"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-right font-semibold text-black items-center">Total</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200"></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>



</div>
