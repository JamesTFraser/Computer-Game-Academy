<x-guest-layout>
    <x-slot name="header">{{ $page->title }}</x-slot>
    <div>
        {!! nl2br(e($page->content)) !!}
    </div>
</x-guest-layout>
