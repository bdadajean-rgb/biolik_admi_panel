<div class="space-y-4 bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900" required>
        @error('name')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">SKU</label>
        <input type="text" name="sku" value="{{ old('sku', $product->sku ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900">
        @error('sku')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Price (€)</label>
        <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $product->price ?? '') }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900" required>
        @error('price')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Quantity</label>
        <input type="number" min="0" name="quantity" value="{{ old('quantity', $product->quantity ?? 0) }}" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900" required>
        @error('quantity')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-medium text-slate-700">Description</label>
        <textarea name="description" rows="4" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2 text-sm text-slate-900">{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')<p class="mt-1 text-xs text-rose-600">{{ $message }}</p>@enderror
    </div>
</div>
