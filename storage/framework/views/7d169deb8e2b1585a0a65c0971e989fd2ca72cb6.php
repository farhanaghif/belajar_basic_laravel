
<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Edit Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('project.index')); ?>">Project</a></li>
                <li class="breadcrumb-item active">Edit Project</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <a class="m-4 text-end" href="<?php echo e(route('project.index')); ?>">
                        <div class="btn btn-info"><i class="bi bi-back"></i></div>
                    </a>
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="<?php echo e(route('project.update', $project)); ?>" method="POST">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Project Name</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" value="<?php echo e($project->name); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Owner</label>
                                <div class="col-sm-10">
                                    <input name="owner" type="text" value="<?php echo e($project->owner); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Deadline</label>
                                <div class="col-sm-10">
                                    <input name="deadline" type="date" value="<?php echo e($project->deadline); ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Progress</label>
                                <div class="col-sm-8">
                                    <input name="progress" type="number" value="<?php echo e($project->progress); ?>"
                                        class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <p>%</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" style="height: 100px"><?php echo e($project->description); ?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Project Leader</label>
                                <div class="col-sm-10">
                                    <select name="leader_id" class="form-select" multiple
                                        aria-label="multiple select example">
                                        <?php $__currentLoopData = $userLeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"
                                                <?php echo e($user->id == $project->leader_id ? 'selected' : ''); ?>>
                                                <?php echo e($user->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit Edit</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/project/edit.blade.php ENDPATH**/ ?>