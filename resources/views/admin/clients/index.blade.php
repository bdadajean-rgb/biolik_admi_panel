<x-admin-layout title="Clients" subtitle="Manage registered clients and contact details">
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
        <div>
            <h2 class="text-lg font-semibold text-slate-900">Clients</h2>
            <p class="text-sm text-slate-500">Store client information and company contacts.</p>
        </div>
        <a href="{{ route('admin.clients.create') }}" class="inline-flex items-center rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">New client</a>
    </div>

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-slate-200 text-sm">
            <thead class="bg-slate-50 text-slate-900">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold">Name</th>
                    <th class="px-4 py-3 text-left font-semibold">Email</th>
                    <th class="px-4 py-3 text-left font-semibold">Phone</th>
                    <th class="px-4 py-3 text-left font-semibold">Company</th>
                    <th class="px-4 py-3 text-left font-semibold">Updated</th>
                    <th class="px-4 py-3 text-right font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 bg-white">
                @forelse ($clients as $client)
                    <tr>
                        <td class="px-4 py-3">{{ $client->name }}</td>
                        <td class="px-4 py-3">{{ $client->email ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $client->phone ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $client->company ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $client->updated_at->diffForHumans() }}</td>
                        <td class="px-4 py-3 text-right">
                            <div class="inline-flex gap-2">
                                <a href="{{ route('admin.clients.edit', $client) }}" class="rounded-lg bg-slate-900 px-3 py-1.5 text-xs font-semibold text-white hover:bg-slate-700">Edit</a>
                                <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Delete this client?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-lg bg-rose-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-rose-500">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-sm text-slate-500">No clients found yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $clients->links() }}</div>
</x-admin-layout>
