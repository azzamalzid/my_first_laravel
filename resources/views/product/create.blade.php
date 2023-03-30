

@extends('product.layout');
<link href="{{ url('css/styles_create.css') }}" rel="stylesheet" />


@section('title',"create page")
    
@section('content')

    <form class="form_ins" action="{{ route('product.store') }}" method="POST">
        @csrf
      <div class="ins_form">
        <div class="the_first_one_input">
          <input type="text" name="prod_id" id="prod_id" placeholder="Product ID" value="{{ $last_product_id['id']+1 }}" disabled>
        </div>
        <div class="the_last_tow_input">
            <input type="text" name="prod_name" id="prod_name" placeholder="Product Name" value="{{ old('prod_name') }}">
            @error('prod_name')
            {{ $message }}
        @enderror
          <input type="number" name="prod_price" id="prod_price" placeholder="Product Price" value="{{ old('prod_price') }}">
          @error('prod_price')
          {{ $message }}
      @enderror
          <input type="text" name="prod_details" id="prod_details" placeholder="Product Details" value="{{ old('prod_details') }}">
          @error('prod_details')
          {{ $message }}
      @enderror
        </div>
        <input type="submit" name="submit" id="btn_insert" class="btn_insert" value="INSERT">
      </div>
      </form>
      <br /><br />
      <h3 id="msg" style="display: none;"></h3>

      @endsection