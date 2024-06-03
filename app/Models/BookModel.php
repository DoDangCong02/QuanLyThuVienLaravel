<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tblBooks";
    protected $primaryKey = 'book_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function hasBorrowDetail()
    {
        return $this->hasMany(BorrowDetailModel::class, 'book_id', 'borrow_id');
    }
}
