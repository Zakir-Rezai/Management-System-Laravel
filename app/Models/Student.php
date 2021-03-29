<?php

namespace App\Models;
use App\Models\Fee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    public $primaryKey = 'id';

    protected $fillable = ["id", "first_name", "last_name", "father_name", "email", "skill_level", "phone", "address", "register_date", "category", "gender", "image"];

    public function fees() {
        return $this->hasMany(Fee::class);
    }
}
