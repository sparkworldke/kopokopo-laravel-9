<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookOrder extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = [ 'deleted_at' ];
    protected $guarded = [];

    //belongs to a resource
    public function bookResourcce(){
        return $this->BelongsTo(BookResource::class);
    }
    //has Revenue line
    public function revenue(){
        return $this->HasOne(Revenue::class);
    }
}
