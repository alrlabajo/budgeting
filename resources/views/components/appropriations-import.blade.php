<!-- resources/views/livewire/import-csv.blade.php -->
<div class="flex flex-row grow justify-end gap-x-2 my-[1px]">
    <!-- Import Modal toggle -->
    <button data-modal-target="import-modal" data-modal-toggle="import-modal" class="font-['Inter'] w-20 h-10 px-4 bg-indigo-50 rounded-lg shadow border border-indigo-50 justify-center items-center gap-2 inline-flex text-indigo-800 text-sm font-semibold font-['Inter'] leading-tight" type="button">Import</button>

    <!-- Import modal -->
    <div id="import-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-zinc-950 text-xl font-semibold font-['Inter'] leading-7">
                        Import data by CSV
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="import-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <span class="text-black text-base font-normal font-['Inter'] leading-tight">Click to Add file</span>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" wire:model="csvFile" accept=".csv" />
                        </label>
                    </div>
                    @error('csvFile') <span class="error text-red-500">{{ $message }}</span> @enderror
                </div>

                <!-- Modal footer -->
                <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <a href="{{ route('appropriations-sample.csv.download') }}" class="text-indigo-800 text-base font-normal font-inter underline leading-normal">Download sample CSV</a>
                    <div class="flex gap-x-2">
                        <button data-modal-hide="import-modal" type="button" class="w-24 h-11 px-5 py-2.5 bg-white rounded-lg shadow border border-zinc-200 justify-center items-center inline-flex">
                            <div class="text-zinc-950 text-base font-medium font-inter leading-normal">Cancel</div>
                        </button>
                        <button wire:click="upload" data-modal-hide="import-modal" class="w-24 h-11 px-5 py-2.5 bg-indigo-800 rounded-lg shadow justify-center items-center gap-2.5 inline-flex">
                            <div class="text-white text-base font-bold font-['Inter'] leading-normal">Upload</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>