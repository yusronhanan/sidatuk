<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Ubah Data Tahapan <?= $tipe ?></h4>
					</div>
					<div class="contoh" style="margin-bottom: 20px;">
						<h3 style="margin-left: 10px;">Format Laporan</h3>
							<img style="margin-left: 10px;" src="<?= base_url()?>assets/img/report.png" width="20px" height="20px">
							<a href="<?= base_url()."assets/file/".$formatFile ?>" download name="contohFormat"><?= $formatFile ?></a>
					</div>
					<form method="post" action="<?= site_url('tahapanPelapor/edit/').$tipe_."/".$data->idPelapor;?>" enctype="multipart/form-data">

                <input type="hidden" name="tipe" value="<?= $tipe ?>">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Uraian</label>
						<textarea class="form-control" name="uraian" required rows="2"><?= $data->uraian ?></textarea>
                    </div>
					
                    <div class="form-group">
                        <label for="exampleInputPassword1">Upload File (Abaikan jika tidak ingin melakukan perubahan pada file)</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="fileUpload"
                              <?php 
                                                    
                                                    if($data->fileName == null){
                                                      echo ' required ';
                                                    }
                                                    ?>
                              >
                            
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-md" style="margin-left: 35%; width: 30%;"></input>
                        </div>
                      </form>
				</div>
