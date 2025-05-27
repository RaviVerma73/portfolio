
<?php $__env->startSection('content'); ?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Blog List</h6>
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('blog.add')); ?>">+ Add</a>
                    </div>
                    
                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" id='allcheck' onclick='allcheck()' type="checkbox"></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" value='<?php echo e($val->id); ?>'></td>
                                        <td width='20%'><?php echo e($val->title); ?></td>
                                        <td width='20%'> <img src='<?php echo e(asset('storage/blog_img/'.$val->image)); ?>' alt='' width='50%'></td>
                                        <td width='40%'><?php echo e($val->description); ?></td>
                                        <td width='20%'>
                                            <a class="btn btn-sm btn-success" href="<?php echo e(Route('blog.edit',$val->id)); ?>">Edit</a>
                                            
                                            <a class="btn btn-sm btn-danger" href="<?php echo e(Route('blog.delete',$val->id)); ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            <script>
            function allcheck(){
                alert();
            }
            </script>
            <!-- Recent Sales End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/blog/list.blade.php ENDPATH**/ ?>