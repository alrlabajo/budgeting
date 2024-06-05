
<div class="flex flex-col items-center gap-y-2 px-2">
    <x-dropdown>
        <x-slot name="trigger">
            <button class="flex items-center justify-center w-8 h-8 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
            </button>
        </x-slot>
        <x-slot name="content">
            <x-dropdown-link href="#">Edit</x-dropdown-link>
            <x-dropdown-link href="#">Delete</x-dropdown-link>
        </x-slot>
    </x-dropdown>
</div>
