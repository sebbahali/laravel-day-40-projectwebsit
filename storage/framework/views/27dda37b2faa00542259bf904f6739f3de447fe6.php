
<?php $__env->startSection('content'); ?>
    

<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">تعديل الحساب</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">صفحة</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> تعديل الحساب</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-4">
                    <?php if(Auth::check()): ?>
                    <?php $user = Auth::user() ?>
                        <div class="card-body">
                            <div class="text-center chat-image mb-5">
                                <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                    <a class="" href="home_seller1"><img alt="avatar" src="<?php echo e(asset('storage/' . $user->path1)); ?>" class="brround"></a>
                                </div>
                                <div class="main-chat-msg-name">
                                    <a href="profile.html">
                                        <h5 class="mb-1 text-dark fw-semibold"><?php echo e($user->name); ?></h5>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 pt-0 fs-13">تاجر</p>
                                </div>
                            </div>
                            <?php endif; ?>

                    
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> تعديل الحساب</h3>
                        </div>
                        <form action="<?php echo e(route('update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputname"> الإسم</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo e(old('name', $user->name)); ?>" id="exampleInputname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> بريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email', $user->email)); ?>" id="exampleInputEmail1" placeholder="Email address">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputname1"> كلمة السر</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputname1" placeholder="تأكيد كلمة السر">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputname1"> تأكيد كلمة السر </label>
                                    <input type="password" class="form-control" name="password_confirmation" id="exampleInputname1" placeholder="Enter Last Name">
                                </div>
                            </div>
                        </div> 
                        <div style="display: flex; justify-content: center;">
                            <div class="form-group">
                              <label for="image">صورة شخصية</label>
                              <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                          </div>
                          
    
                           
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="d" style=" background-color: rgb(94, 231, 94); height: 40px;">حفظ المعلومات</button>
                            
                            <a href="home_seller1" class="btn btn-danger my-1">إلغاء</a>
                        </div>
                    </div>    </form>

                   

        </div>























<?php $__env->stopSection(); ?>
<?php echo $__env->make('this', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/infoo.blade.php ENDPATH**/ ?>