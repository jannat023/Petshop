<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title"><b>Add New Groomer</b></h4>
        	</div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="groomers_add.php" enctype="multipart/form-data">
              	<div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Qualification</label>

                    <div class="col-sm-9">
                      <select style="width: 100%; height: 45px; border-color: rgb(224, 224, 224);" name="qualification" id="qualification">
                      	<option>Level 01 of GCSEs</option>
                      	<option>Level 02 of GCSEs</option>
                      	<option>Level 03 of GCSEs</option>
                      	<option>Level 04 of GCSEs</option>
                      	<option>Level 05 of GCSEs</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="experience" class="col-sm-3 control-label">experience</label>

                    <div class="col-sm-9">
                      <select style="width: 100%; height: 45px; border-color: rgb(224, 224, 224);" name="experience" id="experience">
                      	<option>1 year</option>
                      	<option>2 year</option>
                      	<option>3 year</option>
                      	<option>4 year</option>
                      	<option>5 year</option>
                      	<option>6 year</option>
                      	<option>7 year</option>
                      	<option>8 year</option>
                      	<option>9 year</option>
                      	<option>10+ year</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            </div>
              </form>
            </div>
        </div>

	</div>
</div>