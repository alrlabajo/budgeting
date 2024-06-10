<div class="flex flex-row grow justify-end gap-2">


    <select wire:model.live="CollegeOffice" id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;" required>
        {{-- <option value="">Select College/Office</option> --}}
        {{-- <option value="CISTM">CISTM</option>
            <option value="CEng">CEng</option> --}}
        <option value="">Select College/Office</option>
        @foreach ($college_office as $college)
            <option value="{{$college}}">{{$college}}</option>
        @endforeach
    </select>
{{--
    @php
        dd($college);
    @endphp --}}

    <select  wire:model.live="year" id="school_year" name="school_year" class="font-['Inter'] block w-60 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;" @if($CollegeOffice == "") disabled @endif>
        <option value="0">Reference Year</option>

        {{-- <option value="College 1">2023</option>
        <option value="College 2">2022</option>
        <option value="">...</option> --}}

        @foreach($college_years as $index => $year)
            <option value="{{ $index+1 }}">{{ $year }} - {{ $year+1 }}</option>
        @endforeach

    </select>



</div>
