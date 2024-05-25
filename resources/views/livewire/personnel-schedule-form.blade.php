<div class="px-6 py-32">
    <!-- Header -->
    <div class="w-96 h-9 justify-between items-center inline-flex py-10">
        <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Personnel Schedule Document</label>
    </div>

    <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

        <div class="flex justify-between py-6">
            <div class="flex flex-col space-y-3">
                <!-- Select College/Office -->
                <div class="w-80 rounded-lg">
                    <select id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                        <option disabled selected>Select College/Office</option>
                        <option value="College 1">College 1</option>
                        <option value="College 2">College 2</option>
                        <option value="">...</option>
                    </select>
                </div>
                <div class="flex items-center text-center space-x-2 w-56 bg-gray-200 text-gray-700 p-1 rounded-md shadow-md font-['Inter']">
                    <div class="bg-white w-24 text-black py-1 px-2 rounded-md" id="entry-count">Entry 1</div>
                        <button class="text-gray-700 whitespace-nowrap" onclick="addEntry()">+ New Entry</button>
                </div>
            </div>
            @include('components.import-button')
        </div>

        <div class="flex flex-row space-x-36">
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Item No.</label>
                <input type="number" id="activity-estimated" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Grade-Step</label>
                <input type="number" step="0.01" id="activity-total-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Position (Chief by Designation)</label>
                <input type="text" id="activity-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></input>
            </form>
        </div>

        <form class="justify-start items-start space-y-3">
            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Name of Incumbent</label>
            <textarea id="activity-major" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
        </form>

        <div class="flex flex-row space-x-36">
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">CY (Year) Current Year Annual salary/Annum</label>
                <input type="number" id="activity-estimated" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">CY (Year) Budget Year Proposed salary/Annum</label>
                <input type="number" step="0.01" id="activity-total-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Increase</label>
                <input type="number" step="0.01" id="activity-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
        </div>

        <div class="flex flex-row space-x-36">
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Total</label>
                <input type="number" id="activity-estimated" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Sub-Total</label>
                <input type="number" step="0.01" id="activity-total-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
        </div>

        <div class="flex justify-between py-4">
            @include('components.back-button')
            @include('components.submit-button')
        </div>
    </div>

    <script>
        let entryCount = 1;

        function addEntry() {
            entryCount++;
            document.getElementById('entry-count').innerText = `Entry ${entryCount}`;
        }
    </script>

</div>
