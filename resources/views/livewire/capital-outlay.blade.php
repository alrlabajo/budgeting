
    <x-slot name="title">Capital Outlay</x-slot>

    <div class="p-2 sm:ml-64">
        <div class="px-2 py-5">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Capital Outlay
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Capital Outlay Form No. 4</label>
                    </div>
                </div>
                @include('components.capital-outlay-export')
            </div>
            <div>

            </div>
            <div class="w-full h-full p-10 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
                {{-- <select wire:model.live="college" id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                    <option value="">Select College/Office</option>
                    @foreach ($college_office as $college)
                        <option value="{{ $college }}">{{ $college }}</option>
                    @endforeach
                </select> --}}

                <table id="capital-outlay-table" class="min-w-full divide-y divide-gray-200 items-center">
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
                        @foreach ($capitalOutlay as $capital_outlay)
                        <form wire:submit="updateCapitalOutlay">
                            @csrf
                            <tr class="items-center">
                                <td class="px-2 py-1 text-sm text-black border border-slate-300 whitespace-wrap">{{ $capital_outlay->created_at->format('Y') }} - {{ $capital_outlay->created_at->addYear()->format('Y') }}</td>
                                <td class="px-2 py-1 text-sm text-black border border-slate-300 whitespace-wrap">{{ $capital_outlay->account_code }}</td>
                                <td class="px-2 py-1 text-sm text-black border border-slate-300 whitespace-wrap">{{ $capital_outlay->item }}</td>
                                <td class="px-2 py-1 text-sm text-black border border-slate-300 whitespace-wrap">
                                    {{-- {{ number_format($capital_outlay->budget,2) }} --}}
                                    <input type="text" wire:model="budget"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5" />
                                </td>
                                <td class="px-2 py-1 text-sm text-black border border-slate-300 whitespace-wrap">{{ $capital_outlay->justification }}</td>
                                <td class="px-2 py-1 text-sm text-black border border-slate-300 whitespace-wrap">
                                    <!-- Edit/Delete -->
                                    <div class="flex flex-col items-center gap-y-2 px-2">
                                        <div class="flex flex-col items-center gap-y-2 px-2">
                                            <x-dropdown>
                                                <x-slot name="trigger">
                                                    <button class="flex items-center justify-center w-8 h-8 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                                        </svg>
                                                    </button>
                                                </x-slot>
                                                <x-slot name="content">
                                                    <x-dropdown-link wire:navigate href="/capital-outlay/{{$capital_outlay->capital_outlay_id}}/edit">Edit</x-dropdown-link>
                                                    <x-dropdown-link wire:click="deleteCapitalOutlay({{ $capital_outlay}})">Delete</x-dropdown-link>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="px-6 py-4 whitespace-nowrap border border-slate-300 text-center text-sm font-semibold text-black">Total Capital Outlay</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center">₱ {{ $totalExpenses }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center"></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-r border-y border-slate-300 text-center"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

