<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'project_id',

                         ];




       /**
        * [users description]
        * relationship one to many with Project model
        * @return [array] [description]
        */
        public function project()
        {
            return $this->belongsTo('App\Project');
        }
}
