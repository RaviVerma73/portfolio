
<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Edit</h6>
                             <form action='<?php echo e(route('update')); ?>' method="post" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>" class="form-control" id="id">
                                    <input type="text" name="name" value="<?php echo e($data->name); ?>" class="form-control" id="Name" placeholder="Name">
                                    <label for="floatingName">Name</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="designation" value="<?php echo e($data->designation); ?>" class="form-control" id="Designation"
                                        placeholder="Name">
                                    <label for="floatingDesignation">Designation</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="email" name="email" value="<?php echo e($data->email); ?>" class="form-control" id="email"
                                        placeholder="Email">
                                    <label for="floatingName">Email</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="phone" value="<?php echo e($data->phone); ?>" class="form-control" id="phone"
                                        placeholder="Phone">
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="file" name="image" accept="image/*"  class="form-control" id="image" placeholder="Image">
                                    <label for="floatingImage">Image</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6" >
                                    <input type="file" name="cv" accept="PDF/*"  class="form-control" id="cv" placeholder="CV">
                                    <label for="floatingCV">CV</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                   <img src='<?php echo e(asset('storage/img/'.$data->image)); ?>' width="15%">
                                </div>
                                <div class="form-floating mb-3 col-sm-6" >
                                    <a href='<?php echo e(asset('storage/Doc/'.$data->cv)); ?>' target='_blank'>
                                        CV Download
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="text" name="age" value="<?php echo e($data->age); ?>" class="form-control" id="age"
                                        placeholder="Age">
                                    <label for="floatingAge">Age</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="residence" value="<?php echo e($data->residence); ?>" class="form-control" id="residence"
                                        placeholder="Residence">
                                    <label for="floatingResidence">Residence</label>
                                </div>
                            </div>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="text" name="freelance" value="<?php echo e($data->freelance); ?>" class="form-control" id="freelance"
                                        placeholder="Freelance">
                                    <label for="floatingFreelance">Freelance</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="address" value="<?php echo e($data->address); ?>" class="form-control" id="address"
                                        placeholder="Address">
                                    <label for="floatingAddress">Address</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating mb-3 ">
                                    <textarea class="form-control" name="descreption" placeholder="Leave a Descreption here" id="descreption" style="height: 150px;"><?php echo e($data->descreption); ?></textarea>
                                    <label for="floatingDescreption">Descreption</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href='<?php echo e(route('about-us')); ?>'>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/about_us/edit.blade.php ENDPATH**/ ?>