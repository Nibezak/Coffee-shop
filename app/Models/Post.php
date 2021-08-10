<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    protected $with = ['tags', 'author'];

     public function author()
     {
             return $this->belongsTo(User::class, 'user_id');
     }

     /**
      * @return collection / relationship
      */
      public function tags()
      {
        return $this->belongsToMany(Tag::class
        );
      }
        public function getPostgridCardTagsAttribute(){

        return $this->tags->take(3);

        }

         public function getPostCardTagsAttribute()
         {
            return $this->tags->take(5);
         }
}
