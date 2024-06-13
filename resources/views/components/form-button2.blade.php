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
</div>
