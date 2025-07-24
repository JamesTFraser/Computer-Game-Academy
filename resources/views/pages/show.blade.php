<x-app-layout>
    <div class="container px-sm-0">
        <div class="row">
            <div class="page-content col-md-8 mx-md-auto">
                <h2 class="mb-3 text-uppercase">{{ $page->title }}</h2>
                {!! \Illuminate\Support\Str::markdown($page->content) !!}
            </div>
        </div>
    </div>
</x-app-layout>
