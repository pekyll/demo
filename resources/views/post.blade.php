<x-layout :title="$post->title">

    <h1 class="text-red-500 text-2xl">{{ $post->title }}</h1>

    <div class="mt-5 leading-7">
        {!! $post->content !!}
    </div>
</x-layout>
