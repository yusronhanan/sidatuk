<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Ubah Data Tahapan <?= $tipe ?></h4>
					</div>
					<div class="contoh" style="margin-bottom: 20px;">
						<h3 style="margin-left: 10px;">Format Laporan</h3>
							<img style="margin-left: 10px;" src="<?= base_url()?>assets/img/report.png" width="20px" height="20px">
							<a href="<?= base_url()."assets/file/".$formatFile ?>" download name="contohFormat"><?= $formatFile ?></a>
					</div>
					<form method="post" action="<?= site_url('tahapanPenyelesaian/edit/').$tipe_."/".$data->idPenyelesaian;?>" enctype="multipart/form-data">

                <input type="hidden" name="tipe" value="<?= $tipe ?>">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Uraian</label>
						<textarea class="form-control" required name="uraian" rows="2"><?= $data->uraian ?></textarea>
                    </div>
					<div class="form-group">
						<label for="exampleInputPassword1">Ada Bukti?</label>
						<br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="status" <?php if($data->status == "Ya"){echo "checked";}?> value="Ya">
							<label class="form-check-label" for="inlineRadio1">Ya</label>
						  </div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="status" <?php if($data->status == "Tidak"){echo "checked";}?> value="Tidak">
							<label class="form-check-label" for="inlineRadio2">Tidak</label>
						  </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="3"
                        <?php 
                                                    
                                                    if($data->status == "Ya"){
                                                        echo ' disabled';
                                                    }
                                                    
                                                    ?>
                        ><?= $data->keterangan ?></textarea>
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
                                                    
                                                    if($data->status == "Tidak"){
                                                        echo 'disabled ';
                                                    }
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
        <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>

<script>
 $(document).ready(function() {

$('input[type=radio][name=status]').change(function() {
    if (this.value == 'Ya') {
      $("textarea[name=keterangan]").attr('disabled','');
      $("input[name=fileUpload]").removeAttr('disabled');
    //   $("input[name=fileUpload]").attr('required','');
    }
    else if (this.value == 'Tidak') {
      $("textarea[name=keterangan]").removeAttr('disabled');
      $("textarea[name=keterangan]").attr('required','');
      $("input[name=fileUpload]").attr('disabled','');
    }
});
	} );
</script>