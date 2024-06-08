<x-slot name="title">Personal Services</x-slot>
    <div class="p-2 sm:ml-64">
        <div class="px-2 py-5">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personal Services
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personal Services Form No. 2</label>
                    </div>
                </div>
                @include('components.personal-services-export')
            </div>

            <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <table id="personal-services-table" class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item of Expenditures</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Approved Budget</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Justification</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_personalservices as $personalservices)
                        <tr class="items-center">
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personalservices->created_at}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personalservices->account_code}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personalservices->item}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personalservices->budget}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personalservices->justification}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td> <!--Edit/Delete-->
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="px-6 py-4 whitespace-nowrap border border-slate-300 text-center text-sm font-semibold text-black">Total Personal Services</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center">Total Value 1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center"></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-r border-y border-slate-300 text-center"></td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>

