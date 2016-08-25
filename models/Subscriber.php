<?php namespace JorgeAndrade\Subscribe\Models;

use Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

/**
 * Subscriber Model
 */
class Subscriber extends Model
{
    use ValidationTrait;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andradedev_subscribe_subscribers';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'email' => 'required|email',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['email', 'latitude', 'longitude', 'code'];
}
