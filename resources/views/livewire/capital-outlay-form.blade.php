<div class="px-6 py-32">

    <!-- Header -->
    <div class="w-96 h-9 justify-between items-center inline-flex py-10">
        <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Capital Outlay Document</label>
    </div>

    <!-- POST FORM START -->
    <form wire::submit="submit">

        <!-- Container -->
        <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

            <!-- Top Part of Container -->
            <div class="flex justify-between py-6">

                <div class="flex flex-col space-y-3">

                    <!-- Select College/Office -->
                    <div class="w-80 rounded-lg">
                        <select  wire:model="college_office" id="college_office" name="college_office"
                            class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            style="text-indent: 10px;">
                            <option value="">Select College/Office</option>
                            @foreach ($CollegeOffices as $college)
                                <option value="{{$college}}"  >{{$college}}</option>
                            @endforeach

                            <!-- Other options -->
                        </select>
                        @error('college_office')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="date" class="w-80 h-10 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="School Year">
                </div>
                @if($isAdmin)
                @include('components.status-dropdown')
                @else
                @include('components.import-button')
                @endif
            </div>

            @csrf
            <table id="capital-outlay-table"
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <!-- Header -->
                <thead class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal gap-y-12">
                    <tr>
                        <th scope="col" class="px-6 py-3">Account Code</th>
                        <th scope="col" class="pr-10 py-3">Item of Expenditures</th>
                        <th scope="col" class="px-6 py-3">Proposed Budget</th>
                        <th scope="col" class="px-6 py-3">Justification</th>
                    </tr>
                </thead>
                <!-- Body -->
                <tbody id="capital-outlay-tbody">
                    @foreach ($items as $index => $item)
                        {{-- get the values as array --}}
                        {{-- @foreach($user as $key => $value) --}}
                        {{-- input fields --}}
                        <tr class="gap-6">

                            <th scope="row"
                                class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                {{ $item['account_code'] }}</th>

                            <td class="pr-10 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                {{ $item['item'] }}</td>
                            <td class="px-6 py-2">

                                {{-- input 1 for proposed budget  --}}

                                <input type="number" step="0.01" name="budget"
                                    wire:model="items.{{ $index }}.budget"
                                    class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"
                                    placeholder="₱ 0.00">
                                @error('items.' . $index . '.budget')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </td>
                            <td class="px-6 py-2">

                                {{-- input 2 for justification budget  --}}
                                <input type="text" wire:model="items.{{ $index }}.justification"
                                    class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"
                                    placeholder="Description">
                                @error('items.' . $index . '.justification')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    @endforeach
                </tbody>
            </table>

            <!-- Bottom Buttons -->
            <div class="flex justify-between py-4">
                @livewire('back-button')
                <button wire:click.prevent="submit" id="submit-btn"
                    class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                </button>
            </div>
        </div>
    </form>



    <!-- Success Message -->
    @if (session()->has('message'))
    <th scope="row"
    class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
    {{ $item['budget'] }}</th>
    @endif

</div>
