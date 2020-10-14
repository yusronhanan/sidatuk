<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Sarpras</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<!-- <h4 class="card-title">Data Sarpras</h4> -->
									<a href="<?= site_url('sarpras') ?>/tambah" class="btn btn-primary btn-round ml-auto" style="float: right;">
										<i class="fa fa-plus"></i>
										Tambah Data
									</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="paket-datatables" class="display table table-bordered table-hover"  >
											<thead>
												<tr>
                                                    <th rowspan="2">No</th>
													<th rowspan="2">Kode Tender Pada LPSE</th>
													<th rowspan="2">Nama Paket</th>
													<th rowspan="2">Metode Pengadaan</th>
													<th rowspan="2">Nilai Pagu</th>
													<th rowspan="2">Nilai HPS</th>
                                                    <th rowspan="2">Nilai Kontrak</th>
                                                    <th colspan="2">Surat Permohonan Lelang Ke Biro</th>
                                                    <th rowspan="2">Rencana Proses Pengadaan</th>
                                                    <th rowspan="2">Tahap Tender Saat Ini</th>
                                                    <th colspan="2">Jadwal Lelang Rencana (LPSE)</th>
                                                    <th colspan="2">Jadwal Lelang Realisasi (LPSE)</th>
                                                    <th rowspan="2">Alasan Perubahan Jadwal</th>
                                                    <th rowspan="2">Gagal Lelang 1</th>
                                                    <th rowspan="2">Alasan Gagal Lelang</th>
                                                    <th colspan="2">Jadwal Lelang Ulang I (Rencana)</th>
                                                    <th colspan="2">Jadwal Lelang Ulang I (Realisasi)</th>
                                                    <th rowspan="2">Alasan Perubahan Jadwal</th>
                                                    <th rowspan="2">Gagal Lelang 2</th>
                                                    <th rowspan="2">Alasan Gagal Lelang</th>
                                                    <th rowspan="2">Penunjukan Langsung</th>
                                                    <th rowspan="2">Nomor SPPBJ dan Tanggal</th>
                                                    <th rowspan="2">Alasan SPPBJ diundur</th>
													<th rowspan="2">Nomor SPK dan Tanggal </th>
													<th rowspan="2">Alasan SPK diundur </th>
													<th rowspan="2">Aksi</th>
													
                                                </tr>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Nomor</th>
                                                    <th>Mulai</th>
                                                    <th>Selesai</th>
                                                    <th>Mulai</th>
                                                    <th>Selesai</th>
                                                    <th>Mulai</th>
                                                    <th>Selesai</th>
                                                    <th>Mulai</th>
                                                    <th>Selesai</th>
                                                </tr>
											</thead>
											<tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($data as $d) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $d->kodeTender ?></td>
													<td><?= $d->namaPaket ?></td>
													<td><?= $d->metodePengadaan ?></td>
													<td><?php if($d->nilaiPagu != "" && $d->nilaiPagu != "0" && !empty($d->nilaiPagu)) { echo 'Rp ' . number_format($d->nilaiPagu);} ?></td>
                                                    <td><?php if($d->nilaiHPS != "" && $d->nilaiHPS != "0" && !empty($d->nilaiHPS)) { echo 'Rp ' . number_format($d->nilaiHPS);} ?></td>
                                                    <td><?php if($d->nilaiKontrak != "" && $d->nilaiKontrak != "0" && !empty($d->nilaiKontrak)) { echo 'Rp ' . number_format($d->nilaiKontrak);} ?></td>
                                                    <td><?= date_format(date_create($d->tanggalPermohonanLelang),"d/m/Y") ?></td>
                                                    <td><?= $d->nomorPermohonanLelang ?></td>
                                                    <td><?= $d->rencanaProsesPengadaan ?></td>
                                                    <td><?= $d->tahapTender ?></td>
                                                    <td><?= date_format(date_create($d->mulaiLelangRencana),"d/m/Y") ?></td>
                                                    <td><?= date_format(date_create($d->selesaiLelangRencana),"d/m/Y") ?></td>
                                                    <td><?= date_format(date_create($d->mulaiLelangRealisasi),"d/m/Y") ?></td>
                                                    <td><?= date_format(date_create($d->selesaiLelangRealisasi),"d/m/Y") ?></td>
                                                    <td><?= $d->alasanPerubahanJadwal ?></td>
                                                    <td><?= $d->gagalLelang1 ?></td> 
                                                    <td><?= $d->alasanGagalLelang1 ?></td>
                                                    <td><?= date_format(date_create($d->mulaiJadwalLelangUlangRencana),"d/m/Y") ?></td>
                                                    <td><?= date_format(date_create($d->selesaiJadwalLelangUlangRencana),"d/m/Y") ?></td>
                                                    <td><?= date_format(date_create($d->mulaiJadwalLelangUlangRealisasi),"d/m/Y") ?></td>
                                                    <td><?= date_format(date_create($d->selesaiJadwalLelangUlangRealisasi),"d/m/Y") ?></td>
                                                    <td><?= $d->alasanPerubahanJadwalLelangUlang ?></td>
                                                    <td><?= $d->gagalLelang2 ?></td>
                                                    <td><?= $d->alasanGagalLelang2 ?></td>
                                                    <td><?= $d->penunjukanLangsung ?></td>
                                                    <td><?= $d->nomorSPPBJTanggal ?></td>
													<td><?= $d->alasanSPPBJUndur ?></td>
                                                    <td><?= $d->nomorSPKTanggal ?></td>
													<td><?= $d->alasanSPKUndur ?></td>
													<td>
														<li class="list-inline-item">
															<a href="<?= site_url('sarpras/ubah/').$d->idSarpras ?>" class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
															<a href="<?= site_url('sarpras/delete/').$d->idSarpras ?>"  onClick="return confirm('Apa benar anda ingin menghapusnya?')"  class="btn btn-info btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
														</li>
													</td>
												</tr>
                                                <?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
