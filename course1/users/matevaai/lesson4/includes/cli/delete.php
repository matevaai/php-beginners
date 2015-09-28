<?php

$index = null;
while(!is_numeric($index)) {
    $index = readline('Enter book ID to delete: ');
}

$check = deleteBook((int) $index - 1);

if (false === $check) {
    message('Error! Book not deleted.');
} else {
    message('Book deleted successfully.');
}
