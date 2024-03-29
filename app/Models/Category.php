<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = [ 'deleted_at' ];
    protected $guarded = [];
    public function bookResource(){
        return $this->HasMany(BookResource::class);
    }
}
