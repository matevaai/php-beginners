<?php
$index = null;
while(!is_numeric($index)) {
    $index = readline('Enter book ID to edit (or type \'q\' to exit): ');
    if ($index == 'q') {
		message('Bye');
		exit;
	}
}

$index = (int) $index - 1;
$book = getBook($index);
if (null === $book) {
	message('Book not found.');
	exit();
}

while(true) {
	$choice = editFieldPrompt();
	if($choice == 'q') {
		break;
	}
	$value = editValuePrompt();

	switch ($choice) {
		case '1':
			$book['name'] = $value;
			break;
		case '2':
			$book['autor'] = $value;
			break;
		case '3':
			$book['genre'] = $value;
			break;
		case '4':
			$book['Price'] = $value;
			break;
		case '5':
			$book['in stock'] = $value ? true : false;
			break;
		
	}

	$check = saveBook($book, $index);
	if ($check === false || $check === 0) {
		message('Error: Book not saved.');
	} else {
		message('Changes saved.');
	}
}

message('Bye');

function editFieldPrompt()
{
	do {
		message('1. Name');
		message('2. Author');
		message('3. Genre');
		message('4. Price');
		message('5. In stock');
	    $choice = readline('Please enter field to edit (type \'q\' to exit): ');
		$loop = !is_numeric($choice) || (int) $choice < 1 ||  (int) $choice > 5;

	    if ($choice == 'q') {
	    	$loop = false;	
	    }
	}
	while($loop);

	return $choice;
}

function editValuePrompt()
{
	do {
		$value = readline('Enter new value: ');
	} while (trim($value) == '');
	return $value;
}