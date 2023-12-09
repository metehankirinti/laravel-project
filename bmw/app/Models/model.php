<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $fillable = ['brand_id', 'name'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}