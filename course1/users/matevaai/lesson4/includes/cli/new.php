<?php

message("Create new book");
message("---------------");

# TODO validate the rest of the input
$name = readline('Book Name: ');
$author = readline('Author: ');
$genre = readline('Genre: ');
$price = readline('Price: ');

$inStock = null;
while(!in_array($inStock, array('y', 'n'))) {
    $inStock = readline('In stock (y/n): ');
}

$book = array(
    'name' => $name,
    'author' => $author,
    'genre' => $genre,
    'price' => $price,
    'in_stock' => $inStock == 'y' ? true : false,
);

$check = newBook($book);
if (false === $check) {
    message('Error! Book not saved.');
} else {
    message('Book saved successfully.');
}
