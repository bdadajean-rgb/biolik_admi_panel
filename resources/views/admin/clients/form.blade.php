<div class="space-y-4 bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Name</label>
        <input type="text" name="name" value="{{ old('name', $client->name ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900" required>
        @error('name')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>

    <div class="grid gap-4 lg:grid-cols-2">
        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700">Email</label>
            <input type="email" name="email" value="{{ old('email', $client->email ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900">
            @error('email')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="mb-2 block text-sm font-medium text-slate-700">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $client->phone ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900">
            @error('phone')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
        </div>
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Company</label>
        <input type="text" name="company" value="{{ old('company', $client->company ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900">
        @error('company')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Address</label>
        <textarea name="address" rows="4" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900">{{ old('address', $client->address ?? '') }}</textarea>
        @error('address')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>
</div>
