@extends('layouts.app')
@section('title', 'Cart')
@section('body')
<div class="card">
<div class="card-header">
Purchase Completed
</div>
<div class="card-body">
<div class="alert alert-success" role="alert">
Congratulations, purchase completed. Order number is
<b>#{{ $guarded['orders']->getId() }}</b>
</div>
</div>
</div>
@endsection
