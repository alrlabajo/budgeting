<div>
    <div class="w-9 px-1.5 py-1 rounded justify-start items-center gap-1.5 inline-flex mx-auto">
        <div class="w-3.5 h-3.5 relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                <g clip-path="url(#clip0_4744_10818)">
                    <path d="M10.1823 1.78801C10.3262 1.64407 10.4971 1.52988 10.6852 1.45198C10.8733 1.37408 11.0748 1.33398 11.2784 1.33398C11.482 1.33398 11.6835 1.37408 11.8716 1.45198C12.0597 1.52988 12.2306 1.64407 12.3745 1.78801C12.5185 1.93195 12.6326 2.10284 12.7105 2.29091C12.7884 2.47898 12.8285 2.68056 12.8285 2.88412C12.8285 3.08769 12.7884 3.28927 12.7105 3.47734C12.6326 3.66541 12.5185 3.8363 12.3745 3.98024L4.97574 11.379L1.96143 12.2011L2.78351 9.18678L10.1823 1.78801Z" stroke="#71717A" stroke-width="0.822086" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                    <clipPath id="clip0_4744_10818">
                        <rect width="13.1534" height="13.1534" fill="white" transform="translate(0.865234 0.144531)"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="grow shrink basis-0 h-4 justify-start items-center gap-1.5 flex">
            <button data-modal-target="edit-item-modal" data-modal-toggle="edit-item-modal" class="px-4 py-2 flex" type="button">Edit</button>
            <!-- Edit modal -->
            <div id="edit-item-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full z-50">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-800">Edit Row</h3>
                            <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600" data-modal-hide="edit-item-modal">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 text-left">
                            <div>
                                <label for="account-code" class="block text-sm font-medium text-gray-700">Account Code</label>
                                <input type="text" id="account-code" class="w-full h-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Account Code">
                            </div>
                            <div>
                                <label for="item-of-expenditures" class="block text-sm font-medium text-gray-700">Item of Expenditures</label>
                                <input type="text" id="item-of-expenditures" class="w-full h-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Item of Expenditures">
                            </div>
                            <div>
                                <label for="proposed-budget" class="block text-sm font-medium text-gray-700">Proposed Budget</label>
                                <input type="text" id="proposed-budget" class="w-full h-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Proposed Budget">
                            </div>
                            <div>
                                <label for="justification" class="block text-sm font-medium text-gray-700">Justification</label>
                                <textarea id="justification" class="w-full h-32 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="Justification"></textarea>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex gap-x-2 justify-end p-4">
                            <button data-modal-hide="edit-item-modal" type="button" class="mr-3 inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-gray-700 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                            <button data-modal-hide="edit-item-modal" class="inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>