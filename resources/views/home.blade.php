@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Comment</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <center><a href="/create/newManga" class="btn btn-primary">New Comment</a></center>
 
                </div>
            </div>


            <div class="card mt-4">
                <div class="card-header"> All Comment </div>

                <div class="card-body">

                    @foreach ($upload as $item)

                        <div class="card-body">

                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div><h5> {{$item->title_name}} </h5></div>
                                    <div><i class="fa fa-comments-o" aria-hidden="true"></i> {{$item->details}}</div>
                                    <div><i class="fa fa-clock-o" aria-hidden="true"></i> <small>{{$item->created_at}}</small></div>

                                </li>

                              </ul>
                        </div>
                    
                        
                    @endforeach

                    

   
                </div>

                
            </div>


        </div>
    </div>
</div>
@endsection
