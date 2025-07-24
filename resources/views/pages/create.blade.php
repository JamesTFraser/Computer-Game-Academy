<x-app-layout>
    <x-slot name="header">Create Page</x-slot>

    <form method="POST" action="{{ route('pages.store') }}">
        @include('pages.partials.form', ['buttonText' => 'Create Page'])
    </form>
</x-app-layout>

