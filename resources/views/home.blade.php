@extends('base')

@section('content')

<div class="container-fluid ml-5 mt-5">
 
    <div class="row ml-5 ">
         <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center text-danger">Cateogries</div>
                <ul class="list-group list-group-flush hover striped">
                  <li class="list-group-item">Sports</li>
                  <li class="list-group-item">Crime</li>
                  <li class="list-group-item">Politics</li>
                  <li class="list-group-item">National</li>
                  <li class="list-group-item">Technology</li>
                  <li class="list-group-item">International</li>
                  
                </ul>
                
              </div>
            </div>
       
        <div class="col-lg-7 mb-3">
            @foreach ($records as $r) 
            <div class="card py-2 px-2" style="border-bottom: 3px solid black; margin-bottom:15px;">
                <div class="card-header text-center"> <h5 class="card-title">{{$r->title}}</h5></div>
                <div class="row">
                    <div class="col-sm-4">
                      
                        <div class="card-image ml-5 mt-4 mb-3">
                            <img src="{{asset('images/'.$r->image)}}" alt="" style="max-width:100%;max-height:200px;margin-left:10%;" >
                            
                      </div>
                    </div>
                    <div class="col-sm-8 mt-4">
                            
                                <h5 class="card-title">{{$r->author}}</h5>
                                <p class="card-text">{{$r->discription}}</p>
                              
                                
                                <a href="#" class="btn btn-primary mt-3 mb-2 ml-5" style="background-color:#20bf6b;">Price : {{$r->price}} /-</a>
                                <a href="{{route('book.edit',['book'=> $r->id])}}" class="btn btn-info mt-2 ml-5 px-5" style="margin-left:60px">Edit</a>
                                <a href="{{route('book.show',['book'=>$r->id])}}" class="btn mt-3 mb-2 ml-5 px-5" style="background-color: #EE5A24;color:white;margin-left:40px">View</a>
                               
                                
                      </div>
                    </div>
                  </div>
             

                  @endforeach

                 


    
         
     
     
    </div>
   
</div>

<script>
  var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>





  
@endsection