@extends('base')

@section('content')
    
<div class="container-fluid ml-5 mt-5">
 
    <div class="row ml-5 ">
         <div class="col-lg-3">
         
            </div>
       
        <div class="col-lg-7 mb-3">
            
            <div class="card py-2 px-2" style="border-bottom: 3px solid black; margin-bottom:15px;">
                <div class="card-header text-center"> <h5 class="card-title">{{$record->title}}</h5></div>
                <div class="row">
                    <div class="col-sm-4">
                      
                        <div class="card-image ml-5 mt-4 mb-3">
                            <img src="{{asset('images/'.$record->image)}}" alt="" style="max-width:100%;max-height:200px;margin-left:10%;" >
                            
                      </div>
                    </div>
                    <div class="col-sm-8 mt-4">
                            
                                <h5 class="card-title">{{$record->author}}</h5>
                                <p class="card-text">{{$record->discription}}</p>
                              
                                
                                <a href="#" class="btn btn-primary mt-3 mb-2 ml-5" style="background-color:#20bf6b;">Price : {{$record->price}} /-</a>
                                
                                <a href="{{route('book.edit',['book'=> $record->id])}}" class="btn btn-info mt-2 ml-5 px-5">Edit</a>
                                <form action="{{ route('book.destroy',['book'=>$record->id])}}" method="post" class="d-inline">
                                          @csrf
                                           @method('delete')

                                           <input type="submit" value="Delete" class="btn btn-danger form-control mt-3 mb-4 d-inline">
                            </form>
                      </div>
                    </div>
                  </div>
             


                 


    
         
     
     
    </div>
   
</div>
@endsection