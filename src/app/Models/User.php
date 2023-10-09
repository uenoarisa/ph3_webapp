<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function getData(){
        return $this->id . ': ' . $this ->family_name . ' ' . $this->first_name . ' (' . $this->email . ') [' . $this->generation . ']';
    }

    public function get_study_hours_posts_table(){
        return $this->hasMany('App\Models\StudyHoursPost');
    }

    public function get_language_posts_table(){
        return $this->hasManyThrough('App\Models\LanguagePost', 'App\Models\StudyHoursPost');
    }

    public function get_content_posts_table(){
        return $this->hasManyThrough('App\Models\ContentPost', 'App\Models\StudyHoursPost');
    }
}
