<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Author extends Model
{
    protected $fillable = ['name'];
    {
    	public static function boot()
    	{
    		parent::boot();
    		self::deleting(function($author) {
    			//Mengecek apakah Penulis masih Punya Buku
    			if ($author->books->count() > 0) {
    				//Menyiapkan Pesan Error
    				$html = 'Penulis Tidak Bisa Dihapus karna Masih Memiliki Buku : ';
    				$html .='<ul>';
    				foreach ($author->book as $book) {
    					$html .= "<li>$book->title</li>";
    				}
    				$html .='</ul>';
    				Session::flash("flash_notification", [
    					"level"=>"danger",
    					"message"=>"$html" ]);
    				//Membatalkan Proses Penghapusan
    				return false;
    			}
    		});
    	}
    }
}
