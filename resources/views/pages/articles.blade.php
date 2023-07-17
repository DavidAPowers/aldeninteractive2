@extends('layouts.default')

@section('article')  
<section>
<h2>Blog & News</h2>
</section>    

    @foreach ($articles as $article)


<section>

	  <div class="portfolio-entry">
		<div class="timeline">
			<img class="responsive" src="{{$article->thumb_url}}" />
		</div>
		<div class="text">
			<a href="/pages/articles/{{$article->slug}}"><h4 class="cv-heading">{{$article->title}}</h4></a>
			<p>{{$article->description}}</p>
			<p>
				<a href="/pages/articles/{{$article->slug}}">
					Read more >>								
				</a>
			</p>
		</div>
	  </div> 


		
</section>
	@endforeach	

@endsection

