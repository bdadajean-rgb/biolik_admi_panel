<x-admin-layout title="Edit Client" subtitle="Update client information">
    <form action="{{ route('admin.clients.update', $client) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        @include('admin.clients.form')

        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('admin.clients.index') }}" class="rounded-lg border border-slate-200 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Cancel</a>
            <button type="submit" class="rounded-lg bg-slate-900 px-5 py-2 text-sm font-semibold text-white hover:bg-slate-700">Update client</button>
        </div>
    </form>
</x-admin-layout>
