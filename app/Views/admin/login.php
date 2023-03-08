<?= $this->extend('layout/login_admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><img src="/img/bspji.png" alt="" width="100" height="120" class="d-inline-block align-text-top"></h2></span>
				<h4 class="company_title">E-TATA DINAS</h4>
                <h6 class="company_title" style="">BSPJI SAMARINDA</h6>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>LOGIN</h2>
					</div>
					<div class="row">
						<form control="" class="form-group">
							<div class="row">
								<input type="text" name="nip" id="nip" class="form__input" placeholder="Username">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
						
							<div class="row justify-content-center" >
								<input  type="submit" value="Submit" class="btn">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>


<?= $this->endSection(); ?>