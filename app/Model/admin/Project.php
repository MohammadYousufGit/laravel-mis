<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function project_checklists(){
        return $this->hasMany('App\Model\admin\project_checklist');
    }
}
