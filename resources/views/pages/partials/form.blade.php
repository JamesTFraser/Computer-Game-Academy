@csrf
<x-input-label for="title">{{ __('Title') }}</x-input-label>
<x-text-input type="text" name="title" value="{{ old('title', $page->title ?? '') }}"/>
<x-input-error :messages="$errors->get('title')" class="mt-2" />

<x-input-label for="slug">{{ __('Slug') }}</x-input-label>
<x-text-input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}"/>
<x-input-error :messages="$errors->get('slug')" class="mt-2" />

<x-input-label for="summary">{{ __('Summary') }}</x-input-label>
<x-text-area name="summary" rows="6" value="{{ old('summary', $page->summary ?? '') }}" />
<x-input-error :messages="$errors->get('summary')" class="mt-2" />

<x-input-label for="content">{{ __('Content') }}</x-input-label>
<x-text-area name="content" rows="6" value="{{ old('content', $page->content ?? '') }}" />
<x-input-error :messages="$errors->get('content')" class="mt-2" />

<x-input-label for="is_published">{{ __('Is Published') }}</x-input-label>
<select name="is_published">
    <option {{ old('is_published', isset($page) ? $page->is_published : '') == '0' ? 'selected' : '' }} value="0">No</option>
    <option {{ old('is_published', isset($page) ? $page->is_published : '') == '1' ? 'selected' : '' }} value="1">Yes</option>
</select>
<x-input-error :messages="$errors->get('is_published')" class="mt-2" />

<x-primary-button>{{ $buttonText }}</x-primary-button>
