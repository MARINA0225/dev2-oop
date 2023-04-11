<?php

class Book
{
    /*
    ACCESS MODIFIERS
    1. public = can be access inside and outside of the class
    2. private = can be accessed ONLY within the class.
    3. protected = can be accessed within the class and inside of the subclass(inheritance)
    */

    //I just added comment here....

    //$this-> use this to access properties and method if currentry inside of the class

    //propertices
    // public $title = 'PHP OOP';
    // public $author = 'Jphn Smith';
    // public $price = 50;
    // public $published_date = '2023-04-03';
    // private $summary = 'This is summary';

    public $title;
    public $author;
    public $price;
    public $published_date;
    private $summary;


    //constructor
    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    //methods
    public function displayDetails(){
       echo $this->title . "<br>";
    }
    public function displaySummary(){
       echo $this->summary;
    }

    private function displayAuthor(){
        echo $this->author;
    }

    //setters(fun→Enterkey→tabkey)
    public function setDetails($title, $author, $price) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // public function getDetails() 
    // {
    //     return $this->title;
    //     return $this->author;
    //     return $this->price;
    // }
    //getの中でreturnはまとめられない(上記は×)
    //echoはOK

    public function getDetails() 
    {
        echo $this->msg() . "<br>";
        echo "Title: " . $this->getTitle() . "<br>";
        echo "Author: " . $this->getAuthor(). "<br>";
        echo "Price: " . $this->getPrice(). "<br>";
    }

    public function msg()
    {
        return "Welcome To School!";
    }

    // like $name = $_POST['']
    // public function setprice($title) //Variable
    // {
    //     $this->title = $title;
        //Property
    // }

    //getters
    //like getting database
    public function getTitle()
    {
        return $this->title;
    }

    // public function setAuthor($author)
    // {
    //     $this->author = $author;
        
    // }

    public function getAuthor()
    {
        return $this->author;
        
    }

    // public function setPrice($price)
    // {
    //     $this->price = $price;
        
    // }

    public function getPrice()
    {
        return $this->price;
        
    }


}

//Instantiating a class
// $prog_lang is now an oblect/instance of the class Book
// $prog_lang can now access properties and methods of the class
// $prog_lang = new Book;

//access public properties outside is OK
// echo "Title: " . $prog_lang->title . "<br>";
// echo "Author: " . $prog_lang->author . "<br>";
// echo "Price: " . $prog_lang->price . "<br>";
// echo "Published Date: " . $prog_lang->published_date . "<br>";

//access public methods outside is OK
// echo "Summary: " , $prog_lang->displaySummary() . "<br>";

//access private properties outside is NOT OK
// echo "Published Date: " . $prog_lang->summary . "<br>";

//access praivate methods outside is NOT OK
// echo "Author: " . $prog_lang->displayAuthor() . "<br>";

// echo "<br><br>";
//Instantiating a class
// $math is now an object
// $math = new Book;
// $math->title = 'Analysis II';
// $math->author = 'Taro Yamada';
// $math->price = 100;
// $math->summary = 'This is new summary';

// echo "Title: " . $math->title . "<br>";
// echo "Author: " . $math->author . "<br>";
// echo "Price: " . $math->price . "<br>";

// echo "<br><br>";
//Instantiating a class
// $book = new Book;

//setter
// $book->setTitle("English");
// $book->setAuthor("Taro Yamada");
// $book->setPrice(100);

// //getter
// echo "Title: " . $book->getTitle() . "<br>";
// echo "Author: " . $book->getAuthor(). "<br>";
// echo "Price: " . $book->getPrice(). "<br>";
?>