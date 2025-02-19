<?php

namespace App\Models\Back_end;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class CategoryModel extends Model
{
    // cau lenh ket noi vơi database
    use HasFactory;
    public $table ="category";
    public $primaryKey = 'CategoryID';
    public $fillable = 
    [
        'CategoryName', 'CategoryDescription',
    ];
    public $timestamps = false;
}
