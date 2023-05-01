<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = ['note', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

    public function apply(Job $job)
    {
        $job->paused === true ? throw new \ErrorException('Cannot apply to paused job.') : $this->jobs()->attach($job);
    }

    public function unapply(Job $job)
    {
        $this->jobs()->detach($job);
        if (!$this->jobs()->exists()) {
            $this->delete();
        }
    }
}