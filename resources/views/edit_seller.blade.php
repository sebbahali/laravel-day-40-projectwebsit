@extends('this')
@section('content')
    

<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">تعديل  زبون غير جاد </h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحة</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> تعديل  </li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-4">
                    @if(Auth::check())
                    <?php $user = Auth::user() ?>
                        <div class="card-body">
                            <div class="text-center chat-image mb-5">
                                <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                    <a class="" href="home_seller1"><img alt="avatar" src="{{ asset('storage/' . $user->path1) }}" class="brround"></a>
                                </div>
                                <div class="main-chat-msg-name">
                                    <a href="profile.html">
                                        <h5 class="mb-1 text-dark fw-semibold">{{ $user->name }}</h5>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 pt-0 fs-13">تاجر</p>
                                </div>
                            </div>
                            @endif

                    
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">تعديل     </h3>
                        </div>
                        <form method="post" action="{{route('edit',['Rtr'=>$Rtr['id']])}}" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">

                                    <div class="form-group">
                                        <label for="exampleInputname"> الإسم</label>
                                        <input type="text" class="form-control" name="name"  id="exampleInputname" placeholder=" الإسم الكامل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> السبب الكامل </label>
                                    <input type="text" class="form-control" name="description"  id="exampleInputEmail1" placeholder="السبب الكامل ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> رقم الهاتف </label>
                                    <input type="number" class="form-control" name="number"  id="exampleInputEmail1" placeholder=" رقم الهاتف">
                                </div>
                        </div> 
                        <div class="input-group realprocode control-group lst increment" >
                            <input type="file" name="filenames[]" class="myfrm form-control">
                            <div class="input-group-btn"> 
                              <button class="btn btn-success" type="button"> <i class="fldemo glyphicon glyphicon-plus"></i>إضافة</button>
                            </div>
                          </div>
                          <div class="clone hide">
                            <div class="realprocode control-group lst input-group" style="margin-top:10px">
                              <input type="file" name="filenames[]" class="myfrm form-control">
                              <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> حذف</button>
                              </div>
                            </div>
                          </div>
                       
                    </div>

                    </div>
                          
    
                           
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="d" style=" background-color: rgb(94, 231, 94); height: 40px;">تعديل </button>
                            
                            <a href="home_seller1" class="btn btn-danger my-1">إلغاء</a>
                        </div>
                    </div>    </form>

                   

        </div>























@endsection