<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookResource extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = [ 'deleted_at' ];
    protected $guarded = [];
    //belongs to category
    public function user(){
        return $this->BelongsTo(User::class);
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    public function term(){
        return $this->BelongsTo(Term::class);
    }
    public function course(){
        return $this->BelongsTo(Course::class);
    }
    public function educationLevel(){
        return $this->BelongsTo(EducationLevel::class);
    }
    //has many bookings
    public function bookOrder(){
        return $this->HasMany(BookOrder::class);
    }
    //has one approval
    public function resourceApproval(){
        return $this->HasOne(ResourceApprovals::class);
    }
}
