<div class="px-6 py-32">
    <!-- Header -->
    <div class="w-96 h-9 justify-between items-center inline-flex py-10">
        <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Status of Appropriations, Allotments, and Obligations</label>
    </div>

    <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

        <div class="flex justify-between py-6">
            <input type="date" class="w-80 h-10 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="School Year">
            @include('components.status-dropdown')
        </div>

        <table class="min-w-full divide-y divide-gray-200 items-center">
            <thead>
                <tr>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Account Code</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Item of Expenditures</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Proposed Budget CY (Year)</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Approved Board Res.</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Total</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Obligations</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight">Unobligated Balance</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="items-center">
                    <td class="text-sm text-black border border-slate-300 px-2 py-3">Account Code</td>
                    <td class="text-sm text-black border border-slate-300 px-2 py-3">Item</td>
                    <td class="text-sm text-black border border-slate-300 ">
                        <input type="number" step="0.01" id="services-budget" class="px-2 py-3 form-input block w-full border border-transparent text-center" placeholder="₱ 00.00">
                    </td>
                    <td class="text-sm text-black border border-slate-300">
                    <input type="text" id="services-justification" class="px-2 py-3 form-input block w-full border border-transparent text-center" placeholder="Enter text">
                    </td>
                    <td class="text-sm text-black border border-slate-300">
                        <input type="number" step="0.01" id="services-budget" class="px-2 py-3 form-input block w-full border border-transparent text-center" placeholder="₱ 00.00">
                    </td>
                    <td class="text-sm text-black border border-slate-300">
                    <input type="text" id="services-justification" class="form-input block w-full border border-transparent text-center" placeholder="Enter text">
                    </td>
                    <td class="text-sm text-black border border-slate-300">
                        <input type="number" step="0.01" id="services-budget" class="form-input block w-full border border-transparent text-center" placeholder="₱ 00.00">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-black">Total Personal Services</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-gray-200 text-center">Total Value 1</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <div class="flex justify-between py-4">
            @include('components.back-button')
            @include('components.submit-button')
        </div>
    </div>
</div>
