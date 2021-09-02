<?php
/**
 * Created By PhpStorm.
 * User: Li Ming
 * Date: 2021-06-25 15:44
 * Fun:
 */

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class ArticleTags extends BaseModel
{
    use HasFactory;
    protected $table = "article_tags";
    protected $guarded = [];
}