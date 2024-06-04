<x-app-layout>
    <div class="px-6 py-32">
        <!-- Header -->
        <div class="flex justify-between items-center pb-4">
            <div class="w-96 h-9 inline-flex">
            <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Edit Role</label>
            </div>

            <div class="flex justify-end">
                <a href="{{ url('roles') }}" class="text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:ring-indigo-300 rounded-lg text-sm px-5 py-2.5 focus:outline-none">Back</a>
            </div>
        </div>
        <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
            <form action="{{ url('roles/'.$role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="px-6 py-2">

                    <label class="px-6 py-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">Role Name: </label>
                    <input type="text" name="name" value="{{ $role->name }}" class="form-control" />
                    {{-- <input type="text"  name="name" value="{{ $role->name }}" class="w-96 h-8 px-3 py-2 rounded-md shadow border border-zinc-200 items-center gap-2 inline-flex bg-transparent text-zinc-500 text-sm font-normal font-['Inter'] leading-tight"> --}}
                </div>
                <div class="px-6 py-2">
                    <button
                        class="w-30 h-10 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Update
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
