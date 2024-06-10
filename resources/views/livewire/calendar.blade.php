<div class="p-4 max-w-md mx-auto">
    <div class="flex justify-between items-center mb-4">
        <button wire:click="goToPreviousMonth" class="p-2 bg-white shadow rounded"><</button>
        <div>
            <span class="text-base font-bold">{{ Carbon\Carbon::create($currentYear, $currentMonth)->format('F Y') }}</span>
        </div>
        <button wire:click="goToNextMonth" class="p-2 bg-white shadow rounded">></button>
    </div>

    <div class="grid grid-cols-7 gap-px text-center">
        @foreach (['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'] as $day)
            <div class="font-bold">{{ $day }}</div>
        @endforeach

        @for ($i = 0; $i < $firstDayOfMonth; $i++)
            <div></div>
        @endfor

        @for ($i = 1; $i <= $daysInMonth; $i++)
            <div class="{{ $i == $currentDay ? 'bg-blue-600 text-white' : 'text-gray-700' }} p-2 rounded-full w-10 h-9 flex items-center justify-center mx-auto">
                {{ $i }}
            </div>
        @endfor
    </div>
</div>
