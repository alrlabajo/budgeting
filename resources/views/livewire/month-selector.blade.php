<div>
    <div class="p-4 space-y-4">
        <h2 class="text-lg font-semibold font-['Inter']">Delivery/Implementation Schedule</h2>
        <p class="font-['Inter']">Select the month(s) to be active</p>
        <div class="space-x-2">
            @foreach(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'] as $month)
            <button type="button" class="w-20 h-11 px-4 py-2 border rounded {{ in_array($month, $selectedMonths) ? 'border border-slate-600 text-black' : 'bg-white text-black' }}" wire:click="toggleMonth('{{ $month }}')">
                {{ $month }}
            </button>
            @endforeach
        </div>
    </div>
</div>