@csrf
<div>
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $page->title ?? '') }}">
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>

<div>
    <label>Slug</label>
    <input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}">
    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
</div>

<div>
    <x-input-label for="summary">{{ __('Summary') }}</x-input-label>
    <textarea name="summary">{{ old('summary', $page->summary ?? '') }}</textarea>
    <x-input-error :messages="$errors->get('summary')" class="mt-2" />
</div>

<div>
    <label>Content</label>
    <textarea name="content">{{ old('content', $page->content ?? '') }}</textarea>
    <x-input-error :messages="$errors->get('content')" class="mt-2" />
</div>

<div>
    <x-input-label for="is_published">{{ __('Is Published') }}</x-input-label>
    <select name="is_published">
        <option {{ old('is_published', isset($page) ? $page->is_published : '') == '0' ? 'selected' : '' }} value="0">No</option>
        <option {{ old('is_published', isset($page) ? $page->is_published : '') == '1' ? 'selected' : '' }} value="1">Yes</option>
    </select>
    <x-input-error :messages="$errors->get('is_published')" class="mt-2" />
</div>


<button type="submit">{{ $buttonText }}</button>
