<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'brand_id',
        'product_category_id',
        'price',
        'discount',
        'weight',
        'sku',
        'tag',
   
        'description',
        'image'
       
     
        ];

       
        

    protected $table ='products';
    protected  $primaryKey='id';
    protected $guarded=[]; 

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getBrandId()
    {
        return $this->attributes['brand_id'];
    }

    public function setBrandId($BrandId)
    {
        $this->attributes['brand_id'] = $BrandId;
    }

    public function getProductCategoryId()
    {
        return $this->attributes['product_category_id'];
    }

    public function setproductCategoryId($productCategoryId)
    {
        $this->attributes['product_category_id'] = $productCategoryId;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    
    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    
    public function getContent()
    {
        return $this->attributes['content'];
    }

    public function setContent($content)
    {
        $this->attributes['content'] = $content;
    }
    
    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    
    public function getQty()
    {
        return $this->attributes['qty'];
    }

    public function setQty($qty)
    {
        $this->attributes['qty'] = $qty;
    }
    
    public function getDiscount()
    {
        return $this->attributes['discount'];
    }

    public function setDiscount($discount)
    {
        $this->attributes['discount'] = $discount;
    }
    
    public function getWeight()
    {
        return $this->attributes['weight'];
    }

    public function setWeight($weight)
    {
        $this->attributes['weight'] = $weight;
    }
    
    public function getSku()
    {
        return $this->attributes['sku'];
    }

    public function setSku($sku)
    {
        $this->attributes['sku'] = $sku;
    }
    
    public function getFeatured()
    {
        return $this->attributes['featured'];
    }

    public function setFeatured($featured)
    {
        $this->attributes['featured'] = $featured;
    }
    
    public function getTag()
    {
        return $this->attributes['tag'];
    }

    public function setTag($tag)
    {
        $this->attributes['tag'] = $tag;
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
    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public static function sumPricesByQuantities($products,$productsInSession){
        $total =0;
        foreach($products as $product){
            $total =$total+($product->getPrice()*$productsInSession[$product->getId()]);
        }
        return $total ;
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id','id');
    }
    public function getBrand(){
        return $this->brand();
    }
    public function setBrand($brand){
           $this->brand=$brand;
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id','id');
    }
    public function getProductCategory(){
        return $this->productCategory();
    }
    public function setProductCategory($productCategory){
           $this->productCategory=$productCategory;
    }
  
    
  
    public function productComments()
    {
        return $this->hasMany(ProductComment::class, 'product_id','id');
    }
    public function getProductComments(){
        return $this->productComments();
    }
    public function setProductComments($productComments){
           $this->productComments=$productComments;
    }
  
    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'product_id','id');
    }
    public function getOrderDetails(){
        return $this->orderDetails();
    }
    public function setorderDetails($orderDetails){
           $this->orderDetails=$orderDetails;
    }
}
