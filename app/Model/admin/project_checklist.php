<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class project_checklist extends Model
{
    //

    public function project(){
        return $this->belongsTo('App\Model\admin\Project');
    }


}
