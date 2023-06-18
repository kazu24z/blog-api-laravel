<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Adminsテーブルモデル
 */
class Admin extends Model
{
    use HasFactory;

    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */
    protected $primaryKey = 'admin_id';

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
        return $this->hasMany(Post::class, 'admin_id');
    }
}
