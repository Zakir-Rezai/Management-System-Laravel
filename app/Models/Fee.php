<?php

namespace App\Models;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $table = "fees";

    public $primaryKey = 'id';

    protected $fillable = ["id", "first_name", "father_name", "trainer", "pay_date", "fee_amount"];

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
