<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $table = 'books';


    protected $fillable = ['book_code','name','cover', 'author_id','publisher_id','publication_year', 'isbn', 'stock'];
}
