<?php $this->load->view('Page_header')?>
<div class="bg-blue col-12" style="padding-top: 70px; padding-bottom: 0px;">
	<div class="bg-white mx-auto" style="width: 35%; padding: 35px;">
		<h3 class="text-center" style="font-size: 24px; margin-bottom: 16px;">Masuk</h3>
		<p class="text-center" style="font-size: 16px;">Hello! Masuk dan jelajahi informasi kesehatan terkini dan terlengkap sesuai kebutuhanmu di sini!</p>
		<!-- <p class="text-center" style="font-size: 16px;">Masuk dengan</p> -->
		<div class="text-center">
			<!-- <a class="button-fb btn btn-primary" href="/core_users/auth/facebook">Connect with Facebook</a> -->
			<p style="margin-top: 16px;">Masuk di Sini</p>
			<form method="post" action="<?= base_url('index.php/login_controller/masuk')?>">
				 <div class="form-group">
				    <input type="text" class="form-control col-12 mx-auto" id="exampleFormControlInput1" name="username" placeholder="Username atau email">
				 </div>
				 <div class="form-group">
				    <input type="password" class="form-control col-12 mx-auto" id="exampleFormControlInput1" name="password" placeholder="Password">
				 </div>
				 <div class="form-check text-left">
				    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
				    <!-- <label class="form-check-label" for="exampleCheck1">Ingat Saya</label> -->
				    <a href="" class="float-right" style="margin-bottom: 16px;">Lupa Kata Sandi?</a>
				  </div>
				  <input type="submit" class="btn btn-success col-12 text-white" style="margin-top: 0px" value="Masuk" />
				  <p style="margin-top: 16px;">Tidak Punya Akun? <a href="<?= base_url('index.php/register_controller');?>">Daftar</a></p>
			</form>
		</div>
	</div>
</div>

<div style="margin-top: 0px;">
<?php $this->load->view('Page_footer')?>
</div>
<hr>
<div class="footer-copyright" style="text-align: center;">
  <p>2020 HelloDoc!</p>
</div>