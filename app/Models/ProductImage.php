<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    // use HasFactory;
    protected $table ='product_images';
    protected  $primaryKey='id';
    protected $guarded=[];
    protected $fillable = [
        'id',
        'product_id',
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
    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($productId)
    {
        $this->attributes['product_id'] = $productIdd;
    }
    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    } 

    

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id','id');
    }
    public function getProduct(){
        return $this->product;
      }
      public function setProduct($product){
           $this->product=$product;
        }
}
