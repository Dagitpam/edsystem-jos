@extends('layouts.admin-app')
@section('admin-content')
{{-- begin of form for posting sickness, symtoms and treatment --}}
<img src="{{asset('img/eye3.jpeg')}}" alt="Los Angeles" width="1100" height="300"><br><br><br>
<div class="row">
    <div class="col-md-9 offset-md-2">
        <div class="card">
            <div class="card-heading bg-success text-white">Post Tips</div>
            <div class="card-body">
                <div class="width: 100%;">
                        @if (count($comments)>0)
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>sickness Name</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        @foreach ($comments as $comment)
                        <tbody>
                            <tr>
                                    
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->comment}}</td>    
                                </tr> 
                            @endforeach
                                
    
                           
                             </tbody>
                    </table>
                    @else
                    <p>No post found</p> 
                 @endif
                </div>
            </div>
            </div>
    </div>
</div>
    
@endsection