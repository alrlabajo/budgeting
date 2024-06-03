<div class="px-6 py-32 flex flex-row">

    <!-- POST FORM START -->
    <form wire:submit="submit">

        <div>
            <!-- Left Column -->
            <div class="flex flex-col w-2/3 pr-4 space-y-4">

                <!-- Header -->
                <div class="text-black text-2xl font-medium font-['Inter'] leading-9 my-4">Budget Utilization Request</div>

                <!-- Entry -->
                <div class="flex items-center text-center space-x-2 w-56 bg-gray-200 text-gray-700 p-1 rounded-md shadow-md font-['Inter']">
                    <div class="bg-white w-24 text-black py-1 px-2 rounded-md" name="entry-count">Entry 1</div>
                        <button class="text-gray-700 whitespace-nowrap" onclick="addEntry()">+ New Entry</button>
                    </div>
                </div>
                    
                @csrf
                    @foreach ($items as $index => $item)
                    <!-- No. -->
                    <div class="w-40 h-16 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
                        <div class="space-y-2" action="#">
                            <div class="flex justify-center items-center flex-row">
                                <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal mr-2">No.</label>
                                <div class="flex">
                                    <input type="number" name="no" 
                                        wire:model="items.{{ $index }}.no"
                                        class="w-[80px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                        placeholder="0" />
                                    @error('items.' . $index . '.no')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Input Form Fields -->
                    <div class="flex flex-col space-y-5">

                        <div class="flex flex-row space-x-3">

                            <!-- Payee -->
                            <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
                                <div class="space-y-2" action="#">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Payee</label>
                                    <div class="flex-grow-0 flex-shrink-0">
                                        <input type="text" name="payee" 
                                            wire:model="items.{{ $index }}.payee"
                                            class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="Description" />
                                        @error('items.' . $index . '.payee')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Office -->
                            <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
                                <div class="space-y-2" action="#">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Office</label>
                                    <div class="flex-grow-0 flex-shrink-0">
                                        <input type="text" name="office" 
                                            wire:model="items.{{ $index }}.office"
                                            class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="Description" />
                                        @error('items.' . $index . '.office')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="w-[250px] h-24 px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
                                <div class="space-y-2" action="#">
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Address</label>
                                    <div class="flex-grow-0 flex-shrink-0">
                                        <input type="text" name="address" 
                                            wire:model="items.{{ $index }}.address"
                                            class="w-[200px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="Description" />
                                        @error('items.' . $index . '.address')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Third Row -->
                        <div class="w-[790px] h-[140px] px-5 py-3.5 bg-white rounded-xl shadow border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">

                            <div class="mt-2 space-y-2" action="#">

                                <div class="flex justify-center items-center flex-row">

                                    <!-- Responsibility Center -->
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Responsibility Center: </label>
                                    <div class="flex ml-2">
                                        <input type="text" name="responsibility_center" 
                                            wire:model="items.{{ $index }}.responsibility_center"
                                            class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="Description" />
                                        @error('items.' . $index . '.responsibility_center')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Account Code -->
                                    <label class="ml-4 text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Account Code: </label>
                                    <div class="flex ml-2">
                                        <input type="text" name="account_code" 
                                            wire:model="items.{{ $index }}.account_code"
                                            class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="Description" />
                                        @error('items.' . $index . '.account_code')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                        </div>

                                </div>

                            </div>

                            <div class="mt-5 space-y-2" action="#">

                                <div class="flex justify-center items-center flex-row">

                                    <!-- Particulars -->
                                    <label class="text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Particulars: </label>
                                    <div class="flex ml-[78px]">
                                        <input type="text" name="particulars" 
                                            wire:model="items.{{ $index }}.particulars"
                                            class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="Description" />
                                        @error('items.' . $index . '.particulars')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Amount -->
                                    <label class="ml-4 text-zinc-950 text-sm font-medium font-['Inter'] leading-normal">Amount: </label>
                                    <div class="flex ml-[52px]">
                                        <input type="number" step="0.01" name="amount" 
                                            wire:model="items.{{ $index }}.amount"
                                            class="w-[230px] h-8 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex focus:ring-blue-500 focus:border-blue-500 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" 
                                            placeholder="₱ 0.00" />
                                        @error('items.' . $index . '.amount')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                        </div>
                

                    </div>
                @endforeach    
            </div>

            <!-- Right Column -->
            <div class="flex flex-col w-2/4 py-40 place-content-center space-y-4 items-start">

                <!-- Buttons -->
                <button class="w-64 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    Upload Disbursement Voucher
                </button>

                <button class="w-80 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    Upload Certificate of Funds Availability
                </button>

                <button class="w-52 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    Upload Purchase Order
                </button>

                <button class="w-56 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    Upload Purchase Request
                </button>

                <button class="w-64 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    Upload Completed Staff Work
                </button>

                <!-- Submit button -->
                <div class="flex justify-between py-6">
                    <button wire:click.prevent="submit" name="submit-btn"
                        class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                    </button>
                </div>
                
            </div>
        </div>

    </form>

</div>
