<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-toastr status="session('status')" />
                    <div class="flex justify-end mb-2">
                        <button onclick="location.href='{{ route('owner.images.create') }}'"  class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">新規登録</button>
                    </div>
                   {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
