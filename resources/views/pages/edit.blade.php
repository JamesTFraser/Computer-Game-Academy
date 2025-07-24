<x-app-layout>
    <x-slot name="header">Edit Page</x-slot>

    <form method="POST" action="{{ route('pages.update', $page) }}">
        @method('PUT')
        @include('pages.partials.form', ['buttonText' => 'Update Page'])
    </form>
</x-app-layout>
