<x-app-layout>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Capital Outlay
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Capital Outlay Form No. 4</label>
                    </div>
                </div>
                @include('components.export-button')
            </div>

            <div class="w-full h-full p-10 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <select wire:model.live="college" id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                    <option value="">Select College/Office</option>
                    {{-- <option value="CISTM">CISTM</option>
            <option value="CEng">CEng</option> --}}

                    @foreach ($college_office as $college)
                    <option value={{$college}}>{{$college}}</option>
                    @endforeach
                </select>


                <table class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year</th>
                            <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Account Code</th>
                            <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item of Expenditures</th>
                            <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Approved Budget</th>
                            <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Justification</th>
                            <th scope="col" class="relative p-7 border border-slate-300">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($capitalOutlay as $capital_outlay)
                        <tr class="items-center">
                            <td class="py-4 text-sm text-black border border-slate-300">{{$capital_outlay->created_at}}</td>
                            <td class="py-4 text-sm text-black border border-slate-300">{{$capital_outlay->account_code}}</td>
                            <td class="py-4 text-sm text-black border border-slate-300">{{$capital_outlay->item}}</td>
                            <td class="py-4 text-sm text-black border border-slate-300">{{$capital_outlay->budget}}</td>
                            <td class="py-4 text-sm text-black border border-slate-300">{{$capital_outlay->justification}}</td>
                            <!-- Edit/Delete -->
                            <div class="flex flex-col items-center gap-y-2 px-2">
                                @include('components.edit-delete')
                            </div>
                            @endforeach
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="px-6 py-4 whitespace-nowrap border border-slate-300 text-center text-sm font-semibold text-black">Total Capital Outlay</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center">Total Value 1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center"></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-b border-r border-slate-300 text-center"></td>
                        </tr>
                    </tfoot>

                </table>
                <button wire:click="goBack" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Back</button>
            </div>
        </div>
    </div>
</x-app-layout>