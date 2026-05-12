<?php
class Book {
    // Properties
    protected $title;
    protected $author;

    // Constructor to set initial values
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    // Method to get details (Getter)
    public function getDetails() {
        return "Book: {$this->title} by {$this->author}";
    }
}

class EBook extends Book {
    private $fileSize;

    public function __construct($title, $author, $fileSize) {
        // Call the parent constructor
        parent::__construct($title, $author);
        $this->fileSize = $fileSize;
    }

    // New method specific to EBooks
    public function getDownloadLink() {
        return "Downloading {$this->title} ({$this->fileSize}MB)...";
    }
}

// Creating a regular book
$paperBook = new Book("Rich Dad Poor Dad", "Robert Kiyosaki");
echo $paperBook->getDetails(); 
// Output: Book: Rich Dad Poor Dad by Robert Kiyosaki

echo "\n";

// Creating an EBook (Subclass)
$digitalBook = new EBook("Digital Fortress", "Dan Brown", 5);
echo $digitalBook->getDetails();      // Inherited method
echo "<br>";
echo $digitalBook->getDownloadLink(); // Subclass specific method
// Output: Downloading Digital Fortress (5MB)...


?>