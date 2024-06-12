<div class="flex flex-row grow justify-end gap-2">


    <select wire:model.live="CollegeOffice" id="college_office" name="college_office" class="font-['Inter'] block w-90 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;"  required>
        {{-- <option value="">Select College/Office</option> --}}
        {{-- <option value="CISTM">CISTM</option>
            <option value="CEng">CEng</option> --}}
        <option value="">Select College/Office</option>

        @foreach ($college_office as $college)
            <option value="{{$college}}">{{$college}}</option>
        @endforeach
    </select>

    <select  wire:model.live="year" id="school_year" name="school_year" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;" @if($CollegeOffice == "" || $flag == 1) disabled @endif>
        <option value="0">Reference Year</option>
        @php
            $currentYear = date('Y');
            $checkYear = $currentYear - $college_years[0];
        @endphp

        @if($checkYear == 0 && $flag == 1) {
        }
        @elseif($checkYear == 0 && $flag == 0) {

            @if($CollegeOffice !== "")
                @foreach($college_years as $index => $year)
                    @if($index != 0)
                        <option value="{{ $index }}">Comparative Data: {{ $year }} - {{ $year+1 }}</option>
                    @endif
                @endforeach
                @endif

        }

        @else {
            @if($CollegeOffice !== "")
                    @foreach($college_years as $index => $year)
                        <option value="{{ $index+1 }}">Comparative Data: {{ $year }} - {{ $year+1 }}</option>
                    @endforeach
            @endif
        }
        @endif

    </select>



</div>
