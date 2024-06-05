<x-app-layout>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Header -->
            <div class="flex w-full pb-5 justify-between">
                <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Personnel Schedule
                    <div class="flex flex-row items-center">
                        <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call Forms ></label>
                        <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Personnel Schedule Form No. 4</label>
                    </div>
                </div>
                @include('components.export-button')
            </div>

            <div class="w-full h-full overflow-x-auto px-3 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <select id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option disabled selected>Select College/Office</option>
                    @foreach ($college_office as $college)
                    <option value="{{ $college }}">{{ $college }}</option>
                    @endforeach
                </select>

                <table class="min-w-full divide-y divide-gray-200 items-center">
                    <thead>
                        <tr>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Class<br>Year</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">College/<br>Office</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Item No.</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Grade-Step</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Position<br>(Chief by Designation)</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Name of<br>Incumbent</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">CY (Year)<br>Current Year Annual salary/Annum</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">CY (Year)<br>Budget Year Proposed salary/Annum</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Personal<br>Increase</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Sub-Total</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Status</th>
                            <th scope="col" class="px-2 py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Action</th>
                            <th scope="col" class="relative p-7 border border-slate-300">
                                <span class="sr-only">Edit</span>
                            </th>
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
                            <td class="py-4 text-sm text-black border border-slate-300">
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