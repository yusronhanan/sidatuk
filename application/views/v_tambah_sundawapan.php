<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Input Data Sundawapan</h4>
					</div>
					<form method="post" action="<?= site_url('sundawapan/add');?>" enctype="multipart/form-data">
					<div class="row">
							<div class="col-lg-6 col-md-6 cols-sm-12">
								<div class="form-group" style="margin-top: 20px;">
									<label for="exampleInputEmail1">Kode Tender Pada LPSE</label>
									<input type="number" name="kodeTender" class="form-control" id="kodetender" aria-describedby="kodetender">
								</div>
								<div class="form-group"  style="margin-top: 5px;">
									<label for="exampleInputEmail1">Nama Paket</label>
									<input type="text" class="form-control" name="namaPaket" aria-describedby="kodetender">
								</div>
								<div class="form-group" style="margin-top: 55px;">
									<label for="exampleInputPassword1">Metode Pengadaan</label>
									<input type="text" name="metodePengadaan" class="form-control" id="metode">
								</div>
								<div class="form-group" style="margin-top: 30px;">
									<label for="exampleInputPassword1">Nilai Pagu</label>
									<input type="number"  class="form-control" name="nilaiPagu">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nilai HPS</label>
									<input type="number" name="nilaiHPS" class="form-control" id="hps">
								</div>
								<div class="form-group"  style="margin-top: 20px;">
									<label for="exampleInputPassword1">Nilai Kontrak</label>
									<input type="number" step="any"  name="nilaiKontrak" class="form-control">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Surat Permohonan Lelang Ke Biro Pengadaan</label>
									<div class="row">
										<div class="col-lg-6">
											<label for="inputZip">Tanggal</label>
											<input type="date" class="form-control" name="tanggalPermohonanLelang">
										</div>
										<div class="col-lg-6">
											<label for="inputZip">Nomor</label>
											<input type="number" class="form-control" name="nomorPermohonanLelang">
										</div>
									</div>
								  </div>
								  <div class="form-group" style="margin-top: 25px;">
									<label for="exampleInputPassword1">Rencana Proses Pengadaan</label>
									<input type="text" name="rencanaProsesPengadaan" class="form-control" id="paket">
								</div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Tahap Tender Saat Ini</label>
									<input type="text" name="tahapTender" class="form-control">
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Jadwal Lelang Rencana (LPSE)</label>
									<div class="row">
										<div class="col-lg-6">
											<label for="inputZip">Mulai</label>
											<input type="date" class="form-control" name="mulaiLelangRencana">
										</div>
										<div class="col-lg-6">
											<label for="inputZip">Selesai</label>
											<input type="date" class="form-control"  name="selesaiLelangRencana">
										</div>
									</div>
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Jadwal Lelang Realisasi (LPSE)</label>
									<div class="row">
										<div class="col-lg-6">
											<label for="inputZip">Mulai</label>
											<input type="date" class="form-control" name="mulaiLelangRealisasi">
										</div>
										<div class="col-lg-6">
											<label for="inputZip">Selesai</label>
											<input type="date" class="form-control" name="selesaiLelangRealisasi">
										</div>
									</div>
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Alasan Perubahan Jadwal</label>
									<textarea class="form-control" name="alasanPerubahanJadwal" rows="2"></textarea>
								  </div>
							</div>
							<div class="col-lg-6 col-md-6 cols-sm-12">
								<div class="form-group" style="margin-top: 20px;">
									<label for="exampleInputPassword1">Gagal Lelang 1</label>
									<br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gagalLelang1" value="Ya">
										<label class="form-check-label" for="inlineRadio1">Ya</label>
									  </div>
									  <div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gagalLelang1" value="Tidak">
										<label class="form-check-label" for="inlineRadio2">Tidak</label>
									  </div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alasan Gagal Lelang</label>
									<textarea name="alasanGagalLelang1" class="form-control" rows="2"></textarea>
								  </div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jadwal Lelang Ulang I (Rencana)</label>
									<div class="row">
										<div class="col-lg-6">
											<label for="inputZip">Mulai</label>
											<input type="date" class="form-control" name="mulaiJadwalLelangUlangRencana">
										</div>
										<div class="col-lg-6">
											<label for="inputZip">Selesai</label>
											<input type="date" class="form-control" name="selesaiJadwalLelangUlangRencana">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jadwal Lelang Ulang I (Realisasi)</label>
									<div class="row">
										<div class="col-lg-6">
											<label for="inputZip">Mulai</label>
											<input type="date" class="form-control" name ="mulaiJadwalLelangUlangRealisasi">
										</div>
										<div class="col-lg-6">
											<label for="inputZip">Selesai</label>
											<input type="date" class="form-control" name ="selesaiJadwalLelangUlangRealisasi">
										</div>
									</div>
								  </div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alasan Perubahan Jadwal </label>
									<textarea name="alasanPerubahanJadwalLelangUlang" class="form-control" rows="2"> </textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Gagal Lelang 2</label>
									<br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gagalLelang2" value="Ya">
										<label class="form-check-label" for="inlineRadio1">Ya</label>
									  </div>
									  <div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gagalLelang2" value="Tidak">
										<label class="form-check-label" for="inlineRadio2">Tidak</label>
									  </div>
								</div>
								<div class="form-group" style="margin-top: 20px;">
									<label for="exampleInputPassword1">Alasan Gagal Lelang 2</label>
									<textarea class="form-control" name="alasanGagalLelang2"></textarea>
								</div>
								<div class="form-group" style="margin-top: 7px;">
									<label for="exampleInputPassword1">Penunjukan Langsung</label>
									<input type="text" name="penunjukanLangsung" class="form-control">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nomor SPPBJ dan Tanggal</label>
									<input type="text" class="form-control" name="nomorSPPBJTanggal">
								</div>
								<div class="form-group" style="margin-top: 30px;">
									<label for="exampleInputPassword1">Alasan SPPBJ diundur</label>
									<textarea name="alasanSPPBJUndur" class="form-control" rows="2"></textarea>
								</div>
								<div class="form-group" style="margin-top: 10px;">
									<label for="exampleInputPassword1">Nomor SPK dan Tanggal</label>
									<input type="text" class="form-control" name="nomorSPKTanggal">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alasan SPK diundur</label>
									<textarea name="alasanSPKUndur" class="form-control"></textarea>
								</div>
							</div>
              </div>
                  <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-md" style="margin-left: 35%; width: 30%;"></input>
                  </div>             
          </form>
				</div>
