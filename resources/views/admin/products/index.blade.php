<x-admin-layout title="Products" subtitle="Manage product stock and catalog">
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
        <div>
            <h2 class="text-lg font-semibold text-slate-900">Products</h2>
            <p class="text-sm text-slate-500">Manage stock quantities, pricing and product details.</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="inline-flex items-center rounded-lg bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">New product</a>
    </div>

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-slate-200 text-sm">
            <thead class="bg-slate-50 text-slate-900">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold">Name</th>
                    <th class="px-4 py-3 text-left font-semibold">SKU</th>
                    <th class="px-4 py-3 text-left font-semibold">Price</th>
                    <th class="px-4 py-3 text-left font-semibold">Quantity</th>
                    <th class="px-4 py-3 text-left font-semibold">Updated</th>
                    <th class="px-4 py-3 text-right font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 bg-white">
                @forelse ($products as $product)
                    <tr>
                        <td class="px-4 py-3">{{ $product->name }}</td>
                        <td class="px-4 py-3">{{ $product->sku ?? '-' }}</td>
                        <td class="px-4 py-3">€{{ number_format($product->price, 2) }}</td>
                        <td class="px-4 py-3">{{ $product->quantity }}</td>
                        <td class="px-4 py-3">{{ $product->updated_at->diffForHumans() }}</td>
                        <td class="px-4 py-3 text-right">
                            <div class="inline-flex gap-2">
                                <a href="{{ route('admin.products.edit', $product) }}" class="rounded-lg bg-slate-900 px-3 py-1.5 text-xs font-semibold text-white hover:bg-slate-700">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-lg bg-rose-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-rose-500">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-sm text-slate-500">No products found yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $products->links() }}</div>
</x-admin-layout>
