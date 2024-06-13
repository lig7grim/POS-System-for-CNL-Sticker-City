<?php include('includes/header.php'); ?>


<div class="container-fluid px-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0"> Staff 
                <a href="staff-create.php" class="btn btn-primary float-end">Add Staff</a>
            </h4>
        </div>
        <div class="card-body">
            <?php alertMessage(); ?>

            <?php
            $staff = getAll('staff');
            if(!$staff){
                echo '<h4>Oopsie! Something Went Wrong!</h4>';
                return false;
            }
            if(mysqli_num_rows($staff) > 0)
            {

            ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        <?php
                        foreach($staff as $staffItem) :
                        ?>
                        <tr>
                            <td><?= $staffItem['id'] ?></td>
                            <td><?= $staffItem['name'] ?></td>
                            <td><?= $staffItem['email'] ?></td>
                            <td>
                                <?php

                                    if($staffItem['is_ban'] == 1){
                                        echo '<span class="badge bg-danger">Banned</span>';
                                    }else{
                                        echo '<span class="badge bg-primary">Active</span>';
                                    }

                                ?>
                            </td>
                            <td>
                                <a href="staff-edit.php?id=<?= $staffItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="staff-delete.php?id=<?= $staffItem['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody> 
                </table>
            </div>
            <?php
            }
            else
            {
                ?>
                <tr>
                <h4 class="mb-0">No Record Found!</h4>
            </tr>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>