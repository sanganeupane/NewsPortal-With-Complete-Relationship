<?php

namespace App\Models\AdminUser;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Auth;

class AdminUser extends Auth
{
    protected $guarded = 'admin';
    protected $fillable = ['name', 'username', 'email', 'password', 'image', 'status', 'admin_type'];


    public function postedBy()
    {
        return $this->hasMany(Category::class, 'posted_by', 'id');
    }

}
