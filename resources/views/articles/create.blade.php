@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Toote nimi</span>

                        </label>
                        <input name="title" type="text" placeholder="Toote nimi"
                               class="input input-bordered w-full @error('title') input-error @enderror"/>
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
                        <textarea name="body"
                                  class="textarea textarea-bordered @error('title') textarea-error @enderror"
                                  placeholder="Kirjeldus"></textarea>
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
                        <input name="price" type="text" placeholder="Toote hind"
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
                        <input name="rating" type="number"
                               class="input input-bordered w-full @error('rating') input-error @enderror" min="1"
                               max="5"/>
                        @error('body')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Images</span>
                        </label>
                        <input name="images[]" type="file" multiple
                               class="file-input input-bordered w-full @error('images.*') input-error @enderror"
                               accept="image/*"/>
                        @error('images.*')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <input type="submit" value="Create" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection
