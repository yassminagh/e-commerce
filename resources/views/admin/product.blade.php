<!DOCTYPE html>
<html lang="en">
  <head>
  
  @include('admin.css')
  <style type="text/css">
    .title{
        color:white;
        padding-top:25px;
        font-size:25px;
    }
    label{
        display:inline-block;
        width:200px;
    }
  </style>

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">Add Product</h1>

        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}

        </div>

        @endif

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div style="padding:15px">
            <label for="title">Product title</label>

            <input style="color:black" type="text" name="title" placeholder="Give a product title" Required>
        </div>

        <div style="padding:15px">
            <label for="price">Price</label>

            <input style="color:black" type="number" name="price" placeholder="Give a price" Required>
        </div>

        <div style="padding:15px">
            <label for="des">Description</label>

            <input style="color:black" type="text" name="des" placeholder="Give a description" Required>
        </div>

        <div style="padding:15px">
            <label for="quantity">Quantity</label>

            <input style="color:black" type="text" name="quantity" placeholder="Product quantity" Required>
        </div>

        <div style="padding:15px">
            <label for="catagory">Catagory</label>

            <select style="color:black" name="catagory" id="">
              <option value="" selected="">Add a catagory here</option>

              @foreach($catagory as $catagory)
              <option value="{{$catagory->catagory_name}}" >{{$catagory->catagory_name}}</option>
              @endforeach
            </select>

        </div>

        <div style="padding:15px">
        <input type="file" name="file">
        </div>
        
        <div style="padding:15px">
        <input class="btn btn-success" type="submit" name="" id="">
        </div>
</form>
        </div>
        </div>

          <!-- partial -->
        @include('admin.script')
  </body>
</html>
