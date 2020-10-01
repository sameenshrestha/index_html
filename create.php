<?php
include('includes/header.php');
include('config/database.php');
if($_POST){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    $SQL = "INSERT INTO users (name,last_name,email,password,address,age) VALUES ('$first_name','$last_name','$email','$password','$address','$age')";
    $insert = $conn->query($SQL);
    //echo "Succefully posted form";

    if($insert) {
        header('location:index.php');
    }
    else{
        echo $conn->error;
    }
}
?>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div class="container">
    


    <h1>Create User</h1>

    <hr>
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="inputAddress" name="first_name" required>
            </div>    
            <div class="form-group col-md-6">
                <label for="inputAddress"> Last Name</label>
                <input type="text" class="form-control" id="inputAddress" name="last_name" required>
            </div>        
        
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" required>
        </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputZip">Age</label>
                <input type="text" class="form-control" id="inputZip" name="age" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div><br>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
        
        </form>



</div>










<?php
include('includes/footer.php');
?>