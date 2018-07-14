<?php 
include 'config/config.php';
include 'plugins/phpmailer/PHPMailerAutoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Akun Member Sewa Menyewa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noticia+Text" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/custom-login.css">
	<script type="text/javascript" src="plugins/Bootstrap-Validator-master/dist/js/bootstrapValidator.js"></script>

	<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- <script src="plugins/jQuery/jquery-2.2.3.min.js"></script> -->
	<!-- <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.2.min.js"></script> -->
	<script type="text/javascript" src="plugins/Bootstrap-Validator-master/vendor/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="plugins/Bootstrap-Validator-master/dist/js/bootstrapValidator.js"></script>

	<script>
		// function buttonState(){
		// 	$("input").each(function(){
		// 		$('#register').attr('disabled', 'disabled');
		// 		if($(this).val() == "" ) return false;
		// 		$('#register').attr('disabled', '');
		// 	})
		// }

		// $(function(){
		// 	$('#register').attr('disabled', 'disabled');
		// 	$('input').change(buttonState);
		// })
	</script>
	<script>
		function hanyaAngka(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
	</script>

<body>
	<div class="container">
		<!-- <div id="particles"></div> -->

		<div class="box-login">
			<div class="font-style margin-bottom-20">
				<h2 class="text-center">SEWO BRO</h2>
				<p class="text-center">DAFTAR DI SEWO BRO</p>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="box-login-grid">
						<div class="box-title-login">
							<h3 class="text-center"><b>REGISTRASI AKUN MEMBER</b></h3>
						</div>
						<form id="validasiForm" method="POST" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Lengkap</label>
								<div class="col-sm-9">
									<input type="text" name="nama_lengkap_member" class="form-control" placeholder="Input Nama Lengkap">
								</div>
							</div>
							<!-- <div class="form-group">
								<label class="col-sm-3 control-label">Tanggal Lahir</label>
								<div class="col-sm-9">
									<input type="text" name="tgl_lahir" class="form-control" placeholder="Input Username">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jenis Kelamin</label>
								<div class="col-sm-9">
									<div class="radio">
										<label>
											<input type="radio" name="jk_member" value="Laki - Laki" /> Laki - Laki
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="jk_member" value="Perempuan" /> Perempuan
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status Pekerjaan</label>
								<div class="col-sm-9">
									<select class="form-control" name="status_pekerjaan">
										<option value="-">-Pilih Pekerjaan-</option>
										<option value="PNS/Non PNS">PNS/Non PNS</option>
										<option value="Buruh Pabrik/Karyawan Swasta">Buruh Pabrik/Karyawan Swasta</option>
										<option value="Kantor">Kantor</option>
										<option value="Wirausaha">Wirausaha</option>
										<option value="Pelajara/Mahasiswa">Pelajara/Mahasiswa</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nomor Tlp/Hp</label>
								<div class="col-sm-9">
									<input type="text" name="no_tlp_member" class="form-control" placeholder="Input Nomor Tlp/Hp" onkeypress="hanyaAngka(event)">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Alamat Lengkap</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="alamat_member" rows="4"></textarea>
								</div>
							</div> -->
							<div class="form-group">
								<label class="col-sm-3 control-label">Alamat Email</label>
								<div class="col-sm-9">
									<input type="email" name="email_member" class="form-control" placeholder="Input Email">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input type="password" name="password_member" class="form-control" placeholder="Input Password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Konfirmasi Password</label>
								<div class="col-sm-9">
									<input type="password" name="konfirmasipassword_member" class="form-control" placeholder="Input Confirmasi Password">
								</div>
							</div>
							<!-- <div class="form-group">
								<label class="col-sm-3 control-label">Foto Profile</label>
								<div class="col-sm-9">
									<input type="file" name="foto_member" class="form-control">
								</div>
							</div> -->
							<div class="form-group">
								<label class="col-sm-3 control-label">Captcha</label>
								<div class="col-sm-9">
									<div class="g-recaptcha" data-sitekey="6Lf5ek0UAAAAAImupyDridMfOL3BjPtQ9Vw1jfuL"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-3 col-sm-9">
									<button type="submit" name="registrasi_member" id="register" class="btn btn-success btn-md"><i class="fa fa-save"></i>&nbsp; SIGN UP</button>
								</div>
							</div>
						</form>
						<?php 
						if (isset($_POST['registrasi_member'])) 
						{
							if ($_POST['password_member'] == $_POST['konfirmasipassword_member']) 
							{
								$hasil = $akun_member->registrasi_akun_member($_POST['nama_lengkap_member'], $_POST['email_member'], $_POST['password_member']);

								if ($hasil == "Berhasil Kirim") 
								{
									echo "<script>alert('Selamat anda berhasil mendaftar sebagai member, silahkan cek email anda. Terima kasih');</script>";
									echo "<script>location='login.php'</script>";
								}
								elseif($hasil == "Email Gagal")
								{
									echo "<script>alert('Gagal mengirim email');</script>";
									// echo "<script>location='registrasi_akun_member.php';</script>";
								}
								else
								{
									echo "<script>alert('Email/Password anda salah atau sudah terdaftar, silahkan cek kembali');</script>";
									// echo "<script>location='registrasi_akun_member.php';</script>";
								}
							}
							else
							{
								echo "<script>alert('Password anda salah, silahkan ulangi kembali');</script>";
								// echo "<script>location='registrasi_akun_member.php';</script>";
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#validasiForm').bootstrapValidator({
				message : 'This value is not valid',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nama_lengkap_member: {
						validators: {
							notEmpty: {
								message: 'Nama lengkap wajib di isi, tidak boleh kosong'
							}
						}
					},
					email_member: {
						validators: {
							emailAddress: {
								message: 'The input is not a valid email address'
							}
						}
					},
					password_member: {
						validators: {
							notEmpty: {
								message: 'Password wajib di isi dan tidak \'boleh kosong'
							},
							identical: {
								field: 'confirmasipassword_member',
								message: 'Password dan konfirmasi password tidak sesuai'
							}
						}
					},
					konfirmasipassword_member: {
						validators: {
							notEmpty: {
								message: 'The confirm password is required and can\'t be empty'
							},
							identical: {
								field: 'password_member',
								message: 'The password and its confirm are not the same'
							}
						}
					},


				}
			});
		});
	</script>
</body>
</html>
