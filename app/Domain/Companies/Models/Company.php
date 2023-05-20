<?php
namespace App\Domain\Companies\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CompanyFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public static function factory(): CompanyFactory
    {
        return CompanyFactory::new();
    }
}
