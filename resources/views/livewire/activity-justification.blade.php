<x-app-layout>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
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

            <div class="w-full h-full overflow-y-auto px-3 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <table class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Class Year</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">College/Office</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight whitespace-nowrap" colspan="2">Statement of Objectives</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Activity/Justification</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" colspan="3">Cost Per Student</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Method of Accomplishing Objectives</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" colspan="3">Proposed Budget</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Total</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Status</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight" rowspan="2">Action</th>
                            <th scope="col" class="relative p-7 border border-slate-300" rowspan="2">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Major</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Specific</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight whitespace-nowrap">Estimated No. of Students</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Total Cost</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Cost Per Student</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Personal <br> Services</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">MOOE</th>
                            <th scope="col" class="px-2 py-3 text-black border border-slate-300 text-sm font-bold font-['Inter'] leading-tight">Capital <br> Outlay</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_activityjustification as $activityjustification)
                        <tr class="items-center">
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->created_at}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->college_office}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->statement_major}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->statement_specific}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->activity_justification}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->estimated_no_students}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->total_cost}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->cost_per_student}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->method_accomplishing}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->services_budget}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->mooe_budget}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $activityjustification->capital_outlay_budget}}</td>
                            <td class="px-2 py-4 text-sm font-medium border border-slate-300"></td>
                            <td class="px-2 py-4 text-sm font-medium border border-slate-300"></td>
                            <td class="px-2 py-4 text-sm font-medium border border-slate-300"></td>
                            <td class="py-4 text-sm font-medium border border-slate-300">
                                <!-- Edit/Delete -->
                                <div class="flex flex-col items-center gap-y-2 px-2">
                                    @include('components.editdelete-button')
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>