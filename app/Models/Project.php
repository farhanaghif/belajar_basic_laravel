<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name','leader_id','owner','progress','description','deadline'];

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id', 'id');
    }
    
    public function relationProjectAndTask()
    {
        return $this->belongsTo(Task::class,'project_id','id');
    }

    public function jumlahTask()
    {
        return $this->hasMany(Task::class);
    }
}
 
