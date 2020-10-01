<?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('config/database.php');
?>
<div class="container">
      <div class="row justify-content-center">
      <h1 class="text-center">System User</h1>
      </div>
    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-success float-right" href="/index_html/create.php">+ Add New</a>
        <table class="table table-responsive-md">
        
        <table class="table table-sm table-dark">
      </div>  
    </div>  
      <thead>
        <tr class="bg-primary">
          <th scope="col">Id</th>
          
          <th scope="col">Full Name</th>
          <th scope="col">Age</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql); //This line runs the select query
  // echo "<pre>";
  // print_r($result);
  // die();
  while($row = $result->fetch_array()) {
  ?>
  <tr>
    
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td> 
      <a href = "update.php?id=<?php echo $row['id']; ?>">Edit</a> |
      <a href = "/index_html/process/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
  </tr>
  <?php
  }
  ?>


  </tbody>
</table>

<?php
include('includes/footer.php');
?>

   