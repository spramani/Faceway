<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationshipModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'relationship';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'relationship_id';

    
}
