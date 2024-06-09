
    <div class="p-2 sm:ml-64">
        <div class="px-2 py-5">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Budget Utilization Request
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Payment Request Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Budget Utilization Request Form No. 1</label>
                    </div>
                </div>
                @include('components.bur-button')
            </div>

            <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <table id="bur-table" class="min-w-full divide-y divide-gray-200 border border-slate-300">

                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">BUR No.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Payee</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Office</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Address</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Responsibility Center</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Particulars</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amount</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Status</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Action</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_bur as $bur)
                        <tr>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->no}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->payee}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->office}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->address}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->responsibility_center}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->account_code}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->particulars}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $bur->amount}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td> <!--Edit/Delete-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

