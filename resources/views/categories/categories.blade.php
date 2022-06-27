
<table>
	<tr>
		<th>NO</th>
		<th>Category</th>
	</tr>
	@foreach ($categories as $category)
	<tr>
		<td>{{ $category->id }}</td>
		<td>{{ add_filter_link($category->id, $category->category) }}</td>
	</tr>
	@endforeach
</table>
