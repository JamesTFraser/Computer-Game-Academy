<x-app-layout>
    <div class="container px-sm-0">
        <div class="row row-cols-1 row-cols-lg-3">
            @foreach ($pages->all() as $page)
                @include('components.column', ['page' => $page])
            @endforeach
        </div>
    </div>
</x-app-layout>
