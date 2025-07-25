<x-app-layout>
    <div class="container px-sm-0">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-slot name="header">Create Page</x-slot>

                <form id="postForm" method="POST" action="{{ route('pages.store') }}">
                    @include('pages.partials.form', ['buttonText' => 'Create Page'])
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

