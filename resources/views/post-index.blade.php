@extends('layouts.main-layout')
@section('content')

  <div class="card">
    <div class="card-header">
      <div>
        Posts
      </div>
      <div>
        <input id="best_of" type="checkbox" name="best_of">
        <label for="best_of">Best Of</label>
      </div>
    </div>
    <div class="card-body">
      <ul id="posts">
        {{-- @foreach ($posts as $post)
          <li>
            <h2>
              {{ $post -> title }}:
              {{ $post -> like }}
            </h2>
          </li>
        @endforeach --}}
      </ul>
    </div>

  </div>

  {{-- @foreach ($posts as $post)
    {{ $post -> title }}

  @endforeach --}}
@endsection
