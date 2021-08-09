<?php

namespace App\Models\Post;

use App\Models\AdminUser\AdminUser;
use App\Models\Category\Category;
use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable= [
        'title',
        'description',
        'image',
        'status',
        'sub_cat_id',
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
        return $this->belongsTo(SubCategory::class, 'sub_cat_id','id');
    }

}
