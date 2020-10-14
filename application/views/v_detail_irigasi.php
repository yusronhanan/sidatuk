<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Forms - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <script>
        $(document).ready(function(){
        $("input[type='radio']").change(function(){
        if($(this).val()=="ya")
            {
            $("#file").show();
            $("#keterangan").hide();
            }
        else 
            {
            $("#file").hide();
            $("#keterangan").show();
            }
        });
        });
        </script> -->
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
	<div class="wrapper sidebar_minimize">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
					<a href="index.html" class="logo">
						<h2 style="color: white;" alt="navbar brand" class="navbar-brand">SIDATUK</h2>
					</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="index.html" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Daftar Paket</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="irigasi.html">
											<span class="sub-item">Irigasi</span>
										</a>
									</li>
									<li>
										<a href="sundawapan.html">
											<span class="sub-item">Sundawapan</span>
										</a>
									</li>
									<li>
										<a href="sapras.html">
											<span class="sub-item">Sapras</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Tahapan Pekerjaan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="tahapan_persiapan_penyerahan_lokasi.html">
											<span class="sub-item">Tahapan Persiapan</span>
										</a>
									</li>
									<li>
										<a href="tahapan_pelaksanaan_pekerjaan_pemeriksaan.html">
											<span class="sub-item">Tahapan Pelaksanaan Pekerjaan Konstruksi</span>
										</a>
									</li>
									<li>
										<a href="tahapan_penyelesaian_serah_terima_pertama.html">
											<span class="sub-item">Tahapan Penyelesaian</span>
										</a>
									</li>
									<li>
										<a href="tahapan_pelapor_lap_harian.html">
											<span class="sub-item">Tahapan Pelapor</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Progress</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Detail Data Irigasi: Pengadaan UPTD Citarum</h4>
					</div>
					<div class="card" id="divPrint">
						<div class="card-body">
							<div class="row" id="block1">
								<div class="col-lg-6 col-md-6 cols-sm-12">
									<div class="form-group">
										<label for="examplelabelEmail1">Kode Tender Pada LPSE : </label>
										<label name="detailkodeTender">120909</label>
									</div>
									<div class="form-group">
										<label for="examplelabelEmail1">Nama Paket : </label>
										<label name="detailnamaPaket"> Pengadaan UPTD Citarum</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Metode Pengadaan : </label>
										<label name="detailmetodePengadaan"> Tender </label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Nilai Pagu : </label>
										<label name="detailnilaiPagu">Rp 20,00090,090</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Nilai HPS : </label>
										<label name="detailnilaiHPS">RP 200,237527</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Nilai Kontrak : </label>
										<label name="detailnilaiKontrak">Rp 879.21323</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Surat Permohonan Lelang Ke Biro Pengadaan </label>
										<div class="row">
											<div class="col-lg-6">
												<label for="labelZip">Tanggal : </label>
												<label name="tanggalPermohonanLelang">02/10/2020</label>
												<br>
												<label for="labelZip">Nomor : </label>
												<label name="detailnomorPermohonanLelang">02/10/2020</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Rencana Proses Pengadaan : </label>
										<label name="detailrencanaProsesPengadaan">Ini</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Tahap Tender Saat Ini : </label>
										<label type="text" name="detailtahapTender">Tender Belum Dilakukan</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Jadwal Lelang Rencana (LPSE)</label>
										<div class="row">
											<div class="col-lg-6">
												<label for="labelZip">Mulai : </label>
												<label name="detailmulaiLelangRencana">2/2/2020</label>
											</div>
											<div class="col-lg-6">
												<label for="labelZip">Selesai : </label>
												<label name="detailselesaiLelangRencana">2/2/2020</label>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label for="examplelabelPassword1">Jadwal Lelang Realisasi (LPSE)</label>
										<div class="row">
											<div class="col-lg-6">
												<label for="labelZip">Mulai : </label>
												<label name="detailmulaiLelangRealisasi">2/2/2020</label>
											</div>
											<div class="col-lg-6">
												<label for="labelZip">Selesai : </label>
												<label  name="detailselesaiLelangRealisasi">2/2/2020</label>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label for="examplelabelPassword1">Alasan Perubahan Jadwal : </label>
										<label name="detailalasanPerubahanJadwal">Tidak ada</label>
									  </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="form-group">
										<label for="examplelabelPassword1">Status Gagal Lelang 1 : </label>
										<label name="detailstatusGagalLelang1">Tidak</label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Alasan Gagal Lelang : </label>
										<label name="detailalasanGagalLelang1"> - </label>
									</div>
									<div class="form-group">
										<label for="examplelabelPassword1">Jadwal Lelang Ulang I (Rencana)</label>
										<div class="row">
											<div class="col-lg-6">
												<label for="labelZip">Mulai : </label>
												<label name="detailmulaiJadwalLelangUlangRencana">2/2/2020</label>
											</div>
											<div class="col-lg-6">
												<label for="labelZip">Selesai : </label>
												<label type="date" name="detailselesaiJadwalLelangUlangRencana">2/2/2020</label>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label for="examplelabelPassword1">Jadwal Lelang Ulang I (Realisasi)</label>
										<div class="row">
											<div class="col-lg-6">
												<label for="labelZip">Mulai : </label>
												<label name="detailmulaiJadwalLelangUlangRealisasi">2/2/2020</label>
											</div>
											<div class="col-lg-6">
												<label for="labelZip">Selesai : </label>
												<label name="detailselesaiJadwalLelangUlangRealisasi">2/2/2020</label>
											</div>
										</div>
									  </div>
									  <div class="form-group">
										<label for="examplelabelPassword1">Alasan Perubahan Jadwal </label>
										<label name="detailalasanPerubahanJadwalLelangUlang">-</label>
									  </div>
									  <div class="form-group">
										<label for="examplelabelPassword1">Status Gagal Lelang 2 : </label>
										<label name="detailstatusGagalLelang2">Tidak</label>
										</div>
										<div class="form-group">
											<label for="examplelabelPassword1">Alasan Gagal Lelang 2 : </label>
											<label  name="detailalasanGagalLelang2">-</label>
										</div>
										<div class="form-group">
											<label for="examplelabelPassword1">Penunjukan Langsung : </label>
											<label name="detailpenunjukanLangsung">-</label>
										</div>
										<div class="form-group">
											<label for="examplelabelPassword1">Nomor SPPBJ dan Tanggal : </label>
											<label name="detailnomorSPPBJTanggal">Belum Diterbitkan</label>
										</div>
										<div class="form-group" style="margin-top: 30px;">
											<label for="examplelabelPassword1">Alasan SPPBJ diundur : </label>
											<label name="detailalasanSPPBJUndur">Karena covid 19</label>
										</div>
										<div class="form-group" style="margin-top: 30px;">
											<label for="examplelabelPassword1">Nomor SPK dan Tanggal : </label>
											<label name="detailnomorSPKTanggal">Belum diterbitkan</label>
										</div>
										<div class="form-group">
											<label for="examplelabelPassword1">Alasan SPK diundur : </label>
											<label rows="2" name="detailalasanSPKUndur">-</label>
										</div>
								</div>
								</div>
								<div class="form-group" style="margin-left: 35%;">
									<button id="download" class="btn btn-info" onclick="download()" width="200px">Download</button>
									<input type="button" class="btn btn-primary" value="Print" onclick="printPage('block1');" style="width: 100px;"></input>
								</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="footer-copyright text-center py-3">© 2020 Copyright:
					  </div>		
				</div>
			</footer>
		</div>
    </div>
    <!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
	<script>
	function printPage(id)
		{
		var html="<html>";
		html+= document.getElementById(id).innerHTML;

		html+="</html>";

		var printWin = window.open();
		printWin.document.write(html);
		printWin.document.close();
		printWin.focus();
		printWin.print();
		printWin.close();
		}
	function download(){
		var doc = new jsPDF();
		var specialElementHandlers = {
			'#block1': function (element, renderer) {
				return true;
			}
		};

		$('#download').click(function () {
			doc.fromHTML($('#block1').html(), 15, 15, {
				'width': 170,
					'elementHandlers': specialElementHandlers
			});
			doc.save('detail.pdf');
		});
	}
		
	</script>
</body>
</html>