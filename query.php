function registrasi_akun_member($nama_lengkap_member,$email_member,$password_member)
	{
		$data = $this->koneksi->query("SELECT * FROM owner WHERE email_owner='$email_member'")or die(mysqli_error($this->koneksi));
		$cek_email_owner = $data->num_rows;

		if ($cek_email_owner == 0) 
		{
			$endpass = sha1($password_member);

			$kode = $this->generateRandomString(5);
			$ambil = $this->koneksi->query("SELECT * FROM member WHERE email_member='$email_member'")or die(mysqli_error($this->koneksi));
			$yangcocok = $ambil->num_rows;

			if ($yangcocok == 0) 
			{
				$this->koneksi->query("INSERT INTO member (nama_member, email_member, password_member, status_member, kode_aktivasi_member) VALUES ('$nama_lengkap_member','$email_member','$endpass','Tidak Aktif','$kode')")or die(mysqli_error($this->koneksi));

				$body = "<h1>Selamat Datang Di SewoBro</h1>"; 
				$body .= "<p>Terima Kasih telah melakukan pendaftaran akun member di SewoBro, Berikut Detail Akun Anda</p>";
				$body .= "
				<table>
				<tr>
				<th>Email</th>
				<td>$email_member</td>
				</tr>
				<tr>
				<th>Password</th>
				<td>$password_member</td>
				</tr>
				</table>";
				$body .= "<p>Silahkan aktivasi akun anda melalui link berikut ini <br>
				<a href='10.200.119.144/aplikasi-skripsi/aktivasi_akun_member.php?kode=".$kode."'>Aktivasi</a></p>";
				// ganti dengan url sesuai file berada dimana
				// <a href='teamtrainit.com/aktivasimember.php?kode=".$kode."'>Aktivasi</a></p>";
				// teamtrainit.com diganti dengan nama url web

				// $body = preg_replace("/[]/","",$body);
				$mail = new PHPMailer();
				$mail->IsSMTP(); // telling the class to use SMTP 
				$mail->SMTPOptions = array('ssl' => array('verify_peer' => false,
					'verify_peer_name' => false, 'allow_self_signed'=>true));
				$mail->Host = "smtp.gmail.com"; // SMTP server 
				$mail->SMTPDebug = 2; // enables SMTP debug information (for testing) // 1 = errors and messages // 2 = messages only 
				$mail->SMTPAuth = true; // enable SMTP authentication 
				$mail->SMTPSecure = "tls"; // sets the prefix to the servier 
				$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server 
				$mail->Port = 587; // set the SMTP port for the GMAIL server 
				$mail->Username = "rohman.telesandi12@gmail.com"; // GMAIL username 
				$mail->Password = "inipasswordnya"; // GMAIL password

				$mail->SetFrom('sewamenyewajogja@gmail.com', 'Admin Sewa Menyewa Jogja');

				// $mail->AddReplyTo("teamtrainit@gmail.com","Aaron John");

				$mail->Subject = "Pendaftaran Member";

				$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

				$mail->MsgHTML($body);

				
				$mail->AddAddress($email_member);

				// $mail->AddAttachment("images/phpmailer.gif"); // attachment 
				// $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

				if(!$mail->send())
				{
					return "Email Gagal";
				}
				else
				{
					return "Berhasil Kirim";
				}
				// return "sukses";
			}
			else
			{
				return "gagal tersimpan";
			}
			
			// return "gagal";
		}
		else
		{
			return "gagal";
		}
	}
