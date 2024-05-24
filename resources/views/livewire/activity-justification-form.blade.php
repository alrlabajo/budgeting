<div class="px-6 py-32">

    <!-- Header -->
    <div class="w-96 h-9 justify-between items-center inline-flex py-10">
        <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Activity Justification Document</label>
    </div>

    <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

        <div class="flex justify-between py-6">
            <!-- Select College/Office -->
            <div class="w-80 rounded-lg">
                <select id="college_office" name="college_office" class="block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                    <option disabled selected>Select College/Office</option>
                    <option value="College 1">College 1</option>
                    <option value="College 2">College 2</option>
                    <option value="">...</option>
                </select>
            </div>
            @include('components.import-button')
        </div>
        

        <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal py-3">Statement of Objectives</label>

        <form class="justify-start items-start space-y-3">
            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Major</label>
            <textarea id="activity-major" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
        </form>

        <form class="justify-start items-start space-y-3">
            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Specific</label>
            <textarea id="activity-specific" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
        </form>

        <form class="justify-start items-start space-y-3">
            <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Activity/Justification</label>
            <textarea id="activity-justification" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
        </form>

        <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Cost per Student</label>
        
        <div class="flex flex-row space-x-36">
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Estimated Number of Students</label>
                <input type="number" id="activity-estimated" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Total Cost (excluding Capital Outlay)</label>
                <input type="number" step="0.01" id="activity-total-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Cost per Student</label>
                <input type="number" step="0.01" id="activity-cost" class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
        </div>

        <form class="justify-start items-start space-y-3">
            <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal required">Method of Accomplishing Objectives</label>
            <textarea id="activity-justification" class="w-full h-20 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="Description"></textarea>
        </form>

        <label class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">Item of Expenditures - Proposed Budget</label>

        <div class="flex flex-row space-x-24">
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Personal Services (Total of Form No. 2)</label>
                <input type="number" id="activity-estimated" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">MOOE (Total of Form No. 3)</label>
                <input type="number" step="0.01" id="activity-total-cost" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Capital/Equipment Outlay (PPMP)</label>
                <input type="number" step="0.01" id="activity-cost" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
            <form class="justify-start items-start space-y-3 flex flex-col">
                <label class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-normal required">Total</label>
                <input type="number" step="0.01" id="activity-cost" class="w-72 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-start items-center gap-2 inline-flex text-zinc-500 text-xs font-normal font-['Inter'] leading-tight" placeholder="0"></input>
            </form>
        </div>

        <div class="flex justify-between py-6">
            @include('components.back-button')
            @include('components.submit-button')
        </div>
    </div>
</div>
