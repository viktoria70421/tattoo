@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Товары</div>

                <div class="card-body">
                    
					@foreach($cats as $cat)
					<hr />
					<h2 class='title'> {{$cat->name}}</h2>
					
					@foreach($cat->products()->get() as $one)
					<h4>{{$one->name}}</h4>
					<a href="{{asset('basket/add/'.$one->id)}}" class="">В корзину</a>
					@if($one->picture!='')
					<img src="{{asset('uploads/'.$one->picture)}}" />
					@endif
					
						{!!$one->body!!}
					@endforeach
					
					
					@endforeach
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
