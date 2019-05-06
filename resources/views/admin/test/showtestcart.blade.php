@extends('admin.master')
@section('content')

{{-- <div class="content-wrapper"> --}}
    

        <div class="container">
            <br/>
            <h4><b>Show cart table</b></h4>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{url('')}}">
                           
                        @csrf
    


                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Supply Id</th>
                                <th>Purches Number</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                
                             
                                <th>Cost</th>
                                {{-- <th>uty</th>
                                <th>sc</th>
                                <th>cn</th>
                                <th>pb</th>
                                <th>siz</th>
                                <th>des</th>
                                <th>qua</th>
                                <th>cost</th>
                                <th>mar</th>
                                <th>sp</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                       <?php $i=1?>
                            @foreach($cat as $cart)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cart->options->sid}}</td>
                                    <td>{{$cart->id}}</td>
                                    <td>{{$cart->name}}</td>
                                    <td>{{$cart->qty}}</td>
                                    <td>{{$cart->price}}</td>

                                    {{-- <td>{{$cart->options->purchase_date}}</td>
                                    <td>{{$cart->sid}}</td>
                                    
                                    <td>{{$cart->supplier_invoiceno}}</td>
                                    <td>{{$cart->unit_type}}</td>
                                    <td>{{$cart->supplier_code}}</td>
                                    <td>{{$cart->color_name}}</td>
                                    <td>{{$cart->pbrand}}</td>
                                    <td>{{$cart->size}}</td>
                                    <td>{{$cart->name}}</td>
                                    <td>{{$cart->margin}}</td>
                                    <td>{{$cart->price}}</td> --}}
                                    
                                </tr>
                            @endforeach
                            </tbody>
                            {{-- <tfoot>
                            <tr>
                                <th style="text-align: right;" colspan="5">Total</th>
                                <th><input type="text" class="form-control bg-white" name="countqty"
                                           value="" readonly/></th>
                                <th><input type="text" class="form-control bg-white" name="totalPrice"
                                           value="" readonly/></th>
                            </tr>
                            </tfoot> --}}
                        </table> 

 
                    </form>
                </div>
            </div>

        </div>


  
@endsection

