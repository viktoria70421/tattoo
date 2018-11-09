@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Мои заказы</div>

                <div class="card-body">
				<form method='post' action = "{{asset ('order')}}">					
				   {{csrf_field()}}
				
 <table width="100%" class="table table-bordered table-striped">
  <tr>
   <th>Наименование</th>
   <th>Изображение</th>
   <th>Цена</th>
   <th>Количество</th>
   <th>Сумма</th>
   <th>Дейсвтия</th>
  </tr>
  @php
  $itogo = 0;
  @endphp
  @foreach($arr as $key => $value)
  @php
   $summa = $products[$key]->price * $value;
   $itogo += $summa
  @endphp
    <tr>
   <td>
    <b>{{$products[$key]->name}}</b>
   </td>
   <th>
   					@if($products[$key]->picture!='')
					<img src="{{asset('uploads/'.$products[$key]->picture)}}" />
					@endif
   </th>
   <th>{{$products[$key]->price}}</th>
   <th>{{$value}}</th>
   <th>{{$summa}}</th>
   <th>
   <a href="{{asset('basket/del/'.$key)}}">&times;</a>
   </th>
  </tr>
  @endforeach
  <tr>
   <th colspan="4">Итого</th>
   <td colspan="2">{{$itogo}}</td>
  </tr>
 </table>
 <p>Name</p><input type="text" name="name" value="{{(old('name') == true)? old('name'): ''}}">
 @if ($errors->has('name'))
	 <span class="help-block">    
	 <strong>{{ $errors->first('name') }}</strong>
     </span>
@endif
 <p>Email</p><input type="email" name="email">
 <p>Phone</p><input type="phone" name="phone">
 <button type="submit">Confirm order</button>
 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
