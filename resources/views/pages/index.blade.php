<x-app-layout>
    <a href="{{ route('pages.create') }}">Create new page</a>
    <ul>
        @foreach($pages as $page)
            <liv>
                <a href="/{{ $page->slug }}">{{ $page->title }}</a> -
                <a href="{{ route('pages.edit', $page) }}">Edit </a>
                <form method="POST" action="{{ route('pages.destroy', $page) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </liv>
        @endforeach
    </ul>
</x-app-layout>
