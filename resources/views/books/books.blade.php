
<table>
	<tr>
		<th>NO</th>
		<th>Title</th>
		<th>Content</th>
		<th>Published Year</th>
		<th>Author</th>
		<th>Category</th>
	</tr>
	@foreach ($books as $book)
	<tr>
		<td>{{ $book->id }}</td>
		<td>{{ add_filter_link($book->id, $book->title) }}</td>
		<td>{{ $book->content }}</td>
		<td>{{ $book->published_year }}</td>
		<td>{{ $book->author_id }}</td>
		<td>{{ $book->category_id }}</td>
	</tr>
	@endforeach
</table>
