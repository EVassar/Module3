@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        {{$articles->links()}}
        <div class="flex flex-row flex-wrap">
            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card mx-3 bg-base-100 shadow-xl h-full">
                        @if($article->images->count() === 1)
                            <figure><img src="{{$article->image->path}}"/></figure>
                        @elseif($article->images->count() > 1)
                            <div class="h-96 carousel carousel-vertical rounded-box">
                                @foreach($article->images as $image)
                                    <div class="carousel-item h-full">
                                        <img src="{{$image->path}}" />
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p>{{ $article->snippet }}</p>
                            <div class="stat">
                                <div class="stat-desc"><b>Hind: </b>{{ $article->price }} €</div>
                                <div class="stat-desc"><b>Teravus: </b>{{ $article->rating }}</div>
                                <div class="stat-desc"><b>Gluten Free: </b>@if( $article->glu == 1) ✔️ @else ❌ @endif</div>
                                <div class="stat-desc"><b>Vegan: </b>@if( $article->vegan ) ✔️ @else ❌ @endif</div>
                                <div class="stat-desc"><b>Vegetarian: </b>@if( $article->vegetarian ) ✔️ @else ❌ @endif</div>
                            </div>
                            <div class="card-actions justify-end">
                                <a href="{{route('public.article', ['article' => $article])}}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
