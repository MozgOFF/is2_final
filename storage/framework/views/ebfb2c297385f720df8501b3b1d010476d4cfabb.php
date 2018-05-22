<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Departments</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Dept_no</th>
                                <th>Dept_name</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $data['departments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="info">
                                    <td><?php echo e($department->dept_no); ?></td>
                                    <td><?php echo e($department->dept_name); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e($data['departments']->links()); ?>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Dep_emp</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Dept_no</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $data['dep_emp']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep_emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="info">
                                    <td><?php echo e($dep_emp->emp_no); ?></td>
                                    <td><?php echo e($dep_emp->dept_no); ?></td>
                                    <td><?php echo e($dep_emp->from_date); ?></td>
                                    <td><?php echo e($dep_emp->to_date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e($data['dep_emp']->links()); ?>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Dep_manager</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Dept_no</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $data['dep_manager']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep_manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="info">
                                    <td><?php echo e($dep_manager->emp_no); ?></td>
                                    <td><?php echo e($dep_manager->dept_no); ?></td>
                                    <td><?php echo e($dep_manager->from_date); ?></td>
                                    <td><?php echo e($dep_manager->to_date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e($data['dep_manager']->links()); ?>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Employees</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Birth_date</th>
                                <th>First_name</th>
                                <th>Last name</th>
                                <th>Gender</th>
                                <th>Hire_date</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $data['employees']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="info">
                                    <td><?php echo e($employees->emp_no); ?></td>
                                    <td><?php echo e($employees->birth_date); ?></td>
                                    <td><?php echo e($employees->first_name); ?></td>
                                    <td><?php echo e($employees->last_name); ?></td>
                                    <td><?php echo e($employees->gender); ?></td>
                                    <td><?php echo e($employees->hire_date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e($data['employees']->links()); ?>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Salaries</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>Salary</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $data['salaries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="info">
                                    <td><?php echo e($salary->emp_no); ?></td>
                                    <td><?php echo e($salary->salary); ?></td>
                                    <td><?php echo e($salary->from_date); ?></td>
                                    <td><?php echo e($salary->to_date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e($data['salaries']->links()); ?>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Titles</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="success">
                                <th>Emp_no</th>
                                <th>title</th>
                                <th>From_date</th>
                                <th>To_date</th>
                            </tr>
                            </thead>
                            <?php $__currentLoopData = $data['titles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="info">
                                    <td><?php echo e($title->emp_no); ?></td>
                                    <td><?php echo e($title->title); ?></td>
                                    <td><?php echo e($title->from_date); ?></td>
                                    <td><?php echo e($title->to_date); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e($data['titles']->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>