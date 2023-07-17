@extends('layouts.default')

@section('article')  
    
<section>
	<h1 class="blog-title">{{$article->title}}</h1>
	<div>{!! $article->fulltext !!}</div>

</section>

@endsection

