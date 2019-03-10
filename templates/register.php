<?php include('./includes/header.php');?>

<form role="form" enctype="multipart/form-data" action="Register.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email"class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <label> Choose Username</label>
                        <input type="text"
                        name="username" class="form-control" placeholder="Enter a username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" 
                        name="password"class="form-control" placeholder="Enter a password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password2" class="form-control" placeholder="Confirm Your password">
                    </div>
                    <div class="form-group">
                        <label>Upload Avatar</label>
                        <input type="file" name="avatar" class="form-control-file">
                        <p class="help-block"></p>
                    </div>
                   <div class="form-group">
                        <label>About Me</label>
                        <textarea cols="20" name="about" rows="5" class="form-control"></textarea>
                   </div>
                   <input type="submit" value="Register" name="register" class="btn btn-success">
                </form>
                <?php include('./includes/footer.php');?>