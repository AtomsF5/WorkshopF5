<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- <x-workshopEdit/> --}}

    <a href="{{ route('workshopform') }}" class=" mt-2 block p-3 mx-auto bg-vermilion-500 text-alabaster-500 rounded w-40 text-center">Create Workshop </a>


</x-app-layout>
