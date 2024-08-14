<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- <h3 class="text-2xl">Ini adalah halaman Blog Page</h3> --}}

    <article class="py-8 max-w-screen-md">
        <h2 class="text-3xl mb-2 font-semibold tracking-tight text-slate-800">{{ $post ['title'] }}</h2>
        <div class="text-slate-500 text-base mb-2">
            <a href="/authors/{{ $post->author->username }}">
                {{ $post->author->name }}
            </a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post ['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">
            &laquo;  Back to posts
        </a>
    </article>

</x-layout>