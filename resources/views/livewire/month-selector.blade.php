<div>
    <div class="p-4 space-y-4">
        <h2 class="text-lg font-semibold font-['Inter']">Delivery/Implementation Schedule</h2>
        <p class="font-['Inter']">Select the month(s) to be active</p>
        <div class="grid grid-cols-4 gap-4">
            @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                <div>
                    <input type="checkbox" id="{{ strtolower($month) }}" name="months[]" value="{{ $month }}" wire:model="selectedMonths">
                    <label for="{{ strtolower($month) }}">{{ $month }}</label>
                </div>
            @endforeach
        </div>
        @error('selectedMonths')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
</div>
