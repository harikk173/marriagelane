<?php ob_start()?>

<div class="box box-warning">
<div class="box-header with-border">
  <h3 class="box-title">New Registration</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
  <form role="form" action="http://marriagelane.local/new_registration" onsubmit="return Validate()" method="POST"  enctype="multipart/form-data">
    <!-- text input -->
    <div class="container">
    <h1 class="well">Personal Info</h1>
    <div class="col-lg-12 well">
        <div class="row">		
            <div class="col-sm-12">     
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>Name</label>
                        <input type="text" placeholder="Enter Name Here.." id ="name" name="name"  class="form-control" required>
                    </div>
                </div>	
                <div class="row">
                    <div class="col-sm-3 form-group">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Enter Phone Number Here.." id ="phone" name="phone"  class="form-control">
                    </div>		
                    <div class="col-sm-3 form-group">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address Here.." id ="email" name="email"  class="form-control" required>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Gender</label>
                        <select id ="sex" name="sex"  class="form-control">
                            <option value="1" selected>Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>	
                <div class="row">													
                    <div class="col-sm-6 form-group">
                        <label for="fileToUpload">Upload Kuripp</label></td>
                        <input type="file" name="fileToUpload"  class="form-control" required>
                    </div>	
                    <div class="col-sm-3 form-group">
                        <label>Kuripp Time</label>
                        <input type="text" id ="kuripp_time" name="kuripp_time"  class="form-control">
                    </div>
                </div>
                <div class="row">													
                    <div class="col-sm-12 form-group">
                        <label for="fileToUpload">Address</label></td>
                        <input type="textarea" id="address" name="address"  class="form-control" required>
                    </div>	
                </div>	  																	
                <div class="row">					
                    <div class="col-sm-12 form-group">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Date Of Birth</label>
                                <input type="date" id ="dob" name="dob"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Age</label>
                                <input type="text" id ="age" name="age"  class="form-control" required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Height</label>
                                <input type="text" id ="height" name="height"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Religion</label>
                                <input type="text" id ="religion" name="religion"  class="form-control" required>
                            </div>
                        </div>
                    </div>					
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Star</label>
                                <select id ="star" name="star"  class="form-control">
                                    <option value="Aswathy ">Aswathy </option>
                                    <option value="Bharany">Bharany</option>
                                    <option value="Karthika ">Karthika </option>
                                    <option value="Rohini ">Rohini </option>
                                    <option value="Makayiram ">Makayiram </option>
                                    <option value="Thiruvathira ">Thiruvathira </option>
                                    <option value="Punartham ">Punartham </option>
                                    <option value="Pooyam">Pooyam</option>
                                    <option value="Ayilyam">Ayilyam </option>
                                    <option value="Makom">Makom</option>
                                    <option value="Pooram">Pooram</option>
                                    <option value="Uthram">Uthram</option>
                                    <option value="Atham">Atham</option>
                                    <option value="Chithira">Chithira</option>
                                    <option value="Chothy">Chothy</option>
                                    <option value="Vishakom ">Vishakom </option>
                                    <option value="Anizham">Anizham</option>
                                    <option value="Thrikeeta ">Thrikeeta </option>
                                    <option value="Moolam">Moolam</option>
                                    <option value="Pooradam ">Pooradam </option>
                                    <option value="Uthradam ">Uthradam </option>
                                    <option value="Thiruvonam ">Thiruvonam </option>
                                    <option value="Avittam">Avittam</option>
                                    <option value="Chathayam ">Dhosham</option>
                                    <option value="Pooruruttathy ">Pooruruttathy </option>
                                    <option value="Uthrattathy ">Uthrattathy </option>
                                    <option value="Revathy">Revathy</option>
                                </select>
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Color</label>
                                <select id ="color" name="color"  class="form-control">
                                    <option value="1" selected>White</option>
                                    <option value="2">Dual tone</option>
                                    <option value="3">Black</option>
                                </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Body Type</label>
                                <select id ="body_type" name="body_type"  class="form-control">
                                    <option value="1" selected>skinny</option>
                                    <option value="2">fat</option>
                                    <option value="3">Medium</option>
                                </select>
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Health Status</label>
                                <input type="text" id ="other_health_det" name="other_health_det"  class="form-control" required>
                            </div>
                        </div>
                    </div>					
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Educational Qualification</label>
                                <input type="text" id ="educational" name="educational"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Job</label>
                                <input type="text" id ="job" name="job"  class="form-control" required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Salary</label>
                                <input type="text" id ="salary" name="salary"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Jathakapporutham</label>
                                <input type="checkbox" id ="horscop_simlr" name="horscop_simlr">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Blood Group</label>
                                <input type="text" id ="bgroup" name="bgroup"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Horscop Status</label>
                                <select id ="horscop_status" name="horscop_status"  class="form-control">
                                    <option value="1" selected>Normal</option>
                                    <option value="2">shudham</option>
                                    <option value="3">Dhosham</option>
                                </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Economical Status</label>
                                <select id ="Economical" name="economical"  class="form-control">
                                    <option value="1" selected>Poor</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Rich</option>
                                </select>
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Shishtadhasa</label>
                                <input type="text" id ="shishtadhasa" name="shishtadhasa">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Father's Name</label>
                                <input type="text" id ="fathername" name="fathername"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Father's Occupation</label>
                                <input type="text" id ="fahter_occupation" name="father_occupation" class="form-control">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Mother's Name</label>
                                <input type="text" id ="mothername" name="mothername" class="form-control">
                            </div>	
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>ഉപകരണങ്ങൾ </label>
                                <input type="text" id ="no_br" name="no_br"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Number of Sisters</label>
                                <input type="text" id ="no_sis" name="no_sis" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Mother's Address</label>
                                <input type="textarea" id ="motheraddr" name="motheraddr" class="form-control">
                            </div>	
                        </div>
                    </div>
                </div>				
            </div>
        </div>
    </div>
    <input type="hidden" name="intid" value=<?=$_GET['intid']?>>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
</form>
</div>
<!-- /.box-body -->
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.tpl.php' ?>