<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");body{background-color: #eee;font-family: "Poppins", sans-serif;font-weight: 300}.cart{height: 100vh}.progresses{display: flex;align-items: center}.line{width: 76px;height: 6px;background: #63d19e}.steps{display: flex;background-color: #63d19e;color: #fff;font-size: 12px;width: 30px;height: 30px;align-items: center;justify-content: center;border-radius: 50%}.check1{display: flex;background-color: #63d19e;color: #fff;font-size: 17px;width: 60px;height: 60px;align-items: center;justify-content: center;border-radius: 50%;margin-bottom: 10px}.invoice-link{font-size: 15px}.order-button{height: 50px}.background-muted{background-color:#fafafc}
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-4 mb-4">
        <div class="row d-flex cart align-items-center justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6 border-right p-5">
                            <div class="text-center order-details">
                                <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> <span class="check1"><i class="fa fa-check"></i></span> <span class="font-weight-bold">Order Confirmed</span> <small class="mt-2">Your order will go to you soon</small> </div> <a href="{{ route('home') }}"><button class="btn btn-danger btn-block order-button">Go Home</button></a> 
                            </div>
                        </div>
                        <div class="col-md-6 background-muted">
                            <div class="p-3 border-bottom">
                                <div class="d-flex justify-content-between align-items-center"> <span><i class="fa fa-clock-o text-muted"></i> 3 days delivery</span> </div>
                                <div class="mt-3">
                                    <h6 class="mb-0">{{ $order->name }}</h6> <span class="d-block mb-0">{{ $order->description }} </span>
                                </div>
                            </div>
                            <div class="row g-0 border-bottom">
                                <div class="col-md-6 border-right">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>x{{$order->quantity}}</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>Rp. {{$order->price}} per Item</span> </div>
                                </div>
                            </div>
                            <div class="row g-0 border-bottom">
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>Subtotal</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>Rp. {{$order->quantity * $order->price}}</span> </div>
                                </div>
                            </div>
                            <div class="row g-0 border-bottom">
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>Ongkos Kirim</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>Rp. 12.000</span> </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span class="font-weight-bold">Total</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 d-flex justify-content-center align-items-center"> <span>Rp. {{$order->quantity * $order->price + 12000}}</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div> </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
