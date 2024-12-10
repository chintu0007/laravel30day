<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\HasBuilder;
use Illuminate\Database\Eloquent\Model;


class Job extends Model
{   

    use HasBuilder;
    use HasFactory;

    protected $table  = 'job_listings';

    protected $fillable = ['title', 'salary', 'empoyer_id'];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }

    // public static function find(int $id):array {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

    //     if (!$job) {
    //         abort(404);
    //     }
        
    //     return $job;
    // }
}
