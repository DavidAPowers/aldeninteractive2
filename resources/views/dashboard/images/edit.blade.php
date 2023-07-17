@extends('layouts.dashboard')

@section('content')
<section>
<h2>{{$formTitle}}</h2>
<form action="{{$formUrl}}" method="POST" enctype="multipart/form-data">
    @csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  @if($image->url != "")
  <div>
    <label>Current Image</label><br>
    <img class="img-fluid" src="{{Storage::cloud()->url($image->url)}}" />
  </div>
  <br>
  @endif


  <div class="form-group">
    <label for="image_file">Select Image File</label>
    <input type="file" class="form-control-file" id="image_file" name="image_file">
  </div>


  <div class="form-group">
    <label for="image_type">Type</label>
    <select name="image_type" class="form-control" id="image_type">
      
      @foreach($validTypes as $k => $v)
      <option value="{{$v}}">{{$k}}</option>
      @endforeach
<!--       
      <option value="gallery">Gallery</option>
      <option value="hero">Hero</option>
      <option value="events/preview">Event Preview</option>
      <option value="speakers/thumb">Speaker Thumb</option>
      <option value="featured">Featured</option>
      <option value="misc">Misc.</option>
 -->      
    </select>  
  </div>



  <div class="form-group">
    <label for="image_title">Title</label>
    <input name="image_title" type="input" class="form-control" id="image_title" placeholder="Image Title" value="{{$image->title}}">
  </div>


  <div class="form-group">
    <label for="image_description">Description</label>
    <input maxlength="255"  name="image_description" type="input" class="form-control" id="image_description" placeholder="Image Description" value="{{$image->description}}">
  </div>



  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  <br><br>
  @include('helpers.cancel',['url'=>'/dashboard/images'])

  <br>
</form>                   
</section>
@endsection
