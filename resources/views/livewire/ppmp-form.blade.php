
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="w-96 h-9 justify-between items-center inline-flex py-10">
                <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Project Procurement Management Plan Document</label>
            </div>

            <!-- POST FORM START -->
            <form wire:submit="submit">

                <!-- Container -->
                <div class="w-full h-full px-6 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                    <!-- Top Part of Container -->
                    <div class="flex justify-between py-6">

                        <div class="flex flex-col space-y-3">

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
                            <div class="flex items-center text-center space-x-2 w-56 bg-gray-200 text-gray-700 p-1 rounded-md shadow-md font-['Inter']">
                                <div class="bg-white w-24 text-black py-1 px-2 rounded-md" id="entry-count">Entry 1</div>
                                <button type="button" class="text-gray-700 whitespace-nowrap" wire:click.prevent="addEntry">+ New Entry</button>
                            </div>
                        </div>
                        @include('components.import-button')
                    </div>

                    <!-- Input Fields -->
                    <div class="flex flex-row space-x-4">
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-1/2">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Program Title</label>
                                <input type="text" class="w-full h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-1/2">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Program Title</label>
                                <input type="text" class="w-full h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            </form>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-4">
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Type of Contract</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Account Title</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Item/Name</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Unit of Issue</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Unit Price</label>
                                <input type="number" step="0.01" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-4">
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Quantity</label>
                                <input type="number" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Account Code</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Description</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Procurement Method</label>
                                <input type="text" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description">
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-56">
                            <form class="justify-start items-start space-y-3 flex flex-col">
                                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Estimated Budget</label>
                                <input type="number" step="0.01" class="w-48 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                            </form>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow border border-zinc-300 flex flex-col p-3 space-y-2 w-full">
                        @livewire('month-selector')
                    </div>
                    <div class="flex justify-between py-4">
                        @include('components.back-button')
                        @include('components.submit-button')
                    </div>
                </div>
            </form>
        </div>
    </div>

