@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Title</span>

                        </label>
                        <input name="title" type="text" value="{{$article->title}}" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror" />
                        @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>

                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Kirjeldus</span>
                        </label>
                        <textarea name="body" class="textarea textarea-bordered @error('title') textarea-error @enderror" placeholder="Content here">{{$article->body}}</textarea>
                        @error('body')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Toote hind</span>

                        </label>
                        <input name="price" type="text" value="{{$article->price}}"
                               class="input input-bordered w-full @error('title') input-error @enderror"/>
                        @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>

                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Vegan</span>
                        </label>
                        <input type="hidden" name="vegan" value="0">
                        <input type="checkbox" name="vegan" id="vegan" value="1" class="checkbox" />
                        @error('vegan')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Vegetarian</span>
                        </label>
                        <input type="hidden" name="vegetarian" value="0">
                        <input type="checkbox" name="vegetarian" value="1" id="vegetarian" class="checkbox" />
                        @error('vegan')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Gluten Free</span>
                        </label>
                        <input type="hidden" name="glu" value="0">
                        <input type="checkbox" name="glu" value="1" id="glu" class="checkbox" />
                        @error('vegan')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Teravus</span>
                        </label>
                        <input name="rating" value="{{$article->rating}}" type="number"
                               class="input input-bordered w-full @error('rating') input-error @enderror" min="1"
                               max="5"/>
                        @error('body')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection
