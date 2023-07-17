@extends('layouts.dashboard')

@section('content')
<section>
<h2>Articles</h2>
<p>
<a href="/dashboard/articles/create">
	@include('molecules.button',['btnText'=>'Create Article'])
</a>
</p>
</section>

<section>
<table class="w3-table w3-striped w3-bordered">    
  <thead>
      <tr><td>Title</td>
      <td>Published</td>
      <td>Summary</td><td>Slug</td><td>&nbsp;</td></tr>
  </thead>                   
 
    @foreach ($articles as $article)
	<tr>
		<td><a class="under-link" href="/dashboard/articles/{{$article->id}}">{{$article->title}}</a></td>
		<td>{{$article->published_on}}</td>
		<td>{{$article->description}}</td>
		<td>{{$article->slug}}</td>
		<td><a href="/dashboard/articles/delete/{{$article->id}}">Delete</a></td>
	</tr>
	@endforeach	
</table>     
</section>

@endsection
