<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
     <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
           <div class="dropdown">
               <button type="button" class="btn btn-info" data-toggle="dropdown">
                   <i class="fa fa-shopping-cart" aria-hidden="true">Carrinho</i>
                   <span class="badge badge-pill badge-danger">3</span>
               </button>

               <div class="dropdown-menu">
                  <div class="row total-header-section">
                     <div class="col-lg-6 col-sm-6 col-6">
                       <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                       <span class="badge badge-pill badge-danger">3</span>
                     </div>

                     <div class="col-lg-6 col-sm-6 col-6 toatl-section text-rigth">
                        <p>Total: <span class="text-info">R$2,978.24</span></p>
                     </div>
                  </div>

                  <div class="row carrinho-detalhe">
                     <div class="col-lg-4 col-sm-4 col-4 carrinho-detalhe-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/811OyrCd5hL._SX425_.jpg">
                     </div>

                     <div class=" col-lg-8 col-sm-8 col-8 carrinho-detalhe-produto">
                        <p>Sony DSC-RX100W..</p>
                        <span class="preco text-info">R$250.00</span>
                        <span class="contar">Quantidade: 01</span>
                     </div>
                  </div>

                  <div class="row carrinho-detalhe">
                     <div class="col-lg-4 col-sm-4 col-4 carrinho-detalhe-img">
                        <img src="https://cdn2.gsmarena.com/vv/pics/blu/blu-vivo-48-1.jpg">
                     </div>

                     <div class="col-lg-8 col-sm-8 carrinho-detalhe-produto">
                        <p>Vivo DSC-RX100M..</p>
                        <span class="preco text-info">R$500.99</span>
                        <span class="contar">Quantidade: 01</span>
                     </div>
                  </div>

                  <div class="row carreinho-detalhe">
                     <div class="col-lg-4 col-sm-4 col-4 carrinho-detalhe-img">
                        <img src="https://static.toiimg.com/thumb/msid-55980052,width-640,resizemode-4/55980052.jpg">
                     </div>

                     <div class="col-lg-8 col-sm-8 col-8 carrinho-detalhe-produto">
                       <p>Lenovo DSC-RX100M..</p>
                       <span class="preco text-info">R$445.99</span>
                       <span class="contar">Quantidade: 01</span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 col-sm-12 col-12 text-center checkout">

                        <a href="{{ url('carrinho') }}"    class="btn btn-primary btn-block">View all</a>
                     </div>
                  </div>
               </div>
           </div>
        </div>
     </div>
  </div>
  <div class="container page">
    @yield('content')
  </div>

  @yield('scripts')
</body>
</html>
