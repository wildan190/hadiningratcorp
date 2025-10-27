@extends('layouts.app')

@section('title')
    {{ strip_tags($post['title']['rendered']) }} - Hadiwijaya Bore Pile
@endsection

@section('content')
<article>
    {{-- Article Header --}}
    <header class="bg-brand-blue text-white pt-32 pb-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold font-title mb-6">
                    {!! $post['title']['rendered'] !!}
                </h1>
                <div class="flex items-center text-gray-200">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    {{ \Carbon\Carbon::parse($post['date'])->locale('id')->isoFormat('DD MMMM YYYY') }}
                </div>
            </div>
        </div>
    </header>

    {{-- Featured Image --}}
    @if(isset($post['_embedded']['wp:featuredmedia'][0]['source_url']))
    <div class="relative -mt-16 mb-8">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-xl">
                <img 
                    src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] }}" 
                    alt="{{ strip_tags($post['title']['rendered']) }}"
                    class="w-full h-full object-cover"
                >
            </div>
        </div>
    </div>
    @endif

    {{-- Article Content --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="prose prose-lg max-w-none">
            {!! $post['content']['rendered'] !!}
        </div>
    </div>

    {{-- Back to Blog Link --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <a href="{{ route('blog.index') }}" class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Kembali ke Blog
        </a>
    </div>
</article>
@endsection