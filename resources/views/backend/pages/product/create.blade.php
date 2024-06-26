

@extends('backend.master')

@section('content')
<h1>Create new product</h1>


<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">

  @csrf

    <div class="form-group">
      <label for="">Product Name</label>
      <input name="product_name" type="text" class="form-control" id="" placeholder="Enter product name">
    </div>

    <div class="form-group">
      <label for="">Product Category</label>
      <select class="form-control" name="category_id" id="">
      @foreach ($categories as $data)
        <option value="{{$data->id}} ">
          {{$data->name}}</option>
      @endforeach
      

    </select>

    </div>


    <div class="form-group">
      <label for="">Product Price</label>
      <input name="price" type="text" class="form-control" id="" placeholder="Enter product price">
    </div>

    
    <div class="form-group">
      <label for="">Product Quantity</label>
      <input name="quantity" type="text" class="form-control" id="" placeholder="Enter product quantity">
    </div>

    <div class="form-group">
      <label for="">Upload Image</label>
      <input name="image" type="file" class="form-control" id="" placeholder="Enter product quantity">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection