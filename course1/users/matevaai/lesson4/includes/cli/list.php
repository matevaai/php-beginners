<?php

message('Book list');
message('---------');

$books = getBooks();
foreach ($books as $index => $book) {
    $message = ($index + 1).'. ';
    $message .= $book['name'].' ('.$book['price'].')';
    message($message);
}
