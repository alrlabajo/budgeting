<div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Amendment
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Payment Request Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Amendment Form No. 2</label>
                    </div>
                </div>
                @include('components.amendment-button')
            </div>

            <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
                <table id="amendment-table" class="min-w-full divide-y divide-gray-200 border border-slate-300 items-center">
                    <thead>
                        <tr class="items-center">
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amendatory No.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Plan No. Being Revised</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Date of Revision</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Planned Amount</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Date Submitted</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item No.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Description</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Unit</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Quantity (Replace/Substitute)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Unit Price</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amount</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Quantity (Affected)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amount (Affected)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Justification</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_amendment as $amendment)
                        <tr>
                            <td class="px-2 py-3 whitespace-nowrap text-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->No}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->plan_no_revised}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->date_revision}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->planned_amount}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->date_submission}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->item_No}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->description}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->quantity}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->unit}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->unit_cost}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->amount}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->procurement_quantity}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->procurement_amount}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $amendment->procurement_justification}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td> <!--Edit/Delete-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

