<x-app-layout>
    <div class="container px-sm-0">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a class="btn btn-secondary" href="{{ route('pages.create') }}">Create new page</a>
                <table class="w-100">
                    @foreach($pages as $page)
                        <tr>
                            <td><a href="/{{ $page->slug }}">{{ $page->title }}</a></td>
                            <td><a class="btn btn-secondary" href="{{ route('pages.edit', $page) }}">Edit </a></td>
                            <td>
                                <form method="POST" action="{{ route('pages.destroy', $page) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
