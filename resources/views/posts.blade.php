<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- <h3 class="text-2xl">Ini adalah halaman Blog Page</h3> --}}

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-slate-500">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="text-3xl mb-2 font-semibold tracking-tight text-slate-800">{{ $post ['title'] }}</h2>
            </a>
            <div class="">
                By
                <a href="/authors/{{ $post->author->username }}" class="hover:underline text-slate-500 text-base mb-2">
                    {{ $post->author->name }}
                </a>
                in
                <a href="/categories/{{ $post->category->name }}" class="hover:underline text-slate-500 text-base mb-2">{{ $post->category->name }}</a>
                | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post ['body'], 150) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
    


</x-layout>