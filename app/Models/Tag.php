<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Post;

/**
 * Tagsテーブルモデル
 */
class Tag extends Model
{
    use HasFactory;

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'tag_id';

    /**
     * The posts that belong to the Tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts(): BelongsToMany
    {
        /**
        * メモ:
        * blongsToMany('リレーション先のモデルクラス', '中間テーブル', '自分の主キーと紐づく中間テーブルのカラム名', 'リレーション先の主キーと紐づく中間テーブルのカラム名')
        */
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id')->withTimestamps();
    }
}
