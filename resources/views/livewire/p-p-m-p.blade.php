<x-slot name="title">Project Procurement Management Plan</x-slot>
<div class="p-2 sm:ml-64">
    <div class="px-2 py-5">
        <!-- Header -->
        <div class="flex w-full pb-5 justify-between">
            <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Project Procurement Management Plan
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Project Procurement Management Plan No. </label>
                </div>
            </div>
            @include('components.capital-outlay-export')
        </div>

        <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
            <table id="ppmp-table" class="min-w-full divide-y divide-gray-200 items-center overflow-y-auto">
                <thead>
                    <tr>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Class Year</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Program Title</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Account Title</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Account Code</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Item/Name</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Description </th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Qty</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Unit of Issue</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Unit Price</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Estimated Budget</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Procurement Method</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight whitespace-nowrap" colspan="12">Delivery/Implementation Schedule</th>
                        <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300" rowspan="2"></th>

                    </tr>
                    <tr>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">J</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">F</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">M</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">A</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">M</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">J</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">J</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">A</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">S</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">O</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">N</th>
                        <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">D</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($load_ppmp as $index => $info)
                        <tr class="items-center">
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ \Carbon\Carbon::parse($info['created_at'])->format('Y') }} - {{ \Carbon\Carbon::parse($info['created_at'])->addYear()->format('Y') }}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                {{ $info['program_title'] }} - {{ $info['project_title'] }} - {{ $info['type_contract'] }}
                                @else
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Edit Program Title: </label>
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.program_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                <br><label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Edit Project Title: </label>
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.project_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                <br><label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Edit Contract Type: </label>
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.type_contract" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['account_title'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.account_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['account_code'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.account_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['item_name'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.item_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['description'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['quantity'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['unit_issue'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.unit_issue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ number_format($info['unit_price'],2) }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.unit_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ number_format($info['estimated_budget'],2) }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.estimated_budget" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['procurement_method'] }}
                                @else
                                    <input type="text" wire:model="load_ppmp.{{ $index }}.procurement_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5" />
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Jan'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Jan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Jan'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Jan'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Feb'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Feb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Feb'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Feb'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Mar'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Mar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Mar'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Mar'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Apr'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Apr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Apr'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Apr'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['May'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.May" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['May'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['May'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Jun'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Jun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Jun'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Jun'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Jul'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Jul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Jul'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Jul'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Aug'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Aug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Aug'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Aug'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Sep'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Sep" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Sep'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Sep'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Oct'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Oct" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Oct'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Oct'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-4 text-sm font-medium border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Nov'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Nov" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Nov'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Nov'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-4 text-sm font-medium border border-slate-300">
                                @if($editedBudgetIndex !== $index)
                                    {{ $info['Dec'] == 1 ? '✓' : 'x' }}
                                @else
                                    <select wire:model="load_ppmp.{{ $index }}.Dec" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5">
                                        <option value="1" {{ $info['Dec'] == 1 ? 'selected' : '' }}>✓</option>
                                        <option value="0" {{ $info['Dec'] == 0 ? 'selected' : '' }}>x</option>
                                    </select>
                                @endif
                            </td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">
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
                                                {{-- <x-dropdown-link wire:navigate href="/capital-outlay/{{$capital_outlay->capital_outlay_id}}/edit">Edit</x-dropdown-link> --}}
                                                @if($editedBudgetIndex !== $index)
                                                    <x-dropdown-link wire:click.prevent="editBudget({{ $index }})">Edit</x-dropdown-link>

                                                    <x-dropdown-link wire:click.prevent="deleteCapitalOutlay({{ $info['ppmp_id'] }})">Delete</x-dropdown-link>
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
