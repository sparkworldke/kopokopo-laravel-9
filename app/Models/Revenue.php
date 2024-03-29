<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revenue extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = [ 'deleted_at' ];
    protected $guarded = [];
    public function bookOrder(){
        return $this->BelongsTo(BookOrder::class);
    }
}
