<x-app-layout>
    <div class="px-6 py-32">
        <!-- Header -->
        <div class="flex justify-between items-center pb-4">
            <div class="w-96 h-9 inline-flex">
            <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Edit User</label>
            </div>

            <div class="flex justify-end">
                <a href="{{ url('users') }}" class="text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:ring-indigo-300 rounded-lg text-sm px-5 py-2.5 focus:outline-none">Back</a>
            </div>
        </div>
        <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">

            <form action="{{ url('users/'.$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="px-6 py-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="px-6 py-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="text" readonly name="email" value="{{ $user->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5" />
                </div>
                <div class="px-6 py-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Roles (can select multiple)</label>
                    <select name="roles[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5" multiple>
                        <option @readonly(true) value="">select role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role }}"
                            {{ in_array($role, $userRoles) ? 'selected':'selected' }}
                        >
                                {{ $role }}
                            </option>
                        @endforeach
                    </select>
                    @error('roles')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
