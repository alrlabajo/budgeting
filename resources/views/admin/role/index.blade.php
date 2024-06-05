<x-app-layout>

    <div class="px-6 py-32">
        @include('admin.nav-links')
        @if(session('status'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 " role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              {{ session('status') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
          </div>
          @endif

        <!-- Header -->
        <div class="flex justify-between items-center pb-4">


            <div class="w-96 h-9 inline-flex">
            <label class="w-96 h-8 absolute text-indigo-800 text-3xl font-extrabold font-['Inter'] leading-9 whitespace-nowrap">Roles</label>
            </div>

            <div class="flex justify-end">
                <a href="{{ url('roles/create') }}" class="text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:ring-indigo-300 rounded-lg text-sm px-5 py-2.5 focus:outline-none">Add Role</a>
            </div>
        </div>



        <!-- Container -->
        <div class="w-full h-full px-10 py-4 bg-white rounded-lg shadow border border-zinc-300 space-y-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal gap-y-12">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="pr-10 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr class="gap-6 pb-4">
                        <td  class="px-6 py-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">{{$role->id}}</td>
                        <td class="pr-10 py-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">{{$role->name}}</td>
                        <td class="pr-10 py-3 text-zinc-950 text-sm font-medium font-['Inter'] leading-snug">
                            <a href="{{ url('roles/'.$role->id.'/edit') }}" class="text-white bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Edit</a>
                            <a href="{{ url('roles/'.$role->id.'/delete') }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>




    </div>
</x-app-layout>
