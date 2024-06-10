<div>
    <x-slot name="title">Document Tracking</x-slot>
    <div class="p-6 sm:ml-64 space-y-6">
        <div class="px-2 py-2">
            <label class="flex flex-col text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Document Tracking</label>
            <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Documents</label>
        </div>

        <!--Activity Justification-->
        <div class="w-full h-1/2 p-7 bg-white rounded-lg shadow border border-zinc-300 space-y-5">
            <div class="flex flex-row justify-between space-x-2">
                <label class="text-indigo-800 text-xl font-extrabold font-['Inter'] leading-5">Activity Justification</label>
                <div class="flex flex-row space-x-2">
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 3.99992H14M12.6667 3.99992V13.3333C12.6667 13.9999 12 14.6666 11.3333 14.6666H4.66667C4 14.6666 3.33333 13.9999 3.33333 13.3333V3.99992M5.33333 3.99992V2.66659C5.33333 1.99992 6 1.33325 6.66667 1.33325H9.33333C10 1.33325 10.6667 1.99992 10.6667 2.66659V3.99992M6.66667 7.33325V11.3333M9.33333 7.33325V11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</div>
                    </button>
                    <button class="w-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Sort</div>
                    </button>
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2.66657 9.9326C2.17126 9.42654 1.79761 8.81441 1.57392 8.14256C1.35023 7.47071 1.28237 6.75676 1.37547 6.0548C1.46858 5.35284 1.7202 4.68127 2.1113 4.09096C2.50239 3.50064 3.02269 3.00708 3.63279 2.64763C4.24289 2.28819 4.92678 2.0723 5.63268 2.01632C6.33857 1.96033 7.04795 2.06572 7.70708 2.32451C8.36621 2.58329 8.9578 2.98867 9.43706 3.50996C9.91631 4.03124 10.2706 4.65475 10.4732 5.33327H11.6666C12.3102 5.33319 12.9369 5.54015 13.4539 5.92356C13.9709 6.30697 14.3509 6.84651 14.5377 7.46247C14.7246 8.07843 14.7084 8.73815 14.4915 9.34418C14.2746 9.95021 13.8685 10.4704 13.3332 10.8279M7.99984 7.99994V13.9999M7.99984 13.9999L5.33317 11.3333M7.99984 13.9999L10.6665 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Export</div>
                    </button>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                College/Office
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Officer-In-Charge
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Submitted
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Remarks
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                <button class="flex items-center justify-center w-4 h-4 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Personal Services-->
        <div class="w-full h-1/2 p-7 bg-white rounded-lg shadow border border-zinc-300 space-y-5">
            <div class="flex flex-row justify-between space-x-2">
                <label class="text-indigo-800 text-xl font-extrabold font-['Inter'] leading-5">Personal Services</label>
                <div class="flex flex-row space-x-2">
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 3.99992H14M12.6667 3.99992V13.3333C12.6667 13.9999 12 14.6666 11.3333 14.6666H4.66667C4 14.6666 3.33333 13.9999 3.33333 13.3333V3.99992M5.33333 3.99992V2.66659C5.33333 1.99992 6 1.33325 6.66667 1.33325H9.33333C10 1.33325 10.6667 1.99992 10.6667 2.66659V3.99992M6.66667 7.33325V11.3333M9.33333 7.33325V11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</div>
                    </button>
                    <button class="w-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Sort</div>
                    </button>
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2.66657 9.9326C2.17126 9.42654 1.79761 8.81441 1.57392 8.14256C1.35023 7.47071 1.28237 6.75676 1.37547 6.0548C1.46858 5.35284 1.7202 4.68127 2.1113 4.09096C2.50239 3.50064 3.02269 3.00708 3.63279 2.64763C4.24289 2.28819 4.92678 2.0723 5.63268 2.01632C6.33857 1.96033 7.04795 2.06572 7.70708 2.32451C8.36621 2.58329 8.9578 2.98867 9.43706 3.50996C9.91631 4.03124 10.2706 4.65475 10.4732 5.33327H11.6666C12.3102 5.33319 12.9369 5.54015 13.4539 5.92356C13.9709 6.30697 14.3509 6.84651 14.5377 7.46247C14.7246 8.07843 14.7084 8.73815 14.4915 9.34418C14.2746 9.95021 13.8685 10.4704 13.3332 10.8279M7.99984 7.99994V13.9999M7.99984 13.9999L5.33317 11.3333M7.99984 13.9999L10.6665 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Export</div>
                    </button>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                College/Office
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Officer-In-Charge
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Submitted
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Personal Services
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Remarks
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                <button class="flex items-center justify-center w-4 h-4 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Capital Outlay-->
        <div class="w-full h-1/2 p-7 bg-white rounded-lg shadow border border-zinc-300 space-y-5">
            <div class="flex flex-row justify-between space-x-2">
                <label class="text-indigo-800 text-xl font-extrabold font-['Inter'] leading-5">Capital Outlay</label>
                <div class="flex flex-row space-x-2">
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 3.99992H14M12.6667 3.99992V13.3333C12.6667 13.9999 12 14.6666 11.3333 14.6666H4.66667C4 14.6666 3.33333 13.9999 3.33333 13.3333V3.99992M5.33333 3.99992V2.66659C5.33333 1.99992 6 1.33325 6.66667 1.33325H9.33333C10 1.33325 10.6667 1.99992 10.6667 2.66659V3.99992M6.66667 7.33325V11.3333M9.33333 7.33325V11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</div>
                    </button>
                    <button class="w-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Sort</div>
                    </button>
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2.66657 9.9326C2.17126 9.42654 1.79761 8.81441 1.57392 8.14256C1.35023 7.47071 1.28237 6.75676 1.37547 6.0548C1.46858 5.35284 1.7202 4.68127 2.1113 4.09096C2.50239 3.50064 3.02269 3.00708 3.63279 2.64763C4.24289 2.28819 4.92678 2.0723 5.63268 2.01632C6.33857 1.96033 7.04795 2.06572 7.70708 2.32451C8.36621 2.58329 8.9578 2.98867 9.43706 3.50996C9.91631 4.03124 10.2706 4.65475 10.4732 5.33327H11.6666C12.3102 5.33319 12.9369 5.54015 13.4539 5.92356C13.9709 6.30697 14.3509 6.84651 14.5377 7.46247C14.7246 8.07843 14.7084 8.73815 14.4915 9.34418C14.2746 9.95021 13.8685 10.4704 13.3332 10.8279M7.99984 7.99994V13.9999M7.99984 13.9999L5.33317 11.3333M7.99984 13.9999L10.6665 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Export</div>
                    </button>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                College/Office
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Officer-In-Charge
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Submitted
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Capital Outlay
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Remarks
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                <button class="flex items-center justify-center w-4 h-4 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--MOOE-->
        <div class="w-full h-1/2 p-7 bg-white rounded-lg shadow border border-zinc-300 space-y-5">
            <div class="flex flex-row justify-between space-x-2">
                <label class="text-indigo-800 text-xl font-extrabold font-['Inter'] leading-5">MOOE</label>
                <div class="flex flex-row space-x-2">
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 3.99992H14M12.6667 3.99992V13.3333C12.6667 13.9999 12 14.6666 11.3333 14.6666H4.66667C4 14.6666 3.33333 13.9999 3.33333 13.3333V3.99992M5.33333 3.99992V2.66659C5.33333 1.99992 6 1.33325 6.66667 1.33325H9.33333C10 1.33325 10.6667 1.99992 10.6667 2.66659V3.99992M6.66667 7.33325V11.3333M9.33333 7.33325V11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</div>
                    </button>
                    <button class="w-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Sort</div>
                    </button>
                    <button class="w-24 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 flex">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2.66657 9.9326C2.17126 9.42654 1.79761 8.81441 1.57392 8.14256C1.35023 7.47071 1.28237 6.75676 1.37547 6.0548C1.46858 5.35284 1.7202 4.68127 2.1113 4.09096C2.50239 3.50064 3.02269 3.00708 3.63279 2.64763C4.24289 2.28819 4.92678 2.0723 5.63268 2.01632C6.33857 1.96033 7.04795 2.06572 7.70708 2.32451C8.36621 2.58329 8.9578 2.98867 9.43706 3.50996C9.91631 4.03124 10.2706 4.65475 10.4732 5.33327H11.6666C12.3102 5.33319 12.9369 5.54015 13.4539 5.92356C13.9709 6.30697 14.3509 6.84651 14.5377 7.46247C14.7246 8.07843 14.7084 8.73815 14.4915 9.34418C14.2746 9.95021 13.8685 10.4704 13.3332 10.8279M7.99984 7.99994V13.9999M7.99984 13.9999L5.33317 11.3333M7.99984 13.9999L10.6665 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Export</div>
                    </button>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                College/Office
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Officer-In-Charge
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Submitted
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total MOOE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Remarks
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            </th>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                Text
                            </td>
                            <td class="px-6 py-4">
                                <button class="flex items-center justify-center w-4 h-4 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>