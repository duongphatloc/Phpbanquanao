<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table ='orders';
    protected  $primaryKey='id';
    protected $guarded=[];   
    protected $fillable = [
        'id',
        'total',
        'first_name',
        'last_name',
        'company_name',
        'country',
        'street_address',
        'postcode_zip',
        'town_city',
        'email',
        'phone',

       
      
    ];



    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }







    public function getFirstName()
    {
        return $this->attributes['first_name'];
    }

    public function setFirstName($FirstName)
    {
        $this->attributes['first_name'] = $FirstName;
    }

    public function getLastName()
    {
        return $this->attributes['last_name'];
    }

    public function setLastName($LastName)
    {
        $this->attributes['last_name'] = $LastName;
    }

    public function getCountry()
    {
        return $this->attributes['country'];
    }

    public function setCountry($country)
    {
        $this->attributes['country'] = $country;
    }

    
    public function getCompanyName()
    {
        return $this->attributes['company_name'];
    }

    public function setCompanyName($CompanyName)
    {
        $this->attributes['company_name'] = $CompanyName;
    }
    
    public function getStreetAddress()
    {
        return $this->attributes['street_address'];
    }

    public function setStreetAddress($StreetAddress)
    {
        $this->attributes['street_address'] = $StreetAddress;
    }
    
    public function getPostcodeZip()
    {
        return $this->attributes['postcode_zip'];
    }

    public function setPostcodeZip($postcodeZip)
    {
        $this->attributes['postcode_zip'] = $postcodeZip;
    }
    
    public function getTownCity()
    {
        return $this->attributes['townCity'];
    }

    public function setTownCity($townCity)
    {
        $this->attributes['town_city'] = $townCity;
    }
    
    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    
    public function getPhone()
    {
        return $this->attributes['phone'];
    }

    public function setPhone($phone)
    {
        $this->attributes['phone'] = $phone;
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















    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id','id');
    }
    public function getOrderDetails(){
        return $this->orderDetails();
    }
    public function setorderDetails($orderDetails){
           $this->orderDetails=$orderDetails;
    }
}
