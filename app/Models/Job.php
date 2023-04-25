<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = ['title', 'description', 'type'];

    public function pause()
    {
        $this->paused = true;
        $this->save();
    }

    public function unpause()
    {
        $this->paused = false;
        $this->save();
    }

    public const JOB_TYPES = [
        'CLT',
        'Contractor',
        'Freelance',
    ];
}
