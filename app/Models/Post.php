<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version September 9, 2022, 9:02 am UTC
 *
 * @property integer $author_id
 * @property string $name
 * @property string $body
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'author_id',
        'name',
        'body'
    
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'name' => 'string',
        'body' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_id' => 'nullable|integer',
        'name' => 'required|string|max:50',
        'body' => 'required|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function listauthor()
    {
    	return $this->hasOne('App\Models\author', 'id', 'author_id');
    }
    
}
