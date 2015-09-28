<?php 
$index = null;
while(!is_numeric($index)) {
    $index = readline('Enter book ID to view: ');
}

$index = (int) $index - 1;
$book = getBook($index);
if (null === $book) {
	message('Book not found.');
	exit();
}

message('Name: '.$book['name']);
message('Author: '.$book['author']);
message('Genre: '.$book['genre']);
message('Price: '.$book['price']);
message('In stock: '.($book['in_stock'] == true ? 'Yes' : 'No'));
