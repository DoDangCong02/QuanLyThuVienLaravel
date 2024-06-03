<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowDetailModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tblBorrowDetails";
    protected $primaryKey = 'detail_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function book()
    {
        return $this->belongsTo(BookModel::class, 'borrow_id', 'book_id');
    }
    public function borrower()
    {
        return $this->belongsTo(BorrowerModel::class, 'borrower_id', 'borrower_id');
    }
}
