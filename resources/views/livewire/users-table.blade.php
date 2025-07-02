<div>
    @livewire('edit-user-modal')

    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 ">Users Management</h1>

        <input type="text" wire:model.live.debounce.300ms="search"
               class="w-full mb-4 px-4 py-2 border rounded mx-auto"
               placeholder="Search by name or email">

        <table class="min-w-max mx-auto bg-white border rounded shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border-b text-left">Name</th>
                    <th class="px-4 py-2 border-b text-left">Email</th>
                    <th class="px-4 py-2 border-b text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                    <td class="px-4 py-2 border-b">
                        <button class="text-blue-600 hover:underline mr-4"
                            wire:click="$dispatch('editUser', { id: {{ $user->id }} })">
                            Edit
                        </button>
                        <button class="text-red-600 hover:underline"
                            wire:click="delete({{ $user->id }})"
                            onclick="confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
</div>
