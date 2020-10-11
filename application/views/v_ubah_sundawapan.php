<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Ubah Data Sundawapan</h4>
					</div>
					<form method="post" action="<?= site_url('sundawapan/edit/').$data->idSundawapan;?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6 col-md-6 cols-sm-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Kode Tender Pada LPSE</label>
								<input type="number" name="kodeTender" value="<?= $data->kodeTender ?>" class="form-control" id="kodetender" aria-describedby="kodetender">
							</div>
							<div class="form-group" style="margin-top: 55px;">
								<label for="exampleInputEmail1">Nama Paket</label>
								<input type="text" class="form-control" name="namaPaket" value="<?= $data->namaPaket ?>" aria-describedby="kodetender">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" style="margin-top: 50px;">Metode Pengadaan</label>
								<input type="text" name="metodePengadaan" value="<?= $data->metodePengadaan ?>" class="form-control" id="metode">
							</div>
							<div class="form-group" style="margin-top: 30px;">
								<label for="exampleInputPassword1">Nilai Pagu</label>
								<input type="number"  class="form-control" name="nilaiPagu" value="<?= $data->nilaiPagu ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nilai HPS</label>
								<input type="number" name="nilaiHPS" value="<?= $data->nilaiHPS ?>" class="form-control" id="hps">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Nilai Kontrak</label>
								<input type="number" step="any"  name="nilaiKontrak" value="<?= $data->nilaiKontrak ?>" class="form-control">
							</div>
							<div class="form-group" style="margin-top: 50px;">
								<label for="exampleInputPassword1">Surat Permohonan Lelang Ke Biro Pengadaan</label>
								<div class="row">
									<div class="col-lg-6">
										<label for="inputZip">Tanggal</label>
										<input type="date" class="form-control" name="tanggalPermohonanLelang" value="<?= $data->tanggalPermohonanLelang ?>">
									</div>
									<div class="col-lg-6">
										<label for="inputZip">Nomor</label>
										<input type="number" class="form-control" name="nomorPermohonanLelang" value="<?= $data->nomorPermohonanLelang ?>">
									</div>
								</div>
							</div>
							<div class="form-group" style="margin-top: 20px;">
								<label for="exampleInputPassword1">Rencana Proses Pengadaan</label>
								<input type="text" name="rencanaProsesPengadaan" value="<?= $data->rencanaProsesPengadaan ?>" class="form-control" id="paket">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tahap Tender Saat Ini</label>
								<input type="text" name="tahapTender" value="<?= $data->tahapTender ?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Jadwal Lelang Rencana (LPSE)</label>
								<div class="row">
									<div class="col-lg-6">
										<label for="inputZip">Mulai</label>
										<input type="date" class="form-control" name="mulaiLelangRencana" value="<?= $data->mulaiLelangRencana ?>">
									</div>
									<div class="col-lg-6">
										<label for="inputZip">Selesai</label>
										<input type="date" class="form-control"  name="selesaiLelangRencana" value="<?= $data->selesaiLelangRencana ?>">
									</div>
								</div>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Jadwal Lelang Realisasi (LPSE)</label>
								<div class="row">
									<div class="col-lg-6">
										<label for="inputZip">Mulai</label>
										<input type="date" class="form-control" name="mulaiLelangRealisasi" value="<?= $data->mulaiLelangRealisasi ?>">
									</div>
									<div class="col-lg-6">
										<label for="inputZip">Selesai</label>
										<input type="date" class="form-control" name="selesaiLelangRealisasi" value="<?= $data->selesaiLelangRealisasi ?>">
									</div>
								</div>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Alasan Perubahan Jadwal</label>
								<textarea name="alasanPerubahanJadwal"  class="form-control" rows="2"><?= $data->alasanPerubahanJadwal ?></textarea>
							  </div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="form-group">
								<label for="exampleInputPassword1">Gagal Lelang 1</label>
								<br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gagalLelang1" <?php if($data->gagalLelang1 == "Ya"){echo "checked";}?> value="Ya">
									<label class="form-check-label" for="inlineRadio1">Ya</label>
								  </div>
								  <div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gagalLelang1" <?php if($data->gagalLelang1 == "Tidak"){echo "checked";}?> value="Tidak">
									<label class="form-check-label" for="inlineRadio2">Tidak</label>
								  </div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Alasan Gagal Lelang</label>
								<textarea name="alasanGagalLelang1"  class="form-control" rows="2"><?= $data->alasanGagalLelang1 ?></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Jadwal Lelang Ulang I (Rencana)</label>
								<div class="row">
									<div class="col-lg-6">
										<label for="inputZip">Mulai</label>
										<input type="date" class="form-control" name="mulaiJadwalLelangUlangRencana" value="<?= $data->mulaiJadwalLelangUlangRencana ?>">
									</div>
									<div class="col-lg-6">
										<label for="inputZip">Selesai</label>
										<input type="date" class="form-control" name="selesaiJadwalLelangUlangRencana" value="<?= $data->selesaiJadwalLelangUlangRencana ?>">
									</div>
								</div>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Jadwal Lelang Ulang I (Realisasi)</label>
								<div class="row">
									<div class="col-lg-6">
										<label for="inputZip">Mulai</label>
										<input type="date" class="form-control" name="mulaiJadwalLelangUlangRealisasi" value="<?= $data->mulaiJadwalLelangUlangRealisasi ?>">
									</div>
									<div class="col-lg-6">
										<label for="inputZip">Selesai</label>
										<input type="date" class="form-control" name="selesaiJadwalLelangUlangRealisasi" value="<?= $data->selesaiJadwalLelangUlangRealisasi ?>">
									</div>
								</div>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Alasan Perubahan Jadwal 2 </label>
								<textarea rows="2" name="alasanPerubahanJadwalLelangUlang" class="form-control"><?= $data->alasanPerubahanJadwalLelangUlang ?></textarea>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Gagal Lelang 2 </label>
								<br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gagalLelang2" <?php if($data->gagalLelang2 == "Ya"){echo "checked";}?>  value="Ya">
									<label class="form-check-label" for="inlineRadio1">Ya</label>
								  </div>
								  <div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gagalLelang2" <?php if($data->gagalLelang2 == "Tidak"){echo "checked";}?>  value="Tidak">
									<label class="form-check-label" for="inlineRadio2">Tidak</label>
								  </div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alasan Gagal Lelang 2</label>
									<textarea class="form-control" name="alasanGagalLelang2"><?= $data->alasanGagalLelang2 ?></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Penunjukan Langsung</label>
									<input type="text" name="penunjukanLangsung" value="<?= $data->penunjukanLangsung ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nomor SPPBJ dan Tanggal</label>
									<input type="text" class="form-control" name="nomorSPPBJTanggal" value="<?= $data->nomorSPPBJTanggal ?>">
								</div>
								<div class="form-group" style="margin-top: 30px;">
									<label for="exampleInputPassword1">Alasan SPPBJ diundur</label>
									<textarea rows="2" name="alasanSPPBJUndur" class="form-control"><?= $data->alasanSPPBJUndur ?></textarea>
								</div>
								<div class="form-group" style="margin-top: 10px;">
									<label for="exampleInputPassword1">Nomor SPK dan Tanggal</label>
									<input type="text" class="form-control" name="nomorSPKTanggal" value="<?= $data->nomorSPKTanggal ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alasan SPK diundur</label>
									<textarea rows="2" name="alasanSPKUndur"  class="form-control"><?= $data->alasanSPKUndur ?></textarea>
								</div>
						</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary btn-md" style="margin-left: 35%; width: 30%;"></input>
						</div>
						</div>         
          </form>
				</div>
