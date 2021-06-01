<?php include "inc/header.php";?>

    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Home Page</h1>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach($data as $row ):?>
                    <tr>
                        <th><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a class="btn btn-info" href="edit/<?php echo $row['id']; ?>"> <i class="fa fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delete/<?php echo $row['id']; ?>"> <i class="fa fa-close"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
               
                
                </tbody>
            </table>
        </div>
    </div>

<?php include "inc/footer.php";?>

 
  