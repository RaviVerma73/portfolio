

<?php $__env->startSection('content'); ?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <h6 class="mb-4">My Profile</h6>
                            <form action='<?php echo e(route('profile')); ?>' method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <div class="form-floating mb-3">
                                <?php if(auth()->user()->name): ?>
                                    <input type="text" name="name" value="<?php echo e(auth()->user()->name); ?>" class="form-control" id="floatingName"
                                        placeholder="Name">
                                        <?php endif; ?>
                                    <label for="floatingName">Name</label>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class='error'><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="emial" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" value ="<?php echo e(auth()->user()->email); ?>" Readonly>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" value="<?php echo e(auth()->user()->password); ?>" class="form-control" id="floatingPassword"
                                        placeholder="Password" Readonly>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="phone" value="<?php echo e(auth()->user()->phone); ?>" class="form-control" id="floatingPhone"
                                        placeholder="Name">
                                    <label for="floatingPhone">Phone</label>
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class='error'><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" name="image" accept='image/*' value="<?php echo e(auth()->user()->image); ?>" class="form-control" id="floatingimage"
                                        placeholder="Name">
                                    <label for="floatingPhone">Image</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <img src="<?php echo e(asset('storage/img/' . auth()->user()->image)); ?>" alt="User Image" width="150">

                                    
                                    
                                </div>
                                <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/dashboard/profile.blade.php ENDPATH**/ ?>