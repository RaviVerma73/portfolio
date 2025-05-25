
<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Edit</h6>
                             <form action='<?php echo e(route('services.update')); ?>' method="post" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>
                            <div class="col-sm-12" style="display:flex;">
                                <div class="form-floating mb-3 col-sm-6" style='margin-right: 4px;'>
                                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>" class="form-control" id="id">
                                    <input type="text" name="name" value="<?php echo e($data->name); ?>" class="form-control" id="Name" placeholder="Name">
                                    <label for="floatingName">Name</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-6">
                                    <input type="text" name="icon" value="<?php echo e($data->icon); ?>" class="form-control" id="icon"placeholder="Name">
                                    <label for="floatingicon">Icon</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating mb-3 ">
                                    <textarea class="form-control" name="description" placeholder="Leave a Descreption here" id="descreption" style="height: 150px;"><?php echo e($data->description); ?></textarea>
                                    <label for="floatingDescreption">Description</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href='<?php echo e(route('services')); ?>'>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/services/edit.blade.php ENDPATH**/ ?>