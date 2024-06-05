
    <div class="p-2 sm:ml-64">
        <div class="p-2 space-y-4">
            <!-- Header -->
            <div class="w-96 h-9 justify-between items-center inline-flex py-10">
                <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Activity Justification Document</label>
            </div>

            <!-- POST FORM START -->
            <form wire:submit="submit">

                <!-- Container -->
                <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                    <div class="flex justify-between py-6">
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
                        @include('components.import-button')
                    </div>


                    <!-- Input Fields -->
                    @csrf
                    @foreach ($items as $index => $item)
                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal py-3">Statement of Objectives</label>

                    <!-- Statement Major -->
                    <div class="justify-start items-start space-y-3">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Major</label>
                        <textarea type="text" name="statement_major" wire:model="items.{{ $index }}.statement_major" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
                        @error('items.' . $index . '.statement_major')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Statement Specific -->
                    <div class="justify-start items-start space-y-3">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Specific</label>
                        <textarea type="text" name="statement_specific" wire:model="items.{{ $index }}.statement_specific" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
                        @error('items.' . $index . '.statement_specific')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Activity/Justification -->
                    <div class="justify-start items-start space-y-3">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Activity/Justification</label>
                        <textarea type="text" name="activity_justification" wire:model="items.{{ $index }}.activity_justification" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
                        @error('items.' . $index . '.activity_justification')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Cost per Student</label>

                    <div class="flex flex-row space-x-10">
                        <!-- Estimated Number of Students -->
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Estimated Number of Students</label>
                            <input type="number" name="estimated_no_students" wire:model="items.{{ $index }}.estimated_no_students" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            @error('items.' . $index . '.estimated_no_students')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>

                        <!-- Total Cost (excluding Capital Outlay) -->
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Total Cost (excluding Capital Outlay)</label>
                            <input type="number" step="0.01" name="total_cost" wire:model="items.{{ $index }}.total_cost" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            @error('items.' . $index . '.total_cost')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <!-- Cost per Student -->
                    <form class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Cost per Student</label>
                        <input type="number" step="0.01" name="cost_per_student" wire:model="items.{{ $index }}.cost_per_student" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.cost_per_student')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </form>

                    <!-- Method of Accomplishing Objectives -->
                    <div class="justify-start items-start space-y-3">
                        <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal required">Method of Accomplishing Objectives</label>
                        <textarea type="text" name="method_accomplishing" wire:model="items.{{ $index }}.method_accomplishing" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
                        @error('items.' . $index . '.method_accomplishing')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Item of Expenditures - Proposed Budget</label>

                    <div class="flex flex-row space-x-24">

                        <!-- Personal Services (Total of div No. 2) -->
                        <div class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Personal Services (Total of div No. 2)</label>
                            <input type="number" name="services_budget" wire:model="items.{{ $index }}.services_budget" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            @error('items.' . $index . '.services_budget')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- MOOE (Total of div No. 3) -->
                        <div class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">MOOE (Total of div No. 3)</label>
                            <input type="number" step="0.01" name="mooe_budget" wire:model="items.{{ $index }}.mooe_budget" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            @error('items.' . $index . '.mooe_budget')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Capital/Equipment Outlay (PPMP) -->
                        <div class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Capital/Equipment Outlay (PPMP)</label>
                            <input type="number" step="0.01" name="capital_outlay_budget" wire:model="items.{{ $index }}.capital_outlay_budget" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            @error('items.' . $index . '.capital_outlay_budget')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Total -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Total</label>
                        <input type="number" step="0.01" name="total" wire:model="items.{{ $index }}.total" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.total')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    @endforeach

                    <!-- Bottom Buttons -->
                    <div class="flex justify-between py-6">
                        @include('components.back-button')
                        <button wire:click.prevent="submit" name="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

