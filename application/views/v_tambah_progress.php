<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Input Data Progress</h4>
					</div>
				
				<form method="post" action="<?=site_url("progress/add")?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputPassword1">Uraian</label>
						<textarea class="form-control" required name="uraian" rows="2"></textarea>
                    </div>
					<div class="form-group">
						     </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Upload File</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="fileUpload" required>
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-md" style="margin-left: 35%; width: 30%;"></input>
                        </div>
                      </form>
				</div>
       