<?php 
include("header.php");
?>
<div class="container">
	<div class="row">
		<a class="btn btn-primary" data-toggle="modal" href="#myModal" >Login</a>

        <div class="modal hide" id="myModal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h3>Login to MyWebsite.com</h3>
          </div>
          <div class="modal-body">
            <form method="post" action='' name="login_form">
              <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
              <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
              <p><button type="submit" class="btn btn-primary">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
            </form>
          </div>
          <div class="modal-footer">
            New To MyWebsite.com?
            <a href="#" class="btn btn-primary">Register</a>
          </div>
        </div>
	</div>
</div>
<?php 
 include("footer.php");