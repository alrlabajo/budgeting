<div class="px-6 py-32">
    <!-- Header -->
    <div class="flex w-full pb-5 justify-between">
        <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Activity Justification
            <div class="flex flex-row items-center">
                <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Activity Justification Form No. 1</label>
            </div>
        </div>
        @include('components.export-button')
    </div>

    <div class="w-full h-full overflow-x-auto px-3 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

        <select id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
            <option disabled selected>Select College/Office</option>
            <option value="College 1">College 1</option>
            <option value="College 2">College 2</option>
            <option value="">...</option>
        </select>

        <table class="min-w-full divide-y divide-gray-200 items-center">
            <thead>
                <tr>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Class Year</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">College/Office</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" colspan="2">Statement of Objectives</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Activity/Justification</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" colspan="3">Cost Per Student</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Method of Accomplishing Objectives</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" colspan="3">Proposed Budget</th>
                    <th scope="col" class="relative p-7 border border-slate-300" rowspan="2">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                <tr>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Major</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Specific</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Estimated No. <br> of Students</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Total Cost</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Cost Per Student</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Personal <br> Services</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">MOOE</th>
                    <th scope="col" class="py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Capital <br> Outlay</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="items-center">
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-4 text-sm font-medium border border-slate-300">
                        <!-- Edit/Delete -->
                        <div class="flex flex-col items-center gap-y-2 px-2">
                            @include('components.edit-delete')
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>