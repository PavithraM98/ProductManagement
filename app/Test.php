<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // use HasFactory;

    protected $fillable=[
        'title','price','description'
    ]; 

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
