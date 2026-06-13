<x-slot name="title">{{ $title ?? 'Admin' }}</x-slot>
<x-slot name="subtitle">{{ $subtitle ?? 'Manage the platform' }}</x-slot>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} Admin</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            /* Minimal fallback tweaks to ensure readable layout if Tailwind CDN is blocked */
            body { background: #f8fafc; color: #0f172a; font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
            a { color: inherit; }
            .rounded-lg { border-radius: 0.5rem; }
            .bg-white { background: #fff; }
            .border { border: 1px solid #e6e7ea; }
            .text-slate-900 { color: #0f172a; }
        </style>
    @endif
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    <div class="min-h-screen flex">
        <aside class="w-72 bg-white border-r border-slate-200 p-6">
            <div class="mb-10">
                <a href="{{ route('admin.products.index') }}" class="text-lg font-semibold text-slate-900">Biloki Admin</a>
                <p class="text-sm text-slate-500 mt-1">{{ __('admin.products_clients') }}</p>
            </div>

            <nav class="space-y-2">
                <a href="{{ route('admin.products.index') }}" class="block rounded-lg px-4 py-2 text-slate-700 hover:bg-slate-100 {{ request()->routeIs('admin.products.*') ? 'bg-slate-100 font-semibold' : '' }}">Products</a>
                <a href="{{ route('admin.clients.index') }}" class="block rounded-lg px-4 py-2 text-slate-700 hover:bg-slate-100 {{ request()->routeIs('admin.clients.*') ? 'bg-slate-100 font-semibold' : '' }}">Clients</a>
            </nav>
        </aside>

        <main class="flex-1 p-6">
            <div class="mb-6 flex items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-semibold text-slate-900">{{ $title ?? 'Admin' }}</h1>
                    <p class="text-sm text-slate-500">{{ $subtitle ?? 'Manage products, stock and clients' }}</p>
                </div>
                <div class="text-xs text-slate-500">Laravel 13 | SQLite</div>
            </div>

            @if (session('success'))
                <div class="mb-4 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-sm text-emerald-800">{{ session('success') }}</div>
            @endif

            {{ $slot }}
        </main>
    </div>
</body>
</html>
