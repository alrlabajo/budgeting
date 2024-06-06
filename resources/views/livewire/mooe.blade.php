<x-slot name="title">Maintenance and Other Operating Expenses</x-slot>

<div class="p-2 sm:ml-64">
    <div class="p-2">
        <!-- Header -->
        <div class="flex w-full pb-5 justify-between">
            <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Maintenance and Other Operating Expenses
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Maintenance and Other Operating Expenses Form No. 3</label>
                </div>
            </div>
            @include('components.mooe-export')
        </div>

        <div class="w-full h-full p-10 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
            <select wire:model.live="college" id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option disabled selected>Select College/Office</option>
                @foreach ($college_office as $college)
                    <option value="{{ $college }}">{{ $college }}</option>
                @endforeach
            </select>

            <table id="mooe-table" class="min-w-full divide-y divide-gray-200 items-center">
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
                    <form wire::></form>
                    @foreach ($load_mooe as $mooe)
                        <tr class="items-center">
                            <td class="px-2 py-3 text-sm text-black border border-slate-300 whitespace-wrap">{{ $mooe->created_at }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300 whitespace-wrap">{{ $mooe->account_code }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300 whitespace-wrap">{{ $mooe->item }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300 whitespace-wrap">₱ {{ number_format($mooe->budget,2) }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300 whitespace-wrap">{{ $mooe->justification }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300 whitespace-wrap">
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
                                                <x-dropdown-link wire:navigate href="/MOOE/{{$mooe->mooe_id}}/edit">Edit</x-dropdown-link>
                                                <x-dropdown-link wire:click="deleteMooe({{ $mooe}})">Delete</x-dropdown-link>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap border border-slate-300 text-center text-sm font-semibold text-black">Total Maintenance and Other Operating Expenses</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-y border-slate-300 text-center"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-t border-b border-r border-slate-300 text-center"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
