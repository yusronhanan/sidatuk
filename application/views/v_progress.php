<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Progress</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
										<h4 class="card-title">Pilih Progress:</h4> 
										<a href="<?=site_url('progress/data/irigasi')?>" type="button" class="btn btn-<?php if($tipe == 'irigasi'){ echo 'primary';} else{ echo 'info';}?>">Irigasi</a>
										<a href="<?=site_url('progress/data/sundawapan')?>" type="button" class="btn btn-<?php if($tipe == 'sundawapan'){ echo 'primary';} else{ echo 'info';}?>">Sundawapan</a>
										<a href="<?=site_url('progress/data/sarpras')?>" type="button" class="btn btn-<?php if($tipe == 'sarpras'){ echo 'primary';} else{ echo 'info';}?>">Sarpras</a>
									<hr>
                                      <a  href="<?= site_url("progress/tambah/").$tipe?>" class="btn btn-primary btn-round ml-auto" style="float: right;">
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
                                                   
													<td><?= date_format(date_create($d->dateTime),"d/m/Y") ?></td>
													
                                                        <td><?php 
                                                    
                                                    if($d->fileName != null){
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
															<a href="<?= site_url("progress/ubah/").$tipe."/".$d->idProgress?>" class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
															<a href="<?= site_url("progress/delete/").$tipe."/".$d->idProgress?>" onClick="return confirm('Apa benar anda ingin menghapusnya?')" class="btn btn-info btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
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
