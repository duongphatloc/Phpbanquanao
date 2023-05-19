<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // use HasFactory;
    protected $table ='brands';
    protected  $primaryKey='id';
    protected $guarded=[];
    protected $fillable = [
        'id',
        'name',
       
      
    ];
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    



    
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id','id');
    }
    public function getProduct(){
        return $this->product();
      }
      public function setProduct($product){
           $this->product=$product;
        }
}
