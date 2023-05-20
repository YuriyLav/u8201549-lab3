<?php
namespace App\Domain\Employees\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\EmployeeFactory;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public static function factory(): EmployeeFactory
    {
        return EmployeeFactory::new();
    }
}
