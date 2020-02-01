@extends('layouts.app')
@section('content')
<div class="row">
    
    <div class="col-md-9">
        <div class="jumbotron" style="height: 500px;">
            <h1>Healthy Eyes</h1>      
            <p>Good vision helps you perform well—at home, at work,
               or behind the wheel. That’s why it’s important to take 
               a few simple steps to make sure you help keep your eyesight at its best. 
               A regular eye exam is the best way to protect your eyesight – 
              and an easy precaution to take. Here are some tips to 
              help maintain eye health as you age.
              As part of your healthy diet, choose foods rich in antioxidants,
               like Vitamins A and C; foods like leafy, green vegetables and fish. Many foods 
              – especially fatty fish, such as salmon – contain essential omega-3 
              fatty acids that are important to the health of the macula, the part of 
              the eye responsible for central vision.

              An inadequate intake of antioxidants, consumption of alcohol or saturated 
              fats may create free-radical reactions that can harm the macula – the central
               part of the retina. High-fat diets can also cause deposits that constrict blood 
               flow in the arteries. The eyes are especially sensitive to this, given the small 
               size of the blood vessels that feed them.
              
              Your eyes are unique, and have their own set of nutritional needs. Ocuvite eye vitamins
               are specially designed to provide a balanced combination of nutrients dedicated to the
                health of your eyes.* Visit Ocuvite.com to learn more.
            </p>
            <button class="btn btn-danger text-white">LogIn</button>
            <button class="btn btn-success text-white">Register</button>
          </div> 
        </div>
          <div class="col-md-3">
              <div class="jumbotron bg-default"> 
                      @if (count($data['symtoms'])> 0)
                      <p class="text-danger">Click and view list of sickness</p>
                          <ul class="list-group bg-dark">       
                             
                          @foreach ($data['symtoms'] as $symtom)
                          <li class="list-group-item"> <a href="/home1/{{$symtom->id}}">{{$symtom->name}}</a></li>
                          @endforeach
                           </ul>       
                     
      
                  </ul>
                  @else
                  <p>No Post Found</p>  
                @endif
      
              </div>
      
          </div>
</div>
            {{-- Tips display begins --}}  
           <h2 class="text-white text-center">Eyes Tips</h2>       
           <div class="row">
             @foreach ($data['tips'] as $tip)
             <div class="col-md-4">
                <div class="card">
                  <div class="card-heading bg-success">
                    <h3>{{$tip->title}}</h3>
                  </div>
                  <div class="card-body">
                    <p>{{$tip->body}}</p>
                  </div>
                </div>
              </div><br><br>
             @endforeach
             
          {{$data['tips']->links()}}
           </div>
               
               {{-- <div class="row">
               @foreach ($data['tips'] as $tip)
               
                  <div class="col-md-6">
                      
                           <h3>{{$tip->title}}</h3><br>
                          
                            <p>{{$tip->body}}</p>
                          
                        </div>
                  <br><br><br>
                     
                 @endforeach
    
               </div> --}}
              
                
          


@endsection
