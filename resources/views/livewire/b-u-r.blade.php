<div class="flex-col grid grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">

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

    <div class="w-full h-full overflow-x-auto py-2 space-y-4">

        <table class="min-w-full divide-y divide-gray-200 border border-slate-300">

            <thead>
                <tr>
                    <th class="px-1 py-3 whitespace-nowrap text-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                    </th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">BUR No.</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Payee</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Office</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Address</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Responsibility Center</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Particulars</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amount</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Status</th>
                    <th scope="col" class="relative p-7 border border-slate-300">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($load_bur as $bur)
                <tr>
                    <td class="px-2 py-3 whitespace-nowrap text-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                    </td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->no}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->payee}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->office}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->address}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->responsibility_center}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->account_code}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->particulars}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300">{{ $bur->amount}}</td>
                    <td class="py-4 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm font-medium border border-slate-300">
                        <!-- Edit/Delete -->
                        <div class="flex flex-col items-center gap-y-2 px-2">
                            @include('components.editdelete-button')
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>