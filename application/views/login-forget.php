<section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title" style="color:#fefeff !important;">Forget Password</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
</section>
<div class="white">
    <div class="container login-form">
        <div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
				<form class="form-horizontal well" method="post" id="form" action="<?php echo base_url("Login/doforget");?>">
				<fieldset>
					<legend>Reset password</legend>
						<br>
						<div class="control-group">
							<label for="email"> Email : </label>&nbsp;&nbsp;
							<input class="box form-control" type="text" id="email" name="email" />
						</div>
						<br><br>
						<div class="control-group">
							<label for="phone_number"> Phone Number : </label>&nbsp;&nbsp;
							<input class="box form-control" type="text" id="phone_number" name="phone_number" />
						</div>
						<br><br>
						<div class="form-actions">
							<input type="submit" class="btn btn-primary" value="Reset" />
						</div>
						<br><br>
						<?php if( isset($info)): ?>
							<div class="alert alert-success">
								<?php echo($info) ?>
							</div>
						<?php elseif( isset($error)): ?>
							<div class="alert alert-error">
								<?php echo($error) ?>
							</div>
						<?php endif; ?> 
						
					</fieldset>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>