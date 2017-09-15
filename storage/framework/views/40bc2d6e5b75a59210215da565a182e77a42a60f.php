<?php $__env->startSection('styles'); ?>

    <link href="css/Redy/new-customer.css" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

               <br>

                <div class="row" id="page-content">
                    <!-- column -->
                    <div class="col-lg-12">
                        
                        <div class="row">
                            <form name="new-job" id="new-job" method="post" action="<?php echo e(url('store')); ?>" style="width: 100%;">
                                <?php echo e(csrf_field()); ?>

                            <div class="row" id="title-Row">
                                <div class="col-lg-4">
                                    <p id="page-title">Job Registration</p>
                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-4" >
                                </div>
                            </div>

                            <div class="row" id="empty-row"> </div>

                            <div class="row">

                            <div class="col-lg-4">
                                <label class="form-label">Customer Name</label><br>
                                <input class="form-control" style="width: 100%;" required name="Name" id="customer-name" placeholder="Nimal">
                                <br><br>
                                <label class="form-label">Phone Number</label><br>
                                <div class="row">
                                <!--
                                    <div class="col-lg-3" id="mobile-ext">
                                        <input class="form-control" name="phone-extention" id="phone-extention" placeholder="+94">
                                    </div>-->
                                    <div class="col-lg-12" id="mobile-number">
                                        <input type="text" required name="Mobile" class="form-control" id="phone-number" placeholder="User Name (Mobile)">
                                    </div>
                                </div>
                                <br>
                                <label class="form-label">Work</label><br>
                                <input type="text" class="form-control" name="Work" id="work" placeholder="A Description About Work">
                                <br><br>
                            </div>

                            <div class="col-lg-1"></div>


                            <div class="col-lg-4">
                                <label class="form-label">Completion Date (Estimated)</label><br>
                                <input type="Date" required name="Complete_Date" id="completion-date" class="form-control">
                                <br><br>
                                <label class="form-label">Amount</label><br>
                                <input type="text" class="form-control" required name="Amount" id="amount" placeholder="LKR Amount">
                                <br><br>

                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8" id="btn-row">
                                        <button class="btn btn-title" onclick="window.location='<?php echo e(url("dashboard")); ?>'" style="background-color: #FF5A5F;">Back</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="submit" class="btn btn-title" style="background-color: #1abc9c;" name="submit" id="submit" value="Save">
                                    </div>
                                </div>
                            </div>  

                            </div> 
                                
                            </form>

                            <br><br>

                            <?php if(session()->has('notif')): ?>
                                <div class="row">
                                    <div class="alert alert-success" style="background-color: #1abc9c;">
                                        <button type="button" class="close" data-dismiss="alert" area-hidden="true">
                                            &times;
                                        </button>
                                        <span style="color: #FFFFFF;"><?php echo e(session()->get('notif')); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>