<x-slot name="title">Personnel Schedule Form</x-slot>
<div class="p-2 sm:ml-64">
    <div class="p-2">
        <!-- Header -->
        <div class="w-96 h-9 justify-between items-center inline-flex py-10">
            <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Personnel Schedule Document</label>
        </div>

        <!-- POST FORM START -->
        <form wire:submit="submit">

            <!-- Container -->
            <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <!-- Top Part of Container -->
                <div class="flex justify-between py-1">

                    <div class="flex flex-col space-y-3">

                        <!-- Select College/Office -->
                        <div class="w-80 rounded-lg">
                            <select wire:model="college_office" id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                                <option value="">Select College/Office</option>
                                @foreach ($CollegeOffices as $college)
                                <option value="{{$college}}">{{$college}}</option>
                                @endforeach

                                <!-- Other options -->
                            </select>
                            @error('college_office')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @include('components.import-button')
                </div>

                <!-- Input Fields -->
                @csrf
                @foreach ($items as $index => $item)
                <div class="flex flex-row space-x-4">

                    <!-- Item No. -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Item No.</label>
                        <input type="number" name="item_no" wire:model="items.{{ $index }}.item_no" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.item_no')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Grade-Step -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Grade-Step</label>
                        <input type="number" step="0.01" name="grade_step" wire:model="items.{{ $index }}.grade_step" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.grade_step')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Position (Chief by Designation) -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Position (Chief by Designation)</label>
                        <input type="text" name="position" wire:model="items.{{ $index }}.position" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                        @error('items.' . $index . '.position')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Name of Incumbent -->
                <div class="justify-start items-start space-y-3">
                    <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Name of Incumbent</label>
                    <textarea name="name_incumbent" wire:model="items.{{ $index }}.name_incumbent" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
                    @error('items.' . $index . '.name_incumbent')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-row space-x-4">
                    <!-- CY (Year) Current Year Annual salary/Annum -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">CY (Year) Current Year Annual salary/Annum</label>
                        <input type="number" name="annual_salary" wire:model="items.{{ $index }}.annual_salary" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.annual_salary')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- CY (Year) Budget Year Proposed salary/Annum -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">CY (Year) Budget Year Proposed salary/Annum</label>
                        <input type="number" step="0.01" name="proposed_salary" wire:model="items.{{ $index }}.proposed_salary" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.proposed_salary')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Increase -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Increase</label>
                        <input type="number" step="0.01" name="increase" wire:model="items.{{ $index }}.increase" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.increase')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-row space-x-4">
                    <!-- Total -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Total</label>
                        <input type="number" name="total" wire:model="items.{{ $index }}.total" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.total')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Sub-Total -->
                    <div class="justify-start items-start space-y-3 flex flex-col">
                        <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Sub-Total</label>
                        <input type="number" step="0.01" name="sub_total" wire:model="items.{{ $index }}.sub_total" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                        @error('items.' . $index . '.sub_total')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                @endforeach

                <!-- Bottom Buttons -->
                <div class="flex justify-between px-3 py-1">
                    @include('components.back-button')
                    <button wire:click.prevent="submit" id="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
