<div class="flex flex-col grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">
    <!-- Top Bar -->
    <div class="flex w-[1420px]">
        <div class="w-[1420px] rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0 h-[1px] bg-gray-200"></div>
            <div class="flex flex-col gap-y-1.5 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Budget Utilization Request
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Payment Request ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Budget Utilization Request Form No.</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('components.bur-import-export-add')
                </div>
            </div>
        </div>
    </div>

    <div class="h-[480px] py-10 rounded-lg mt-[-10px] mr-4">
        <table class="min-w-full divide-y divide-gray-200 border border-slate-300 items-center">
            <thead>
                <tr>
                    <th class="px-1 py-3 whitespace-nowrap text-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                    </th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Date</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">BUR No.</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Payee</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Office</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Address</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Responsibility Center</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Particulars</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amount</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Status</th>
                    <th scope="col" class="relative p-7 text-center">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="items-center">
                    <td class="px-2 py-3 whitespace-nowrap text-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                    </td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-center text-sm font-medium">
                        <!-- Edit/Delete -->
                        <div class="flex flex-col items-start gap-y-2 px-2">
                            @include('components.edit-modal')
                            @include('components.delete-modal')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-2 py-3 whitespace-nowrap text-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                    </td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>    
                    <td class="px-2 py-4 text-sm text-black border border-slate-300"></td>   
                    <td class="px-2 py-4 text-right text-sm font-medium">
                        <!-- Edit/Delete -->
                        <div class="flex flex-col items-start gap-y-2 px-2">
                            @include('components.edit-modal')
                            @include('components.delete-modal')
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
