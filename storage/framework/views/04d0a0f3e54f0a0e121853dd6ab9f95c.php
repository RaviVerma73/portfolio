
<?php $__env->startSection('content'); ?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Contact Form List</h6>
                        
                    </div>
                    
                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" id='allcheck' onclick='allcheck()' type="checkbox"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" value='<?php echo e($val->id); ?>'></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->email); ?></td>
                                        <td><?php echo e($val->message); ?></td>
                                        
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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/contact_form/list.blade.php ENDPATH**/ ?>