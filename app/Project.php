<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['description',
                           'category_id',
                           'urgency',
                           'price',
                           'deadline',
                           'status',
                           'user_id'
                         ];




       /**
        * [users description]
        * relationship one to many with Multimedia model
        * @return [array] [description]
        */
        public function multimedias()
        {
            return $this->hasMany('App\Multimedia');
        }

        /**
         * [users description]
         * relationship one to many with User model
         * @return [array] [description]
         */
         public function user()
         {
             return $this->belongsTo('App\User');
         }

         /**
          * [users description]
          * relationship one to many with Category model
          * @return [array] [description]
          */
          public function category()
          {
              return $this->belongsTo('App\Category');
          }
}
