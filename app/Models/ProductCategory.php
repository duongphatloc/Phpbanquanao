<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table ='product_categories';
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
        return $this->hasMany(Product::class, 'product_category_id','id');
    }
    public function getProduct(){
        return $this->product;
      }
      public function setProduct($product){
           $this->product=$product;
        }

}
