<?php

class BookController extends BaseController {
  public function store(){

    $book = new Book;

    $book->title       = Input::get('title');;
    $book->author      = Input::get('author');;
    $book->description = Input::get('description');;
    $book->price       = Input::get('price');;

    $book->save();

  }

 }

?>