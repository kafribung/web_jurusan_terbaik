<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Major extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['updated_at', 'created_at'];

    // Relation Many to One (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Mutator
    public function getImgAttribute($value)
    {
        return url('images', $value);
    }
    
    // Author
    public function author()
    {
        if (Auth::check()) {
            if (Auth::user()->id == $this->user_id) {
                return true;
            }
        } return false;
    }
}
