<x-slot name="title">Project Procurement Management Plan Form</x-slot>
<div class="p-2 sm:ml-64">
    <div class="p-2">

        <!-- Header -->
        <!-- Header -->
        <div class="w-full h-9 justify-between items-center inline-flex py-10">
            <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">
                Project Procurement Management Plan Document
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call
                        Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">S.Y. {{ $currentYear }}
                        - {{ $currentYear + 1 }}</label>
                </div>
            </div>
        </div>
        <!-- POST FORM START -->
        <form wire:submit="submit">

            <!-- Container -->
            <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <!-- Top Part of Container -->
                <div class="flex justify-between py-1">

                    <div class="flex flex-col space-y-3">
                        @include('components.form-button2')
                    </div>
                    {{-- @include('components.import-button') --}}
                </div>

                <!-- Input Fields -->
                @csrf
                @foreach ($items as $index => $item)
                <div class="flex flex-row space-x-4">

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-1/2">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Program Title</label>
                            <input type="text" name="program_title" wire:model="items.{{ $index }}.program_title" class="w-full h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.program_title')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-1/2">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Project Title</label>
                            <input type="text" name="project_title" wire:model="items.{{ $index }}.project_title" class="w-full h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.project_title')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                </div>

                <div class="flex flex-row space-x-6">

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Type of Contract</label>
                            <input type="text" name="type_contract" wire:model="items.{{ $index }}.type_contract" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.type_contract')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Account Title</label>
                            <input type="text" name="account_title" wire:model="items.{{ $index }}.account_title" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.account_title')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Item/Name</label>
                            <input type="text" name="item_name" wire:model="items.{{ $index }}.item_name" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.item_name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Unit of Issue</label>
                            <input type="text" name="unit_issue" wire:model="items.{{ $index }}.unit_issue" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.unit_issue')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Unit Price</label>
                            <input type="number" name="unit_price" step="0.01" wire:model="items.{{ $index }}.unit_price" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            @error('items.' . $index . '.unit_price')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                </div>

                <div class="flex flex-row space-x-6">

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Quantity</label>
                            <input type="number" name="quantity" wire:model="items.{{ $index }}.quantity" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            @error('items.' . $index . '.quantity')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Account Code</label>
                            <input type="text" name="account_code" wire:model="items.{{ $index }}.account_code" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.account_code')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Description</label>
                            <input type="text" name="description" wire:model="items.{{ $index }}.description" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.description')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Procurement Method</label>
                            <input type="text" name="procurement_method" wire:model="items.{{ $index }}.procurement_method" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            @error('items.' . $index . '.procurement_method')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                        <form class="justify-start items-start space-y-3 flex flex-col">
                            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Estimated Budget</label>
                            <input type="number" name="estimated_budget" step="0.01" wire:model="items.{{ $index }}.estimated_budget" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            @error('items.' . $index . '.estimated_budget')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                </div>
                @endforeach
                <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-full">
                    @livewire('month-selector')
                </div>

                <div class="flex justify-between px-3 py-1">
                    @include('components.back-button')
                    <button wire:click.prevent="submit" name="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
