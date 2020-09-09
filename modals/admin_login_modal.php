










<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content text-center">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fas fa-user-lock"></i> Admin Sign In</h5>
			</div>
			<form method="post" action="">
			<div class="modal-body">
				<div >
					<input type="hidden" name="position" value="admin"/>
					<input type="hidden" name="username" value=""/>
					<div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span></div>
					<input class="form-control-sm form-control" id="pass" type="password" name="password" placeholder="Enter Password" required/></div>
				</div>
				<div class="modal-footer ">
					<button type="button" background-color= "#8064A2" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
					<button type="submit" name="login" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> login</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<form method="post" action="">
	<div class="modal-body">
<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">Admin</h5>

        <div class="md-form ml-0 mr-0">
          <input type="password" type="text" id="form29" class="form-control form-control-sm validate ml-0">
          <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label>
          <input type="hidden" name="position" value="admin"/>
					<input type="hidden" name="username" />
        </div>

        <div class="text-center mt-4">
          <button type="submit" name="login" class="btn btn-cyan mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
        </div>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->

</div>
</form>