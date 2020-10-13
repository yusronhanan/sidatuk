<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Tahapan <?= $tipe ?></h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
                                    <h4 class="card-title">Pilih Tahapan:</h4> 
                                 
                                    <a href="<?=site_url('tahapanPelaksanaan/data/pemeriksaanbersama')?>" type="button" class="btn btn-<?php if($tipe_ == 'pemeriksaanbersama'){ echo 'primary';} else{ echo 'info';}?>">Pemeriksaan Bersama</a>
									<a href="<?=site_url('tahapanPelaksanaan/data/pengajuanpersyaratan')?>" type="button" class="btn btn-<?php if($tipe_ == 'pengajuanpersyaratan'){ echo 'primary';} else{ echo 'info';}?>">Pengajuan Persyaratan untuk Material Kegiatan</a>
                                    <a href="<?=site_url('tahapanPelaksanaan/data/pengawasmutu')?>" type="button" class="btn btn-<?php if($tipe_ == 'pengawasmutu'){ echo 'primary';} else{ echo 'info';}?>">Pengawasan Mutu Konstruksi</a>
                                    <a href="<?=site_url('tahapanPelaksanaan/data/penerimaandanpembayaran')?>" type="button" class="btn btn-<?php if($tipe_ == 'penerimaandanpembayaran'){ echo 'primary';} else{ echo 'info';}?>">Penerimaan dan Pembayaran Hasil Kerja</a>
                                    <a href="<?=site_url('tahapanPelaksanaan/data/kontrakkritis')?>" type="button" class="btn btn-<?php if($tipe_ == 'kontrakkritis'){ echo 'primary';} else{ echo 'info';}?>">Kontrak Kritis</a>
								
								<hr>
                                      <a  href="<?= site_url("tahapanPelaksanaan/tambah/").$tipe_ ?>" class="btn btn-primary btn-round ml-auto" style="float: right;">
										<i class="fa fa-plus"></i>
										Tambah Data
									</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-bordered table-hover"  >
											<thead>
												<tr>
                                                    <th>No</th>
                                                    <th>Uraian</th>
													<th>Status</th>
													<th>Keterangan</th>
													<th>Tanggal</th>
													<th>File</th>
													<th>Aksi</th>
                                                </tr>
											</thead>
											<tbody>
                                            <?php 
                                            $no = 1;
                                            foreach ($data as $d) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
													<td><?= $d->uraian ?></td>
													<td><?= $d->status ?></td>
                                                    <td><?php 
                                                    
                                                    if($d->status == "Tidak"){
                                                        echo $d->keterangan;
                                                    } else{
                                                        echo "-";
                                                    }
                                                    
                                                    ?></td>
													<td><?= date_format(date_create($d->dateTime),"d/m/Y") ?></td>
													
                                                        <td><?php 
                                                    
                                                    if($d->status == "Ya" && $d->fileName != null){
                                                        ?>
                                                        <div class="aksifile">
                                                        <a download href="<?php echo base_url()."assets/file/".$d->fileName; ?>"  class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a>
														<a  href="<?php echo base_url()."assets/file/".$d->fileName; ?>" target="blank" class="btn btn-info btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                                                        </div>

                                                        <?php
                                                    } else{
                                                        echo "-";
                                                    }
                                                    
                                                    ?></td>
                                                    <td>
														<li class="list-inline-item">
															<a href="<?= site_url("tahapanPelaksanaan/ubah/").$tipe_."/".$d->idPelaksanaan?>" class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
															<a href="<?= site_url("tahapanPelaksanaan/delete/").$tipe_."/".$d->idPelaksanaan?>" onClick="return confirm('Apa benar anda ingin menghapusnya?')" class="btn btn-info btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
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