
<?php 
  
  include('3_connectusinglogin.php');
  
  $username = $_GET['username'];
  
  $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="4_5mysql-update-users.php" method="POST">
                
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $row['username'] ?>" placeholder="Please input your username" class="form-control”>
                  <input type="hidden" name="username" value="<?php echo $row['username'] ?>">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" value="<?php echo $row['password'] ?>" placeholder="Please input your password" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
