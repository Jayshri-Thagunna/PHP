<?php
class Book {
    //properties
    protected $title;
    protected $author;

    //constructor
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    //method to get details
    public function getDetails() {
        return "Book: {$this->title} by {$this->author}";
    }
}

//Inheritance

class Ebook extends Book {
    private $filesize;

    public function __construct($title, $author, $filesize){
        //call the parent constructor
        parent::__construct($title, $author);
        $this -> filesize = $filesize;
    }

    //new method specific to Ebooks
        public function getDownloadLink() {
            return "Downloading {$this->title} ({$this-> filesize}MB)...";
        }
}

//Use classes in a script
$paperBook = new Book("Rich Dad Poor Dad", "Robert Kiyosaki");
echo $paperBook->getDetails();

echo "\n";

//create an Ebook
$digitalBook = new Ebook("Digital Fortress", "Dan Brown", 5);
echo $digitalBook->getDetails();

echo "\n";

echo $digitalBook->getDownloadLink();

?>