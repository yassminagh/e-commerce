<!DOCTYPE html>
<html lang="en">
  <head>
  
  @include('admin.css')

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

                <table>
                    <tr style="background-color:grey">
                        <td style="padding:20px">Customer name</td>
                        <td style="padding:20px">Customer email</td>
                        <td style="padding:20px">Phone</td>
                        <td style="padding:20px">Address</td>
                        <td style="padding:20px">Product title</td>
                        <td style="padding:20px">price</td>
                        <td style="padding:20px">Quantity</td>
                        <td style="padding:20px">Status</td>
                        <td style="padding:20px">Action</td>
                        <td style="padding:20px">Print PDF</td>
                        <td style="padding:20px">Send Email</td>
                        
                    </tr>

                    @foreach($order as $orders)

                    <tr align="center" style="background-color:black">
                        <td style="padding:20px">{{$orders->name}}</td>
                        <td style="padding:20px">{{$orders->email}}</td>
                        <td style="padding:20px">{{$orders->phone}}</td>
                        <td style="padding:20px">{{$orders->address}}</td>
                        <td style="padding:20px">{{$orders->product_name}}</td>
                        <td style="padding:20px">{{$orders->price}}</td>
                        <td style="padding:20px">{{$orders->quantity}}</td>
                        <td style="padding:20px">{{$orders->atatus}}</td>
                        <td style="padding:20px">
                            <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">
                                 Delivered
                            </a>
                        </td>
                        <td>
                          <a href="{{url('print_pdf',$orders->id)}}" class="btn btn-secondary">Print PDF</a>
                        </td>

                        <td>

                        <a class="btn btn-info" href="{{url('send_email',$orders->id)}}">Send Email</a>

                        </td>
                    </tr>

                    @endforeach

                </table>

            </div>
        </div>
          <!-- partial -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
