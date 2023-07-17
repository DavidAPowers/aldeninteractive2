@extends('layouts.dashboard')

@section('content')
<section>
<h2>{{$formTitle}}</h2>
<form action="{{$formUrl}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="article_title">Title</label>
    <input name="article_title" type="input" class="form-control" id="article_title" placeholder="Article Title" value="{{$article->title}}">
  </div>

  <div class="form-group">
    <label for="article_slug">Slug</label>
    <input name="article_slug" type="input" class="form-control" id="article_slug" placeholder="Article Slug" value="{{$article->slug}}">
  </div>

  <div class="form-group">
    <label for="article_published_on">Published On</label>
    <input name="article_published_on" type="input" class="form-control" id="article_published_on" placeholder="Article Published On" value="{{$article->published_on}}">
  </div>

  <div class="form-group">
    <label for="article_summary">Summary</label>
    <input maxlength="255"  name="article_summary" type="input" class="form-control" id="article_summary" placeholder="Article Summary" value="{{$article->description}}">
  </div>
  
  <div class="form-group">
    <label for="article_img_url">Main Image URL</label>
    <input maxlength="255"  name="article_img_url" type="input" class="form-control" id="article_img_url" placeholder="Article Main Image URL" value="{{$article->img_url}}">
  </div>

  <div class="form-group">
    <label for="article_thumb_url">Thumbnail URL</label>
    <input maxlength="255"  name="article_thumb_url" type="input" class="form-control" id="article_thumb_url" placeholder="Article Thumbnail URL" value="{{$article->thumb_url}}">
  </div>
  
  <div class="form-group">
    <label for="article_fulltext">Article HTML</label>
    <textarea name="article_fulltext" class="form-control" id="article_fulltext" placeholder="Article Full Text HTML" style="height:320px">{{$article->fulltext}}</textarea>
  </div> 
 
  <br>
  @include('molecules.submit')
  @include('molecules.cancel',['url'=>'/dashboard/articles'])

</form>                   
</section>
@endsection


@section('page-scripts')
<script>
$(document).ready(function() {
  $('#article_fulltext').summernote();
});
</script>
@endsection
