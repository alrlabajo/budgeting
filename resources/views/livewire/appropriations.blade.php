<x-slot name="title">Status of Appropriations, Allotments, and Obligations</x-slot>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Status of Appropriations, Allotments, and Obligations
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Appropriations ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Status of Appropriations, Allotments, and Obligations</label>
                    </div>
                </div>
                @include('components.appropriations-buttons')
            </div>

            <div class="w-full h-full px-4 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <div class="flex justify-between py-6">
                    <input type="date" class="w-80 h-10 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="School Year">
                    @include('components.status-dropdown')
                </div>

                <table id="appropriations-table" class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item of Expenditures</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Proposed Budget CY (Year)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Approved Board Res.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Obligations</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Unobligated Balance</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_appropriations as $appropriations)
                        <tr>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->created_at}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->account_code}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->items_expenditure}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->budget}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->approved_board}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->total}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->obligations}}</td>
                            <td class="text-sm text-black border border-slate-300 px-2 py-3">{{ $appropriations->unobligated}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
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
    </div>

