<?php 


$books = [
    ["id" => "1", "title" => "bangla", "author" => "samad hossain"],
    ["id" => "2", "title" => "bangla 2nd part", "author" => "samad hossain"],
    ["id" => "3", "title" => "english", "author" => "Rakibul islam "],
    ["id" => "4", "title" => "physics", "author" => "jafor islam"],
    ["id" => "5", "title" => "physics", "author" => "Ronju Mia"],
];



function sortByAuthor($book1, $book2){
    if (strlen($book1["author"])> strlen($book2["author"]) ) {
        return 1;
    }elseif (strlen($book1["author"])< strlen($book2["author"])) {
        return -1;
    }else{
        return 0;
    }
}




// function sortByAuthor($book1, $book2){ //tarnery oparetor in callback function
//     if (strlen($book1["author"]) == strlen($book2["author"]) ) {
//         return 0;
//     }else{
//         return (strlen($book1["author"])< strlen($book2["author"])) ? -1 : 1; //tarnery oparetor
//     }
// }

// function sortByAuthor($book1, $book2){// shortly use callback function
//     return strlen($book1["author"]) <=> strlen($book2["author"]);
    
// }


usort($books, "sortByAuthor");// usort orginal array ke short kore se jonno variable nauya lagenai 
print_r($books);//array data prient

foreach ($books as $key => $value) { // prient value
    echo "\$books[$key]: " . $value["author"] . "\n";
}




