<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order PDF</title>
</head>
<body>
    Customer Name :<h1>Order Details</h1>
    Customer phone :<h3>{{$order->phone}}</h3>
    Customer address :<h3>{{$order->address}}</h3>
    Product Name :<h3>{{$order->product_name}}</h3>
    Product Quantity :<h3>{{$order->quantity}}</h3>
    Product price :<h3>{{$order->price}}</h3>
    Product Status :<h3>{{$order->atatus}}</h3>

    <br><br>

    <img height="250" width="450" src="public/product/{{$order->image}}" alt="">
</body>
</html>