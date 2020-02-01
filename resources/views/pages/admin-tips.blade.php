@extends('layouts.admin-app')
@section('admin-content')
{{-- begin of form for posting sickness, symtoms and treatment --}}
<img src="{{asset('img/eye3.jpeg')}}" alt="Los Angeles" width="1100" height="300"><br><br><br>
<div class="row">
    <div class="col-md-9 offset-md-2">
        <div class="card">
            <div class="card-heading bg-success text-white">Post Tips</div>
            <div class="card-body">
                <form action="/tips" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipsTitle">Title</label>
                        <input type="text" name="title" id="tipsTitle" class="form-control">
                        </div>
                    <div class="form-group">
                        <label for="tipsBody">Tips</label>
                        <textarea name="body" id="tipsBody" cols="25" rows="5" placeholder="Enter all the sickness Symtoms here" class="form-control"></textarea>
                        </div>
                     <button type="submit" class="btn btn-success text-white float-right">Proceed</button>
                </form>
            </div>
            </div>
    </div>
</div>
    
@endsection