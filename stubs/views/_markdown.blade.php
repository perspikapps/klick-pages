<x-dynamic-component :component="config('pages.views.layout')">
    <div class="flex justify-center w-full px-4 my-16">
        <div class="prose prose-indigo">
            <h1>{{ $page->title }}</h1>

            {!! Str::markdown($page->content) !!}
        </div>
    </div>
</x-dynamic-component>
