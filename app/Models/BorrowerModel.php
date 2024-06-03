<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowerModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tblBorrowers";
    protected $primaryKey = 'borrower_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function borrowDetails()
    {
        return $this->hasMany(BorrowDetailModel::class, 'borrower_id', 'borrower_id');
    }
}
