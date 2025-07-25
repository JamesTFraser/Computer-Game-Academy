<x-app-layout>
    <div class="container px-sm-0">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <x-slot name="header">Edit Page</x-slot>

                <form id="postForm" method="POST" action="{{ route('pages.update', $page) }}">
                    @method('PUT')
                    @include('pages.partials.form', ['buttonText' => 'Update Page'])
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
