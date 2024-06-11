<x-slot name="title">Personal Services Document</x-slot>
<div class="p-2 sm:ml-64">
    <div class="p-2">
        @if (session('message'))
            <div id="alert-additional-content-1"
                class="p-4 mb-4 mt-3 text-indigo-800 border border-indigo-300 rounded-lg bg-indigo-50" role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-indigo-800">{{ session('message') }}</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Please proceed to Budget Call > Personal Services to view your submitted budget.
                </div>
                <div class="flex">
                    <a href="/personal-services"
                        class="text-white bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-indigo-200 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center">
                        <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 14">
                            <path
                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                        </svg>
                        Go to Personal Services
                    </a>
                    <button type="button"
                        class="text-indigo-800 bg-transparent border border-indigo-800 hover:bg-indigo-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-indigo-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center "
                        data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                        Dismiss
                    </button>
                </div>
            </div>
        @endif
        <!-- Header -->
        <div class="w-96 h-9 justify-between items-center inline-flex py-10">
            <div class="flex flex-col gap-y-2 text-indigo-800 text-[25px] font-extrabold font-['Inter'] leading-5">
                Personal Services Document
                <div class="flex flex-row items-center">
                    <label class="text-yellow-700 text-sm font-normal font-['Inter'] leading-loose mr-1">Budget Call
                        Forms ></label>
                    <label class="text-black text-sm font-normal font-['Inter'] leading-loose">S.Y. {{ $currentYear }}
                        - {{ $currentYear + 1 }}</label>
                </div>
            </div>
        </div>


        <!-- POST FORM START -->
        <form wire::submit="submit">

            <!-- Container -->
            <div class="w-full h-full p-3 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

                <!-- Top Part of Container -->
                <div class="flex justify-between py-1">

                    <div class="flex flex-col space-y-3">
                        <!-- Select College/Office -->
                        <div class="w-90 rounded-lg">
                            @include('components.form-buttons')
                        </div>
                        @error('CollegeOffice')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- @include('components.services-import') --}}
                </div>

                @csrf
                <table id="personalservices-table" class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <!-- Header -->
                    <thead class=" text-zinc-950 text-base font-semibold font-['Inter'] leading-normal gap-y-12">
                        <tr>
                            <th scope="col" class="px-2 py-3">Account Code</th>
                            <th scope="col" class="pr-5 py-3">Item of Expenditures</th>
                            {{-- <th scope="col" class="px-3 py-3">Previously Approved Budget</th> --}}
                            <th scope="col" class="px-2 py-3">Previous S.Y. Approved Budget</th>
                            <th scope="col" class="px-2 py-3">Proposed Budget</th>
                            <th scope="col" class="px-2 py-3 text-center">Justification</th>
                        </tr>
                    </thead>
                    <!-- Body -->
                    <tbody id="personalservices-tbody">
                        @foreach ($items as $index => $item)
                            {{-- get the values as array --}}
                            {{-- @foreach ($user as $key => $value) --}}
                            {{-- input fields --}}
                            <tr class="gap-6">

                                <th scope="row"
                                    class="px-3 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug whitespace-nowrap">
                                    {{ $item['account_code'] }}
                                </th>

                                <td class="pl-2 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                    {{ $item['item'] }}
                                </td>
                                @if ($ComparativeDataBudget == 1 || $flag == 1)
                                    <td scope="row"
                                        class="pr-5 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                        <input type="text"
                                            class="w-36 h-8 px-3 py-2 bg-gray-50 text-sm rounded-md shadow border border-zinc-200 text-gray-900 "
                                            placeholder="-" readonly />
                                    </td>
                                @elseif ($CollegeOffice == "")
                                    <td scope="row"
                                        class="pr-5 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                                        <input type="text"
                                            class="w-36 h-8 px-3 py-2 bg-gray-50 text-sm rounded-md shadow border border-zinc-200 text-gray-900 "
                                            placeholder="-" readonly />
                                    </td>
                                @else
                                    {{-- @php
                                        dd($CollegeOffice);
                                    @endphp --}}
                                    <td scope="row"
                                        class="pr-5 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">

                                        <input type="text"
                                            class="w-36 h-8 px-3 py-2 bg-yellow-50 text-sm rounded-md shadow border border-yellow-500 text-yellow-900 "
                                            placeholder="&#8369 {{ number_format($last_budget[$index]['budget'], 2) ?? '₱ 0.00' }}"
                                            readonly />
                                    </td>
                                @endif
                                <td class="px-2 py-2">
                                    {{-- input 1 for proposed budget  --}}
                                    @if ($flag == 1)
                                        <input type="number" step="0.01" name="budget"
                                            wire:model="items.{{ $index }}.budget"
                                            class="w-36 h-8 px-3 py-2 bg-gray-50 text-sm rounded-md shadow border border-zinc-200 text-gray-900"
                                            placeholder="-" min="0" oninput="this.value = Math.abs(this.value)"
                                            disabled>
                                    @else
                                        <input type="number" step="0.01" name="budget"
                                            wire:model="items.{{ $index }}.budget"
                                            class="w-36 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"
                                            placeholder="₱ 0.00" min="0" max="9999999999" maxlength="8"
                                            oninput="this.value = Math.abs(this.value.slice(0, 10))">
                                    @endif

                                    @error('items.' . $index . '.budget')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </td>
                                <td class="px-6 py-2">

                                    {{-- input 2 for justification budget  --}}
                                    @if ($flag == 1)
                                        <input type="text" wire:model="items.{{ $index }}.justification"
                                            class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-gray-50 text-gray-900 text-sm font-normal font-['Inter'] leading-tight"
                                            placeholder="-" disabled>
                                    @else
                                        <input type="text" wire:model="items.{{ $index }}.justification"
                                            class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"
                                            placeholder="Description">
                                    @endif
                                    @error('items.' . $index . '.justification')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                            </tr>
                            {{-- @endforeach --}}
                        @endforeach
                    </tbody>
                </table>


                <!-- Bottom Buttons -->
                <div class="flex justify-between px-3 py-1">
                    @include('components.back-button')
                    @if ($flag == 0)
                        <button wire:click.prevent="submit" id="submit-btn"
                            class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Submit
                        </button>
                    @endif
                </div>

            </div>

        </form>

        @foreach ($items as $index => $item)
            <?php
            echo $item['budget'];
            echo $item['justification'];
            ?>
        @endforeach



        <!-- Success Message -->
        @if (session()->has('message'))
            <th scope="row" class="px-6 py-2 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                {{ $item['budget'] }}
            </th>
        @endif
    </div>
</div>
