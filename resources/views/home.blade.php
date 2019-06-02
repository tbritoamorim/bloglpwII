@extends('templates.default')
@push('style')
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
@endpush
@section('content')
    @if ($posts->count())
        @foreach ($posts as $post)
        <article>
                <h2>{{ $post->title }}</h2>
                <p class="data">Publicado em: {{ $post->created_at->diffForHumans() }}</p>
                <p>{{ $post->body }}</p>
                <?php
                    $days = $post->days_left;
                ?>      
                @for ($i = 0; $i < $days; $i++)
                    <img src='http://aux3.iconspalace.com/uploads/580440734.png' width='20'>
                @endfor
            </article>
        @endforeach
    @endif
    
@endsection
