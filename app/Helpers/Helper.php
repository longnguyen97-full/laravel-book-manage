<?php
if ( !function_exists('add_filter_link') )
{
	function add_filter_link($id = 0, $content = '')
	{
		?>
		<a href="books/<?php echo $id; ?>"><?php echo $content; ?></a>
		<?php
	}
}
