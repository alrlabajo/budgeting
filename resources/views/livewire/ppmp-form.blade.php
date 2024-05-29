<div class="px-6 py-32">
    <!-- Header -->
    <div class="w-96 h-9 justify-between items-center inline-flex py-10">
        <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Project Procurement Management Plan Document</label>
    </div>

    <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

        <div class="flex justify-between py-6">
            <div class="flex flex-col space-y-3">
                <!-- Select College/Office -->
                <div class="w-80 rounded-lg">
                    <select id="college_office" name="college_office" class="block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                        <option disabled selected>Select College/Office</option>
                        <option value="College 1">College 1</option>
                        <option value="College 2">College 2</option>
                        <option value="">...</option>
                    </select>
                </div>
                <input type="date" class="w-80 h-10 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="School Year">
            </div>
            @include('components.import-button')
        </div>

        <div class="flex justify-between py-4">
            @include('components.back-button')
            @include('components.submit-button')
        </div>
    </div>
</div>
