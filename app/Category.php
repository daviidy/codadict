<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name'];

       /**
        * [users description]
        * relationship one to many with Project model
        * @return [array] [description]
        */
        public function projects()
        {
            return $this->hasMany('App\Project');
        }
}
