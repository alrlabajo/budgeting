<div class="flex flex-col grid-cols-1 md:grid-cols-1 sm:grid-cols-1 px-7 py-32">
    <!-- Header -->
    <div class="flex w-full pb-5 justify-between">
        <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">Amendment
            <div class="flex flex-row items-center">
                <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Payment Request Forms ></label>
                <label class="text-black text-sm font-normal font-['Inter'] leading-loose">Amendment Form No. 2</label>
            </div>
        </div>
        @include('components.bur-buttons')
    </div>

    <div class="w-full h-full overflow-x-auto py-2 space-y-4">
        <table class="min-w-full divide-y divide-gray-200 border border-slate-300 items-center">
            <thead>
                <tr class="items-center">
                    <th class="py-3 whitespace-nowrap">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    </th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Amendatory No.</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Plan No. Being Revised</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Date of Revision</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Planned Amount</th>
                    <th scope="col" class="py-3 text-black text-sm font-bold font-['Inter'] leading-tight border border-slate-300">Date Submitted</th>
                    <th scope="col" class="relative py-3 border border-slate-300">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-2 py-3 whitespace-nowrap text-center">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out mx-auto">
                    </td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm text-black border border-slate-300"></td>
                    <td class="py-3 text-sm font-medium border border-slate-300">
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
