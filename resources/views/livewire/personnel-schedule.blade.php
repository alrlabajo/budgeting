<x-slot name="title">Personnel Schedule</x-slot>
    <div class="p-2 sm:ml-64">
        <div class="px-2 py-5">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personnel Schedule
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personnel Schedule Form No. 4</label>
                    </div>
                </div>
                @include('components.personnel-schedule-export')
            </div>

            <div class="w-full h-full overflow-x-auto p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
                <table id="personnel-schedule-table" class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class Year</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">College/ Office</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item No.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Grade-Step</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Position (Chief by Designation)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Name of Incumbent</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">CY (Year) Current Year Annual salary/Annum</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">CY (Year) Budget Year Proposed salary/Annum</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Personal Increase</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Sub-Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Status</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Action</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($load_personnelschedule as $personnelschedule)
                        <tr class="items-center">
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->created_at}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->collge_office}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->item_no}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->grade_step}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->position}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->name_incumbent}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->annual_salary}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->proposed_salary}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->increase}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->total}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300">{{ $personnelschedule->sub_total}}</td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td>
                            <td class="px-2 py-3 text-sm text-black border border-slate-300"></td> <!--Edit/Delete-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
