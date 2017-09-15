<?php $__env->startSection('styles'); ?>

    <link href="css/Redy/my-profile.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

               <br>

               <div id="profile-content">
               <div class="row" id="title-Row">
                    <div class="col-lg-4">
                        <p id="page-title">My Profile</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" >
                    </div>
                </div>
                </div>

                <br>

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <!--<img src="assets/images/users/5.jpg" class="img-circle" width="150" />-->
                                    <h4 class="card-title m-t-10"><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h4>
                                    <h6 class="card-subtitle">ID : <?php echo e(\Illuminate\Support\Facades\Auth::user()->id); ?></h6>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Business Sector</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="business-sector" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->business_sector); ?>" id="business-sector">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-10">
                                            <input type="text" name="mobile" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->telephone); ?>" id="mobile" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" name="email" id="email" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->email); ?>"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Location</label>
                                        <div class="col-md-10">
                                            <input type="text" name="location" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->location); ?>" id="location"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>