<div class="mb-6 grid grid-cols-1 gap-x-6 gap-y-8 {{-- xl:grid-cols-2 --}}">
    <div class="card shadow">
        <div class="card-body">

            <div class="mb-4">
                <h3>User Lists</h3>
            </div>

            <form>
                @csrf
                <div class="mb-4">
                    <label for="search">Search a User</label>
                    <div class="flex items-center">
                        <img class="bg-white py-2 px-2 rounded border border-gray-300"
                            src="{{ asset('img/admin//svg/search.svg') }}" alt="search">
                        <input wire:model.live="search" type="text"
                            class="px-4 text-lg block w-full border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Search a User, an Email, an ID,..." />

                        <div wire:loading wire:target="search"
                            class="ms-2 animate-spin inline-block w-6 h-6 border-[3px] border-current border-t-transparent text-indigo-600 rounded-full "
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    @error('search')
                        <span
                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block  text-left mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </form>

            <!-- Choose Pagination -->
            <div class="flex items-center">
                <label class="me-2">Result(s) by page</label>
                <select
                    class="py-2 px-4 pe-9 block w-20 border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-non cursor-pointer"
                    wire:model.live="resultsPerPage">
                    <option {{ $resultsPerPage === 5 ? 'selected' : '' }} value="5">5</option>
                    <option {{ $resultsPerPage === 10 ? 'selected' : '' }} value="10">10</option>
                    <option {{ $resultsPerPage === 25 ? 'selected' : '' }} value="25">25</option>
                    <option {{ $resultsPerPage === 50 ? 'selected' : '' }} value="50">50</option>
                </select>
            </div>

            <!-- Variables Helper -->
            {{-- {{ var_export($selection) }} --}}
            {{-- {{ var_export($isSelectionValid) }}
            {{-- {{ var_export($users) }} --}}
            <!-- Variables Helper -->

            <hr class="my-4 border border-gray-300">

            <!-- Pagination Start -->
            @if ($usersCountSearch > $resultsPerPage)
                <div class="flex justify-center items-center my-5">
                    {{ $users->links() }}
                </div>
            @endif
            <!-- Pagination Start -->


            <div class="flex justify-between mt-3">
                <div class="flex">
                    <button type="button" wire:click="deleteSelectionModal"
                        @if (!$isSelectionValid) disabled @endif
                        class="mb-3 flex items-center btn gap-x-2 bg-red-200 text-red-700  border-red-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-red-700 hover:border-red-700 active:bg-red-700 active:border-red-700 focus:outline-none focus:ring-red-300 @if (!$isSelectionValid) disabled disabled:bg-red-200 @endif">
                        <span>
                            Delete Selected Users
                        </span>
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="text-left w-full whitespace-nowrap border border-gray-300">
                    <thead class="">
                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Role</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($users as $user)
                            <tr>
                                <td class="py-3 px-6">
                                    @if ($user->role !== 'admin')
                                        <div class="flex justify-center items-center">
                                            <input type="checkbox" @if (in_array($user->id, $selection)) checked @endif
                                                wire:model.live="selection" wire:key="selected{{ $user->id }}"
                                                class="w-5 h-5 text-indigo-600 bg-white border-gray-500 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2 cursor-pointer"
                                                id="checked-checkbox" value="{{ $user->id }}" />
                                        </div>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center">{{ $user->id }}</td>
                                <td class="py-3 px-6 text-center">
                                    {{ $user->firstname }}
                                    {{ $user->lastname }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center hover:underline text-indigo-500">
                                        <i class="me-1 fa-solid fa-lg fa-envelope"></i>
                                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </div>
                                </td>
                                <td class="text-center py-3 px-6">
                                    @if ($user->role === 'admin')
                                        <span
                                            class="bg-red-200 px-2 py-1 text-red-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                                            {{ strtoupper($user->role) }}
                                        </span>
                                    @elseif($user->role === 'beneficiary')
                                        <span
                                            class="bg-teal-200 px-2 py-1 text-teal-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                                            {{ strtoupper($user->role) }}
                                        </span>
                                    @elseif($user->role === 'employee')
                                        <span
                                            class="bg-yellow-200 px-2 py-1 text-yellow-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                                            {{ strtoupper($user->role) }}
                                        </span>
                                    @endif
                                </td>
                                <td class="py-3 px-6">
                                    @if ($user->role === 'employee' || $user->role === 'beneficiary')
                                        <div class="flex justify-center items-center">
                                            <a href="{{ route('admin.user.show', $user->id) }}"
                                                class="flex items-center btn gap-x-2 bg-teal-200 text-teal-700 border-teal-600  hover:text-white hover:bg-teal-500 hover:border-teal-700 active:bg-teal-700 active:border-teal-700 focus:outline-none focus:ring-teal-300">
                                                <span class="me-1">
                                                    Access profile
                                                </span>
                                                <i class="fa-solid fa-right-to-bracket"></i>
                                            </a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Number Results Users All Database -->
            @if ($usersCountSearch)
                <span
                    class="mt-3 bg-indigo-200 px-2 py-1 text-indigo-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                    {{ $usersCountSearch }} result(s) found in Database.
                </span>
            @else
                <span
                    class="mt-3 bg-indigo-200 px-2 py-1 text-indigo-700 text-sm font-medium rounded-md inline-block whitespace-nowrap text-center">
                    {{ $usersCountSearch }} result(s) found in Database.
                </span>
            @endif
            <!-- Number Results Users All Database -->


            <!-- Pagination Start -->
            @if ($usersCountSearch > $resultsPerPage)
                <hr class="my-4 border border-gray-300">
                <div class="flex justify-center items-center my-5">
                    {{ $users->links() }}
                </div>
            @endif
            <!-- Pagination Start -->
        </div>
    </div>
</div>
