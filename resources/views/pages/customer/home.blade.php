@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
      
    </div>
    @foreach($items as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-8" style="transform: translateY(50%);">
                        <h3 class="panel-title">{{ $item->id }} - {{ $item->title }}</h3>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="{{ url('item/'.$item->id) }}" class="btn btn-primary">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </a>
                        <a href="{{ url('item/'.$item->id.'/edit') }}" class="btn btn-default"><i
                                    class="fa fa-pencil"></i></a>

                        <form style="display: inline-block" action="{{ url('item/' . $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" id="delete-item-{{ $item->id }}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <p>{{ $item->description }}</p>
            </div>
        </div>
    @endforeach
    <div class="text-center">
       {{ $items->link() }}
    </div>
     <a id="scrollup">Scroll</a>
@endsection