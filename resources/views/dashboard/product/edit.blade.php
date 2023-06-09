@extends('layouts.admin')
@section('title')
@section('body')
@if ($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach ($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
   <!-- Main -->
   <div class="app-main__inner">

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
            </div>
            <div>
                Product
                <div class="page-title-subheading">
                    View, create, update, delete and manage.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form method="POST"action="{{ route('dashboard.product.update',
                    ['id' => $guarded['products']->getId()]) }}"
                    enctype="multipart/form-data">
                    @csrf
                 
                    
                
                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="name" id="name" placeholder="Name" type="text"
                                class="form-control" value="{{$guarded['products']->name}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="content"
                            class="col-md-3 text-md-right col-form-label">Content</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="content" id="content"
                                placeholder="Content" type="text" class="form-control" value="{{$guarded['products']->content}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="price"
                            class="col-md-3 text-md-right col-form-label">Price</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="price" id="price"
                                placeholder="Price" type="text" class="form-control" value="{{$guarded['products']->price}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="discount"
                            class="col-md-3 text-md-right col-form-label">Discount</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="discount" id="discount"
                                placeholder="Discount" type="text" class="form-control" value="{{$guarded['products']->discount}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="weight"
                            class="col-md-3 text-md-right col-form-label">Weight</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="weight" id="weight"
                                placeholder="Weight" type="text" class="form-control" value="{{$guarded['products']->weight}}">
                        </div>
                    </div>
                    
                    <div class="position-relative row form-group">
                        <label for="sku"
                            class="col-md-3 text-md-right col-form-label">SKU</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="sku" id="sku"
                                placeholder="SKU" type="text" class="form-control" value="{{$guarded['products']->sku}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="tag"
                            class="col-md-3 text-md-right col-form-label">Tag</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="tag" id="tag"
                                placeholder="Tag" type="text" class="form-control" value="{{$guarded['products']->tag}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="featured"
                            class="col-md-3 text-md-right col-form-label">Featured</label>
                        <div class="col-md-9 col-xl-8">
                            <div class="position-relative form-check pt-sm-2">
                                <input name="featured" id="featured" type="checkbox" value="1" class="form-check-input">
                                <label for="featured" class="form-check-label">Featured</label>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description"
                            class="col-md-3 text-md-right col-form-label">Description</label>
                        <div class="col-md-9 col-xl-8">
                            <textarea class="form-control" name="description" id="description" placeholder="Description">{{$guarded['products']->description}}</textarea>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">image</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="image" id="image" placeholder="Image" type="file"
                                class="form-control">
                        </div>
                    </div>

                    <div class="position-relative row form-group mb-1">
                        <div class="col-md-9 col-xl-8 offset-md-2">
                            <a href="#" class="border-0 btn btn-outline-danger mr-1">
                                <span class="btn-icon-wrapper pr-1 opacity-8">
                                    <i class="fa fa-times fa-w-20"></i>
                                </span>
                                <span>Cancel</span>
                            </a>
                            @method('PUT')

                            <button type="submit"
                                class="btn-shadow btn-hover-shine btn btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-8">
                                    <i class="fa fa-download fa-w-20"></i>
                                </span>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Main -->







@endsection