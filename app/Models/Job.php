<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'category',
        'industry',
        'type',
        'location',
        'attachment',
        'description',
        'name',
        'email',
        'qualifications',
        'user_id',
        
    ];    
    public function scopeFilter($query, array $filters)
    {
      if($filters['search'] ?? false){
        $query->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('location', 'like', '%' . request('search') . '%')
        ->orWhere('type', 'like', '%' . request('search') . '%')
        ->orWhere('category', 'like', '%' . request('search') . '%')
        ->orWhere('industry', 'like', '%' . request('search') . '%')
        ->orWhere('description', 'like', '%' . request('search') . '%')
        ->orWhere('qualifications', 'like', '%' . request('search') . '%');
      }
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
      }

}
