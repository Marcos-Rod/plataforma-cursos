<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }
    
    //Relacion uno a muchos inversa
    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function platform(){
        return $this->belongsTo(Platform::class);
    }

    //Relacion uno a uno
    public function description(){
        return $this->hasOne(Description::class);
    }

    //Relacion muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }

    //Relacion uno a uno polimorfica
    public function resource(){
        return $this->morphOne(Resource::class, 'resourceable');
    }

    //Relacion uno a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions(){
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
