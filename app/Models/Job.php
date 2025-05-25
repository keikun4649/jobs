<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $location
 * @property string $employment_type
 * @property string $salary
 * @property string $job_category
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'location', 'employment_type', 'salary', 'job_category'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}