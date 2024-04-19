<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "first_name",
        "last_name",
        "gender",
        "email",
        "tell",
        "adress",
        "building",
        "detail",
    ];

    public function getCategory($id)
    {
        $category = DB::table("categories")->find($id);
        return $category;
    }

    public function category()
    {
        return $this->hasOne("App\Model\Category");
    }
}
