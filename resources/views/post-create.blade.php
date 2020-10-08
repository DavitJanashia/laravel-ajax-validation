@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post - create</div>
                <div class="card-body">

                  <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">TITLE</label> <br>
                      <input class="@error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}">
                      @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="body">BODY</label> <br>
                      <input class="@error('body') is-invalid @enderror" type="text" name="body" value="{{ old('body') }}">
                      @error('body')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="like">LIKE</label> <br>
                      <input class="@error('like') is-invalid @enderror" type="number" name="like" value="{{ old('like') }}">
                      @error('like')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="dislike">DISLIKE</label> <br>
                      <input class="@error('dislike') is-invalid @enderror" type="number" name="dislike" value="{{ old('dislike') }}">
                      @error('dislike')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="tag">TAG</label> <br>
                      <input class="@error('tag') is-invalid @enderror" type="text" name="tag" value="{{ old('tag') }}">
                      @error('tag')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">SAVE</button>

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
