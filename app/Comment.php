<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // use HasFactory;

    protected $fillable=[
        'test_id','comment','rating'
    ]; 


    public function test(){
        return $this->belongsTo(Test::class);
    }
}
