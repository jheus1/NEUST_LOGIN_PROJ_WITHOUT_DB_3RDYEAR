
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include '../includes/topbar_2.php';?>
   </head>
   <body id="page-top" onload="startTime()">
      <div class="form-container">
         <div class="row justify-content-center">
            <div class="col-md-4">
               <div class="card mt-2">
                  <div class="row justify-content-center">
                     <img src="../images/neust.png" class="card-img-top mt-3" alt="card-img-top" style="height: 200px; width: 225px">
                  </div>
                  <div class="card-body">
                     <form action="" method="post" enctype="multipart/form-data">
                        <h3 class="text-center t2">REGISTER NOW</h3>
                        <div class="form-outline mb-3">
                           <input id="login_input_username" class="form-control border border-info" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username" required autofocus />
                           <p style="font-size: 11px; color: black;">Username (only letters and numbers, 6 to 64 characters)</p>
                        </div>

                        <div class="form-outline mb-4">
                           <input type="email" name="email" placeholder="Enter email" class="form-control border border-info" required>
                        </div>

                        <div class="input-group mb-3">
                           <input type="password" name="password" id="password" class="form-control border border-info" placeholder="Enter password" name="user_password_new" pattern=".{6,}" required autofocus>
                           <i class="btn btn-outline-info btn btn-light bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                           <p style="font-size: 11px; color: black;">Password has a minimum length of 6 characters</p>
                        </div>

                        <div class="input-group mb-3">
                           <input type="password" name="password" id="cpassword" class="form-control border border-info" placeholder="Confirm password" name="user_password_new" pattern=".{6,}" required autofocus>
                           <i class="btn btn-outline-info btn btn-light bi bi-eye-slash" id="toggleCPassword"></i>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                        </div>

                        <div class="form-outline mb-3">
                           <input type="file" name="image" class="form-control border border-info" accept="image/jpg, image/jpeg, image/png">
                        </div>

                        <div class="form row justify-content-center">
                           <button type="submit" value="register now" class="btn btn-warning mb-3" name="register" value="Register" title="Register">REGISTER</button>
                        </div>
                        <p>Already have an account? <a href="login.php" class="t1 mt-3">LOGIN NOW</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include '../includes/library.php';?>
   </body>
</html>