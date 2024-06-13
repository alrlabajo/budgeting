<x-slot name="title">Personnel Schedule</x-slot>
    <div class="p-2 sm:ml-64">
        <div class="px-2 py-5">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personnel Schedule
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personnel Schedule Form No. 4</label>
                    </div>
                </div>
                @include('components.capital-outlay-export')
            </div>

            <div class="w-full h-full overflow-x-auto p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
                <table id="personnel-schedule-table" class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">College/ Office</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item No.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Grade-Step</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Position (Chief by Designation)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Name of Incumbent</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">CY (Year) Current Year Annual salary/Annum</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">CY (Year) Budget Year Proposed salary/Annum</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Personal Increase</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Sub-Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Status</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Action</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_personnelschedule as $index => $personnelschedule)
                        <tr class="items-center">
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ \Carbon\Carbon::parse($personnelschedule['created_at'])->format('Y') }} - {{ \Carbon\Carbon::parse($personnelschedule['created_at'])->addYear()->format('Y') }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule['college_office'] }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['item_no']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.item_no" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['grade_step']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.grade_step" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['position']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.position" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['name_incumbent']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.name_incumbent" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['annual_salary']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.annual_salary" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['proposed_salary']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.proposed_salary" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['increase']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.increase" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['total']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.total" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $personnelschedule['sub_total']}}
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.sub_total" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{-- {{ $personnelschedule['sub_total']}} --}}
                                    <span class="inline bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Approved</span>
                                @else
                                    <input type="text" wire:model="load_personnelschedule.{{ $index }}.sub_total" class="w-full px-2 py-1 text-sm text-black border border-slate-300 rounded-md" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td>


                               {{-- add logic to see if it works --}}
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
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
                                                {{-- <x-dropdown-link wire:navigate href="/capital-outlay/{{$capital_outlay->capital_outlay_id}}/edit">Edit</x-dropdown-link> --}}
                                                @if($editedBudgetIndex !== $index)
                                                    <x-dropdown-link wire:click.prevent="editBudget({{ $index }})">Edit</x-dropdown-link>

                                                    <x-dropdown-link wire:click.prevent="deleteCapitalOutlay({{ $personnelschedule['personnelsched_id'] }})">Delete</x-dropdown-link>
                                                @else
                                                    <x-dropdown-link wire:click.prevent="saveBudget({{ $index }})" wire:key="{{ $index }}">Save</x-dropdown-link>
                                                    {{-- <x-dropdown-link wire:click="deleteCapitalOutlay({{ $budget}})">Delete</x-dropdown-link> --}}
                                                @endif
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </div>

                            </td> <!--Edit/Delete-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
