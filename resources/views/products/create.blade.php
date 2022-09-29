@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Json:</strong>
                <input type="text" name="toppings[0]['title'][0]" class="form-control" placeholder="Title"><br>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['title'][0]['description'][0]" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['title'][0]['caed'][0]" class="form-control" placeholder="	Cost in AED">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['title'][0]['adddetail'][0]" class="form-control" placeholder="Additional Details">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                        <input type="text" name="toppings[0]['title'][0]['description'][1]" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['title'][0]['caed'][1]" class="form-control" placeholder="	Cost in AED">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['title'][0]['adddetail'][1]" class="form-control" placeholder="Additional Details">
                        </div>
                    </div>
                </div>
                <strong>Json:</strong>
                <input type="text" name="toppings[0]['title'][1]" class="form-control" placeholder="Title"><br>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['description'][2]" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['caed'][2]" class="form-control" placeholder="	Cost in AED">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['adddetail'][2]" class="form-control" placeholder="Additional Details">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['description'][3]" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['caed'][3]" class="form-control" placeholder="	Cost in AED">
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="toppings[0]['adddetail'][3]" class="form-control" placeholder="Additional Details">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection