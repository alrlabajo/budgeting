<x-app-layout>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="w-96 h-9 justify-between items-center inline-flex py-10">
                <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Status of Appropriations, Allotments, and Obligations Document</label>
            </div>

            <!-- POST FORM START -->
            <form wire:submit.prevent="submit"> <!-- Changed here -->

                <!-- Container -->
                <div class="w-full h-full px-6 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                    <!-- Top Part of Container -->
                    <div class="flex justify-between py-6">

                        <div class="flex flex-col space-y-3">

                            <!-- Select College/Office -->
                            <div class="w-80 rounded-lg">
                                <select wire:model="college_office" id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                                    <option>Select College/Office</option>
                                    @foreach(['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'] as $office)
                                        <option value="{{ $office }}">{{ $office }}</option>
                                    @endforeach
                                </select>
                                @error('college_office')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <input type="date" class="w-80 h-10 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="School Year" wire:model="school_year">
                            @error('school_year')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    @csrf
                    <table id="appropriations-table" class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <!-- Header -->
                        <thead class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal gap-y-12">
                            <tr>
                                <th scope="col" class="px-6 py-3">Account Code</th>
                                <th scope="col" class="pr-6 py-3">Item of Expenditures</th>
                                <th scope="col" class="px-6 py-3">Proposed Budget CY (Year)</th>
                                <th scope="col" class="px-6 py-3">Approved Board Res.</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                <th scope="col" class="px-6 py-3">Obligations</th>
                                <th scope="col" class="px-6 py-3">Unobligated Balance</th>
                            </tr>
                        </thead>

                        <!-- Body -->
                        <tbody id="appropriations-tbody">
                            @foreach ($items as $index => $item)
                            <tr class="gap-2">

                                <td class="px-6 py-2">
                                    <input type="text" name="account_code" wire:model="items.{{ $index }}.account_code" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                                    @error('items.' . $index . '.account_code')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                                <td class="px-6 py-2">
                                    <input type="text" name="items_expenditure" wire:model="items.{{ $index }}.items_expenditure" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                                    @error('items.' . $index . '.items_expenditure')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                                <td class="px-6 py-2">
                                    <input type="number" step="0.01" name="budget" wire:model="items.{{ $index }}.budget" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                                    @error('items.' . $index . '.budget')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                                <td class="px-6 py-2">
                                    <input type="text" name="approved_board" wire:model="items.{{ $index }}.approved_board" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
                                    @error('items.' . $index . '.approved_board')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                                <td class="px-6 py-2">
                                    <input type="number" step="0.01" name="total" wire:model="items.{{ $index }}.total" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                                    @error('items.' . $index . '.total')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                                <td class="px-6 py-2">
                                    <input type="number" step="0.01" name="obligations" wire:model="items.{{ $index }}.obligations" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                                    @error('items.' . $index . '.obligations')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                                <td class="px-6 py-2">
                                    <input type="number" step="0.01" name="unobligated" wire:model="items.{{ $index }}.unobligated" class="w-20 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                                    @error('items.' . $index . '.unobligated')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror                                
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Bottom Buttons -->
                    <div class="flex justify-between py-6">
                        @include('components.back-button')
                        <button type="submit" name="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
