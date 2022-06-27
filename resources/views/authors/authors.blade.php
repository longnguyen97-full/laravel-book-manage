
<table>
	<tr>
		<th>NO</th>
		<th>Name</th>
		<th>Bio</th>
	</tr>
	@foreach ($authors as $author)
	<tr>
		<td>{{ $author->id }}</td>
		<td>{{ add_filter_link($author->id, $author->name) }}</td>
		<td>{{ $author->bio }}</td>
	</tr>
	@endforeach
</table>
