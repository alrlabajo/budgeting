<div class="flex flex-col grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">
    <!-- Top Bar -->
    <div class="flex w-[1420px]">
        <div class="w-[1420px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-1.5 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Amendment
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Payment Request ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Amendment Form No.</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('components.amendment-import-export-add')
                </div>
            </div>
        </div>
    </div>

    <div class="h-[480px] py-10 rounded-lg mt-[-10px] mr-4">
        <table class="min-w-full divide-y divide-gray-200 border border-slate-300 items-center">
            <thead>
                <tr>
                    <td class="px-2 py-3 whitespace-nowrap">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    </td>
                    <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amendatory No.</th>
                    <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Plan No. Being Revised</th>
                    <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Date of Revision</th>
                    <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Planned Ammount</th>
                    <th scope="col" class="relative px-2 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-2 py-3 whitespace-nowrap">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    </td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-right text-sm font-medium">
                        <!-- Dropdown -->
                        <div class="relative" x-data="{ open: false }">
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
                                            @include('components.edit-modal')
                                        </div>
                                    </li>
                                    <li class="hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">
                                        <div class="w-24 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex">
                                            <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
                                                @include('components.delete-modal')
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</div>
