@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <a class="btn btn-primary" href="{{route('articles.create')}}">New Burger</a>
        <a class="btn btn-secondary" href="{{route('articles.deleted')}}">Deleted burgers</a>

        {{$articles->links()}}
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Spice</th>
                <th>gluten</th>
                <th>Vegan</th>
                <th>Vegetarian</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->price}}</td>
                        <td>{{$article->rating}}</td>
                        <td>@if( $article->glu == 1) ✔️ @else ❌ @endif</td>
                        <td>@if( $article->vegan == 1) ✔️ @else ❌ @endif</td>
                        <td>@if( $article->vegetarian == 1) ✔️ @else ❌ @endif</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                            <div class="join">
                                <a href="{{route('public.article', ['article' => $article])}}" class="btn btn-info join-item">View</a>
                                <a href="{{route('articles.edit', ['article' => $article])}}" class="btn btn-warning join-item">Edit</a>
                                <input type="submit" class="btn btn-error join-item" value="Delete" form="delete-{{$article->id}}">
                            </div>
                            <form id="delete-{{$article->id}}" action="{{route('articles.destroy', ['article' => $article])}}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
