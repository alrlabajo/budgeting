<x-app-layout>
    <div class="px-6 py-32">
        <!-- Header -->
        <div class="flex justify-between items-center pb-4">
            <div class="w-96 h-9 inline-flex">
            <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Create Permission</label>
            </div>

            <div class="flex justify-end">
                <a href="{{ url('permissions') }}" class="text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:ring-indigo-300 rounded-lg text-sm px-5 py-2.5 dark:bg-indigo-800 dark:hover:bg-indigo-900 focus:outline-none dark:focus:ring-indigo-800">Back</a>
            </div>
        </div>
        <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
            <form  wire:submit="submit" action="{{ url('permissions') }}" method="POST">
                @csrf
                <div class="px-6 py-2">
                    <label class="px-6 py-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Permission Name: </label>
                    <input name="name" type="text" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"
                                    placeholder="permission name">
                </div>
                <div class="px-6 py-2">
                    <button
                        class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Save
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
