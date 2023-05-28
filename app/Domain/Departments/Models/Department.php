<?php
namespace App\Domain\Departments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\DepartmentFactory;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
        public static function factory(): DepartmentFactory
    {
        return DepartmentFactory::new();
    }
}
