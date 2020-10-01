<?php
include('includes/header.php');
include('config/database.php');

    if($_GET && $_GET['id']) {
        $sql = "SELECT * FROM users where id=" . $_GET['id'];
        $users = $conn->query($sql);
        $data = mysqli_fetch_assoc($users);
    }
?>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div class="container">
    


    <h1>UPDATE User</h1>

    <hr>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name = "id" value = "<?php echo $data['id'];?>">
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="inputAddress" name="first_name" value = "<?php echo $data['name']; ?>" required>
            </div>    
            <div class="form-group col-md-6">
                <label for="inputAddress"> Last Name</label>
                <input type="text" class="form-control" id="inputAddress" name="last_name" value = "<?php echo $data['last_name']; ?>"required>
            </div>        
        
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" value = "<?php echo $data['email']; ?>"required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" value = "<?php echo $data['password']; ?>"required>
        </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value = "<?php echo $data['address']; ?>"required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputZip">Age</label>
                <input type="text" class="form-control" id="inputZip" name="age" value = "<?php echo $data['age']; ?>"required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div><br>
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
        
        </form>



</div>










<?php
include('includes/footer.php');
?>