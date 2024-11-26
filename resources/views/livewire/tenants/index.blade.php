<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Tenants List</h1>

    <!-- Display tenants in a table -->
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">Name</th>
                <th class="px-4 py-2 border-b">Room</th>
                <th class="px-4 py-2 border-b">Contact</th>
                <th class="px-4 py-2 border-b">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenants as $tenant)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $tenant->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $tenant->room->room_number }}</td>
                    <td class="px-4 py-2 border-b">{{ $tenant->contact }}</td>
                    <td class="px-4 py-2 border-b">{{ $tenant->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination links -->
    <div class="mt-4">
        {{ $tenants->links() }} <!-- This will show pagination links -->
    </div>
</div>


