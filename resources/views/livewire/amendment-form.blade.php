
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="text-black text-2xl font-medium font-['Inter'] leading-9 pb-5">Amendment</div>

            <!-- POST FORM START -->
            <form wire:submit="submit">

                <!-- Top Section -->
                <div class="flex flex-col space-y-6 bg-white rounded-lg shadow border border-zinc-300 px-4 py-9">

                    <div class="flex items-center text-center space-x-2 w-56 bg-gray-200 text-gray-700 p-1 rounded-md shadow-md font-['Inter']">
                        <div class="bg-white w-24 text-black py-1 px-2 rounded-md" name="entry-count">Entry 1</div>
                        <button class="text-gray-700 whitespace-nowrap" onclick="addEntry()">+ New Entry</button>
                    </div>

                    <!-- Select College/Office -->
                    <div class="w-80 rounded-lg">
                        <select wire:model="college_office" id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                            <option>Select College/Office</option>
                            <option value="CISTM">CISTM</option>
                            <option value="College 2">College 2</option>
                            <!-- Other options -->
                        </select>
                        @error('college_office')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input Fields -->
                    @csrf
                    @foreach ($items as $index => $item)

                    <!-- 1st Input Fields/Container -->
                    <div class="flex flex-col sm:flex-row sm:gap-x-6 sm:my-10">

                        <!-- No. -->
                        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col m-4 gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal mr-2">No.</label>
                                    <div class="flex">
                                        <input type="number" name="No" wire:model="items.{{ $index }}.No" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                                        @error('items.' . $index . '.No')
                                        <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Plan No. being revised -->
                        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col m-4 gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Plan No. being revised:</label>
                                    <input type="number" name="plan_no_revised" wire:model="items.{{ $index }}.plan_no_revised" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                                    @error('items.' . $index . '.plan_no_revised')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Date of Revision: -->
                        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col m-4 gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Date of Revision:</label>
                                    <input type="date" name="date_revision" wire:model="items.{{ $index }}.date_revision" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" />
                                    @error('items.' . $index . '.date_revision')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Planned Amount -->
                        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col m-4 gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Planned Amount</label>
                                    <input type="number" step="0.01" name="planned_amount" wire:model="items.{{ $index }}.planned_amount" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                                    @error('items.' . $index . '.planned_amount')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Date Submitted: -->
                        <div class="w-full sm:w-52 h-24 relative bg-white rounded-xl shadow border border-zinc-200 content-center justify-start">
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col m-4 gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Date Submitted:</label>
                                    <input type="date" name="date_submission" wire:model="items.{{ $index }}.date_submission" class="w-full h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" />
                                    @error('items.' . $index . '.date_submission')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- 2nd Input Fields/Container -->
                    <div class="text-black text-base font-medium font-['Inter'] leading-9">Items to be Substituted/Replaced</div>

                    <!-- 2nd Container -->
                    <div class="w-full h-80 px-8 py-3 bg-white rounded-xl shadow border border-zinc-200 content-center justify-start space-y-5">
                        <div class="flex flex-row gap-x-6">

                            <!-- Item No. -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Item No.:</label>
                                    <input type="number" name="item_No" wire:model="items.{{ $index }}.item_No" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                                    @error('items.' . $index . '.item_No')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Description: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Description:</label>
                                    <input type="text" name="description" wire:model="items.{{ $index }}.description" class="w-96 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                                    @error('items.' . $index . '.description')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Quantity: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity:</label>
                                    <input type="number" name="quantity" wire:model="items.{{ $index }}.quantity" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                                    @error('items.' . $index . '.quantity')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Unit: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit:</label>
                                    <input type="text" name="unit" wire:model="items.{{ $index }}.unit" class="w-72 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                                    @error('items.' . $index . '.unit')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Unit Cost: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Unit Cost:</label>
                                    <input type="number" step="0.01" name="unit_cost" wire:model="items.{{ $index }}.unit_cost" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                                    @error('items.' . $index . '.unit_cost')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Amount: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Amount:</label>
                                    <input type="number" step="0.01" name="amount" wire:model="items.{{ $index }}.amount" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                                    @error('items.' . $index . '.amount')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Subheading: Procurement Already Effected -->
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Procurement Already Effected</div>

                        <div class="flex flex-row gap-x-6">

                            <!-- Quantity: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Quantity:</label>
                                    <input type="number" name="procurement_quantity" wire:model="items.{{ $index }}.procurement_quantity" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="0" />
                                    @error('items.' . $index . '.procurement_quantity')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Amount: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Amount:</label>
                                    <input type="number" step="0.01" name="procurement_amount" wire:model="items.{{ $index }}.procurement_amount" class="w-20 h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="₱ 0.00" />
                                    @error('items.' . $index . '.procurement_amount')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Justification: -->
                            <div class="space-y-2" action="#">
                                <div class="flex flex-col gap-y-3">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Justification:</label>
                                    <input type="text" name="procurement_justification" wire:model="items.{{ $index }}.procurement_justification" class="w-[905px] h-8 px-2 py-1.5 bg-white rounded-md shadow border border-zinc-200 focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight gap-1.5" placeholder="Description" />
                                    @error('items.' . $index . '.procurement_justification')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <!-- Add another data -->
                        <button class="w-44 h-9 px-4 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3.33301 8.00065H12.6663M7.99967 3.33398V12.6673" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Add another data</span>
                        </button>

                    </div>

                    @endforeach

                    <!-- Submit button -->
                    <div class="flex justify-between py-6">
                        @include('components.back-button')
                        <button wire:click.prevent="submit" name="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                        </button>
                    </div>

                </div>




            </form>
        </div>
    </div>
