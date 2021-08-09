<?php

namespace App\Models\SubCategory;

use App\Models\AdminUser\AdminUser;
use App\Models\Category\Category;
use App\Models\Post\Post;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{


    protected $fillable= [
        'sub_cat_name',
        'slug',
        'description',
        'status',
        'cat_id',
        'posted_by'
    ];

    public function postedBy()
    {
        return $this->belongsTo(AdminUser::class, 'posted_by','id');
    }
    public function catId()
    {
        return $this->belongsTo(Category::class, 'cat_id','id');
    }
    public function subCatId()
    {
        return $this->hasMany(Post::class, 'sub_cat_id','id');

    }

}
