<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table ='order_details';
    protected  $primaryKey='id';
    protected $guarded=[]; 
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'amount',
        'total',


       
      
    ];
    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }

    public function setOrderId($orderId)
    {
        $this->attributes['order_id'] = $orderId;
    }
    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }
    public function getQty()
    {
        return $this->attributes['qty'];
    }

    public function setQty($qty)
    {
        $this->attributes['qty'] = $qty;
    }
    public function getAmount()
    {
        return $this->attributes['amount'];
    }

    public function setAmount($amount)
    {
        $this->attributes['amount'] = $amount;
    }
    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }






    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id','id');
    }
    public function getOrder(){
        return $this->order;
      }
      public function setOrder($order){
           $this->order=$order;
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
