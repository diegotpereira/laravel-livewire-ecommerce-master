@extends('layout')

@section('title', 'carrinho')

@section('content')

   <table id="carrinho" class="table table-hover table-condensed">
      <thead>
         <tr>
           <th style="width: 50%">Produto</th>
           <th style="width: 10%">Preço</th>
           <th style="width: 8%">Quantidade</th>
           <th style="width: 22%" class="text-center">SubTotal</th>
           <th style="width: 10%"></th>
         </tr>
      </thead>

      <tbody>
      <tr>
            <td data-th="Produto">
                <div class="row">
                   <div class="col-sm-3 hidden-xs">
                    <img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>

                    <div class="col-sm-9">
                    <h4 class="nomargin">Produto 1</h4>
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </td>

            <td data-th="Preco">R$1.99</td>
            <td data-th="Quantidade">
               <input type="number" class="form-control text-center" value="1">
            </td>

            <td data-th="Subtotal" class="text-center">1.99</td>

            <td class="actions" data-th="">
               <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
               <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
            </td>
      </tr>
      </tbody>

      <tfoot>

      <tr class="visible-xs">
         <td class="text-center"><strong>Total 1.99</strong></td>
      </tr>

      <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left">Continuar Shopping</i></a></td>
      <td colspan="2" class="hidden-xs"></td>
      <td class="hidden-xs text-center"><strong>Total R$1.99</strong></td>
      </tfoot>
   </table>
@endsection
