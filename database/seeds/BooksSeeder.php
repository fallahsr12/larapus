<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
use App\BorrowLog;
use App\use;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample Penulis
        $author1 = Author::create(['name'=>'Mohammad Fauzil Adhim']);
        $author2 = Author::create(['name'=>'Salim A. Fillah']);
        $author3 = Author::create(['name'=>'Aam Amirudin']);

        // Sample Buku
        $book1 = Book::create(['title'=>'Kupinang Engkau dengan Hamdalah', 'amount'=>3, 'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan Cinta Para pejuang', 'amount'=>2, 'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membingkai Surga Dalam rumah Tangga', 'amount'=>4, 'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta & Seks Rumah Tangga Muslim', 'amount'=>3, 'author_id'=>$author3->id]);

        //sample peminjam buku
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'books_id'=>$book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'books_id'=>$book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'books_id'=>$book3->id, 'is_returned' => 1]);
    }
}
