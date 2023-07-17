@extends('layouts.dashboard')

@section('content')
<section>
  <h2>Images</h2>
  <p>
    <a href="/dashboard/images/create"><button class="btn">Upload Image</button></a>
  </p>

  <table class="table">    
    <thead>
      <tr><td>Title</td><td>Year</td><td>Description</td><td>Type</td><td>&nbsp;</td></tr>
    </thead>                   
    @each('dashboard.images.image_tr', $images, 'image')
  </table>    
</section>   
@endsection

@section('page-scripts')

@endsection
