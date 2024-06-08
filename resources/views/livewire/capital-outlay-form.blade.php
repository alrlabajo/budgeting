<x-slot name="title">Capital Outlay Form</x-slot>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- Message Header -->
            @if(session('message'))
            <div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50" role="alert">
                <div class="flex items-center">
                  <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <span class="sr-only">Info</span>
                  <h3 class="text-lg font-medium">{{ session('message') }}</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                  More info about this info alert goes here. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
                </div>
                <div class="flex">
                  <button type="button" class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center " data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                    Dismiss
                  </button>
                </div>
              </div>
            @endif
            <!-- Header -->
            <div class="w-96 h-9 justify-between items-center inline-flex py-10">
                <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Capital Outlay Document</label>
            </div>

            <!-- POST FORM START -->
            <form wire::submit="submit">

                <!-- Container -->
                <div class="w-full h-full px-6 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                    <!-- Top Part of Container -->
                    <div class="flex justify-between py-6">

                        <div class="flex flex-col space-y-3">

                            <!-- Select College/Office -->
                            <div class="w-80 rounded-lg">
                                <select wire:model="college_office" id="college_office" name="college_office" class="block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
                                    <option value="">Select College/Office</option>
                                    @foreach ($CollegeOffices as $college)
                                    <option value="{{$college}}">{{$college}}</option>
                                    @endforeach

                                    <!-- Other options -->
                                </select>
                                @error('college_office')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- <input type="date" class="w-80 h-10 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="School Year"> --}}
                        </div>
                        {{-- @if($isAdmin)
                @include('components.status-dropdown')
                @else
                @include('components.import-button')
                @endif --}}
                    </div>

                    @csrf
                    <table id="capital-outlay-table" class="w-full text-sm text-left rtl:text-right text-gray-500">
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

                                <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                    {{ $item['account_code'] }}
                                </th>

                                <td class="pr-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                    {{ $item['item'] }}
                                </td>
                                <td class="px-4 py-2">

                                    {{-- input 1 for proposed budget  --}}

                                    <input type="number" step="0.01" name="budget" wire:model="items.{{ $index }}.budget" class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="₱ 0.00">
                                    @error('items.' . $index . '.budget')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td class="px-6 py-2">

                                    {{-- input 2 for justification budget  --}}
                                    <input type="text" wire:model="items.{{ $index }}.justification" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight" placeholder="Description">
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
                        <button wire:click.prevent="submit" id="submit-btn" class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                        </button>
                    </div>
                </div>
            </form>



            <!-- Success Message -->
            @if (session()->has('message'))
            <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                {{ $item['budget'] }}
            </th>
            @endif

        </div>
    </div>

