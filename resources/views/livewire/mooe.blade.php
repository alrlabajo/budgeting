<div class="px-6 py-32">
    <!-- Header -->
    <div class="flex w-full">
        <div class="w-full rounded-lg p-4 relative">
            <div class="absolute shadow inset-x-0 bottom-0"></div>
            <div class="flex flex-col gap-y-1.5 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Maintenance and Other Operating Expenses
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Maintenance and Other Operating Expenses Form No. 2</label>
                </div>
                <div class="flex ml-[835px] mt-[-50px] items-start">
                    @include('components.export-button')
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

        <select id="college_office" name="college_office" class="block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
            <option disabled selected>Select College/Office</option>
            <option value="College 1">College 1</option>
            <option value="College 2">College 2</option>
            <option value="">...</option>
        </select>

        <table class="min-w-full divide-y divide-gray-200 items-center">
            <thead>
                <tr>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Class Year</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Account Code</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Item of Expenditures</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Approved Budget</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Justification</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="items-center">
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
