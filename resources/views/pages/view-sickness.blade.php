


@extends('layouts.app')
@section('content')
                <div class="jumbotron bg-default">         
                        <div class="card">
                            <div class="card-heading bg-success"><h3 class="text-white text-center">{{$sick->name}}</h3></div>
                            {{-- <div class="card-body" style="overflow-x:scroll"> --}}
                                    <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 offset-1"><b>Symtoms:</b></div>
                                    <div class="col-md-9">b{{$sick->symtoms}}</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2 offset-1"><b>Treatment:</b></div>
                                    <div class="col-md-9">{{$sick->diagnose}}</div>
                                </div>
                                {{-- <table class="table table-bordered">
                                    <tr>
                                        <td style="">Symtoms:</td>
                                         <td style="">{{$sick->symtoms}}</td>
                                    </tr>
                                    <tr>
                                     <td style="">Treatment:</td>
                                      <td style="">{{$sick->diagnose}}</td>
                                 </tr>
                                </table> --}}
                                
                            </div>
                            
                        </div>
                        <form action="/comment" method="post">
                         @csrf
                         <div class="form-group">
                             <label for="comment">Comment</label>
                             <textarea name="comment" id="comment" cols="25" rows="5" class="form-control" placeholder="Say something..."></textarea>
                         </div>
                         <input type="hidden" value="{{$sick->name}}" name="commentName">
                         <a href="/home" class="btn btn-danger"><- Back</a>
                         <button type="submit" class="btn btn-success float-right text-white">Proceed</button>
                         </form>       
             </div> 
     
@endsection
