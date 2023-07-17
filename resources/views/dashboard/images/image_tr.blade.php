<tr>
	<td><a href="/dashboard/images/{{$image->id}}">{{$image->title}}</a></td>
	<td>{{$image->year}}</td>
	<td>{{$image->description}}</td>
	<td>{{$image->img_type}}</td>
	<td>
		<a href="{{ Storage::disk('s3')->url($image->filename())}}" target="_blank">View</a> |
		<a href="/dashboard/images/delete/{{ $image->id }}">Delete</a>

	</td>
</tr>