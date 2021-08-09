<?php

namespace App\Models\Category;

use App\Models\AdminUser\AdminUser;
use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Category extends Model
{
//    protected $guarded='admin';
    protected $fillable= ['cat_name','slug','description','status','posted_by'];


    public function postedBy()
    {
        return $this->belongsTo(AdminUser::class, 'posted_by','id');

    }
    public function catId()
    {
        return $this->hasMany(SubCategory::class, 'cat_id','id');

    }

}


