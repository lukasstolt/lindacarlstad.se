
@extends('layouts.app')

@section('content')

<h1 class="text-center">Nyheter</h1>

<br>

<h4 class="text-center">Facebook-nyheter</h4>

<hr>

<div class="row">
  @foreach ($facebookData as $post)
    <div class='col-sm-4 mb-5 justify-content-center mx-auto'>
      <div class='card bg-dark h-100'>
        <div class='card-body d-flex flex-column'>
          @if (strlen($post->getField('caption')) === 0)
            <h5 class="card-title">Linda Carlstad</h5>
          @else
            <h5  class="card-title">{{$post->getField('caption')}}</h5>
          @endif

          <small class="mb-3">{{$post->getField('created_time')->format('Y-m-d H:i:s')}}</small>

          <p>{{substr($post->getField('message'), 0, 200)}}</p>

          <button type="button" class="btn btn-red mt-auto" href="{{$post->getField('permalink_url')}}" name="läs mer">Läs mer</button>
        </div>
      </div>
    </div>
  @endforeach
</div>

<hr>
@endsection
