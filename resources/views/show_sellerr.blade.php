@extends('this')
@section('content')


 <!--app-content open-->
 <div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">تمت الإضافة</h1>
                <div>
                    <ol class="breadcrumb">
\                        <li class="breadcrumb-item active" aria-current="page">تمت الإضافة</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
                                 
                                <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                    <div class="mt-2 mb-4">
                                        <div style="text-align: center; border: 2px solid rgb(18, 140, 170); padding: 20px;">
                                            <h3 class="mb-3 fw-semibold">الإسم الكامل: {{ $Rtr->name }}</h3>
                                            <p>السبب: {{ $Rtr->description }}</p>
                                            <p>رقم الهاتف: {{ $Rtr->number }}</p>
                                          </div>
                                        </div>
                                    </div>
                                  
                                      
            <div class="demo-gallery card">
                <div class="card-header">
                    <div class="card-title">الصور </div>
                </div>
                <div class="card-body">
                    <ul id="lightgallery" class="list-unstyled row">
                        @for($i = 0; $i < count($files); $i++)
                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="../assets/images/media/1.jpg" data-src="../assets/images/media/1.jpg" data-sub-html="<h4>Gallery Image {{ $i+1 }}</h4><p></p>">
                          <a href="{{ asset('files/' . $files[$i]) }}" >
                            <img class="img-responsive br-5" src="{{ asset('files/' . $files[$i]) }}" alt="Thumb-{{ $i+1 }}">
                          </a>
                          @if(!file_exists(public_path('files/' . $files[$i])))
                          <p>صور غير موجودة </p>                          @endif
                        </li>
                      @endfor
                      <div class="col-md-3 text-right">
                        <a href="{{route('edit_seller',['Rtr'=>$Rtr['id']])}}" class="edit-button btn btn-primary">تعديل</a>
                    </div>
                    
                       
                    </ul>

                </div>
        </div>
    </div>           
 
                    </div>
                </div>
               
                
                


















    
@endsection