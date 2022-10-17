@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-500 text-white p-3 px-6 rounded bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
