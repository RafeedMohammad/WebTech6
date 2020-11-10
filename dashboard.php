<?php
	$books = simplexml_load_file("books.xml");
	$data = $books->book;
	$number = "";
	$name = "";
	$publisher = "";
	$isbn = "";
	$price = "";
	$img = "";

	$i = 0;

	for( ;i<count($data); $i++)
	{
		$number = $data[$i]->number;
		$name = $data[$i]->name;
		$publisher = $data[$i]->publisher;
		$isbn = $data[$i]->isbn;
		$price = $data[$i]->price;
		$img = $data[$i]->img;

		echo "<tr>
			<td>$number</td>
			<td>$name</td>
			<td>$publisher</td>
			<td>$isbn</td>
			<td>$price</td>
			<td><img src='$img'</td>

		";

	}
?>


