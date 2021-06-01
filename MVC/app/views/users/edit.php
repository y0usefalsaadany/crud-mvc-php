<?php  include(VIEWS.'inc/header.php'); ?>
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">update User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="edit">
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
         
            <button type="submit" class="btn btn-primary" name="send">Submit</button>
        </form>
    </div>
   
<?php  include(VIEWS.'inc/footer.php'); ?>

 
  