@extends('layouts.admin-app')
@section('admin-content')
{{-- begin of form for posting sickness, symtoms and treatment --}}
<img src="{{asset('img/eye3.jpeg')}}" alt="Los Angeles" width="1100" height="300"><br><br><br>
<div class="row">
    <div class="col-md-9 offset-md-2">
        
        <div class="card">
            <div class="card-heading bg-success text-white">Upload Symtoms and treatment</div>
            <div class="card-body">
                <form action="/admin" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="sicknessTitle">Sickness Title</label>
                        <input type="text" id="sicknessTitle" name="name" placeholder="name of sickness" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sicknessSymtoms">Sickness Symtoms</label>
                        <textarea name="symtoms" id="sicknessSymtoms" cols="25" rows="5" placeholder="Enter all the sickness Symtoms here" class="form-control"></textarea>
                        </div>
                    <div class="form-group">
                        <label for="sicknessTreatment">Sickness Diagnose</label>
                        <textarea name="diagnose" id="sicknessTreatment" cols="25" rows="5" placeholder="Recommend Treatment here" class="form-control"></textarea>
                     </div>
                     <button type="submit" class="btn btn-success float-md-right">Proceed</button>
                </form>
            </div>
            </div>
    </div>
</div>
    
@endsection