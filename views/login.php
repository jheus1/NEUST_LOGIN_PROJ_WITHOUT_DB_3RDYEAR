<!DOCTYPE html>
<html lang="en">
   <head>
   <?php include '../includes/topbar_1.php';?>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-center mt-5">
            <div class="col-md-4">
               <div class="card">
                  <div class="row justify-content-center">
                     <img src="../images/neust.png" class="card-img-top mt-3" alt="card-img-top" style="height: 200px; width: 225px">
                  </div>
                  
                  <div class="card-body">
                     <div class="form">
                        <form action="" method="post" enctype="multipart/form-data">
                           <h3 class="text-center mb-4">LOGIN NOW</h3>
                           <div class="inputGroup">
                              <div class="form-outline mb-4 group">
                                 <input type="email" name="email" id="login_input_email" placeholder=" " class="input" required>
                                 <label for="login_input_email">Email</label>
                                 <span class="bar"></span>
                                 <span class="highlight"></span>
                              </div>
                           </div>
                           <div class="input-group mb-3 group">
                              <span class="btn-show-pass">
                              <i class="fa-regular fa-eye" type="button" id="togglePassword">
                              </i>
                              </span>
                              <input type="password" name="password" id="password" class="input" placeholder=" " required >
                              <label for="password">Password</label>
                              
                              <span class="bar"></span>
                              <span class="highlight"></span>
                           </div>

                           <div class="d-flex justify-content-between align-items-center">
                           </div>
                           <div class="row justify-content-center mt-3 mb-2">
                              <button type="submit" name="submit" value="login now" class="btn btn-warning mb-3">LOGIN</button>
                           </div>
                           <p>Don't have an account? <a href="register.php" class="t1">REGISTER NOW</a></p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <?php include '../includes/library.php';?>
</html>