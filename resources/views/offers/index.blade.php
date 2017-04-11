@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <form id="basket_top" method="post" action="{!! route('purchaseCreate') !!}">
            <div id="basket_items_container"></div>
            <div id="basket_save text-right">
                <input type="submit" class="btn-success btn" value="Purchase"/>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-md-1"><b>#</b></div>
        <div class="col-md-7"><b>Title</b></div>
        <div class="col-md-2 text-left"><b>Price</b></div>
        <div class="col-md-2"></div>
    </div>

    @foreach ($data as $i => $item)
        <div class="row">
            <div class="col-md-1">{!! $i !!}</div>
            <div class="col-md-7">{!! $item->title !!}</div>
            <div class="col-md-2 text-left">{!! $item->price !!}</div>
            <div class="col-md-2 text-right">
                <a class="btn btn-success add-to-basket" data-title="{!! $item->title !!}" data-price="{!! $item->price !!}">To basket</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection