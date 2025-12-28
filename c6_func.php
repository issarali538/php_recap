<?php
/* 
$books = [
    [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'year' => 1925
    ],
    [
        'title' => '1984',
        'author' => 'George Orwell',
        'year' => 1949
    ],
    [
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'year' => 1960
    ]
];

function filter($books, $callback){
    $filteredBooks = [];
    foreach($books as $book){
        if($callback($book,"title",'The Great Gatsby')){
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}

$filteredBooksArray = filter($books, function($book,$item,$value){
    return $book[$item] == $value;
});

foreach($filteredBooksArray as $book){
    echo $book['title'] . " by " . $book['author'] . " (" . $book['year'] . ")<br>";
}

$itemNames = ['apple', 'banana', 'orange', 'grape', 'banana', 'kiwi'];
function removeItemFromArray($array, $itemToRemove){
    return array_filter($array, function($item) use ($itemToRemove){
        return $item !== $itemToRemove;
    });
}

$updatedItemNames = removeItemFromArray($itemNames, 'orange');
foreach($updatedItemNames as $item){
    echo $item . "<br>";
}
*/