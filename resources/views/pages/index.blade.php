<x-app-layout>
    <div class="container px-sm-0">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a href="{{ route('pages.create') }}">Create new page</a>
                    @foreach($pages as $page)
                        <div>
                            <a href="/{{ $page->slug }}">{{ $page->title }}</a> -
                            <a href="{{ route('pages.edit', $page) }}">Edit </a>
                            <form method="POST" action="{{ route('pages.destroy', $page) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
