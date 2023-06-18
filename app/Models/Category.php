<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Categoriesテーブルモデル
 */
class Category extends Model
{
    use HasFactory;

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'category_id';

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        // TODO:ここ指定する
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'post_id');
    }


}
