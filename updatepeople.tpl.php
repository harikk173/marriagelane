<?php ob_start()?>

<div class="box box-warning">
<div class="box-header with-border">
  <h3 class="box-title">Update</h3>
</div>
<!-- /.box-header -->
<?php $results =$result[0] ?>
<div class="box-body">
  <form role="form" action="http://marriagelane.local/update?userid=<?=$_GET['pid']?>" onsubmit="return Validate()" method="POST"  enctype="multipart/form-data">
    <!-- text input -->
    <div class="container">
    <h1 class="well">Personal Info</h1>
    <div class="col-lg-12 well">
        <div class="row">		
            <div class="col-sm-12">     
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>Name</label>
                        <input type="text" placeholder="Enter Name Here.." id ="name" name="name" value="<?php echo $results['name'];?>" class="form-control" required>
                    </div>
                </div>	
                <div class="row">
                    <div class="col-sm-3 form-group">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Enter Phone Number Here.." id ="phone" name="phone" value="<?php echo $results['phone']?>" class="form-control">
                    </div>		
                    <div class="col-sm-3 form-group">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Email Address Here.." id ="email" name="email" value="<?php echo $results['email']?>" class="form-control" required>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Gender</label>
                        <select id ="sex" name="sex"  class="form-control">
                            <option value="1" selected>Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>പുനര്വിവാഹമാണോ </label>
                        <select id ="sec_marr" name="sec_marr"  class="form-control">
                            <option value="0" selected>അല്ല </option>
                            <option value="1">അതെ</option>
                        </select>
                    </div>
                </div>	
                <div class="row">														
                    <div class="col-sm-3 form-group">
                        <label>Kuripp Time</label>
                        <input type="text" id ="kuripp_time" name="kuripp_time" value="<?php echo $results['kuripp_time']?>" class="form-control">
                    </div>
                </div>
                <div class="row">													
                    <div class="col-sm-12 form-group">
                        <label for="fileToUpload">Address</label></td>
                        <input type="textarea" id="address" name="address"   value="<?php echo $results['address']?>" class="form-control" required>
                    </div>	
                </div>	  																	
                <div class="row">					
                    <div class="col-sm-12 form-group">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Date Of Birth</label>
                                <input type="date" id ="dob" name="dob" value="<?php echo $results['dob']?>" class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Age</label>
                                <input type="text" id ="age" name="age" value="<?php echo $results['age']?>" class="form-control" required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Height</label>
                                <input type="text" id ="height" value="<?php echo $results['height']?>" name="height"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Religion</label>
                                <input type="text" id ="religion" value="<?php echo $results['religion']?>" name="religion"  class="form-control" required>
                            </div>
                        </div>
                    </div>					
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Star</label>
                                <input type="text" id ="star" name="star" value="<?php echo $results['star']?>"  class="form-control">
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
                                <input type="text" id ="other_health_det" name="other_health_det" value=<?php echo $results['other_health_det']?>  class="form-control" required>
                            </div>
                        </div>
                    </div>					
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Educational Qualification</label>
                                <input type="text" id ="educational" value="<?php echo $results['educational']?>" name="educational"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Job</label>
                                <input type="text" id ="job" name="job" value="<?php echo $results['job']?>" class="form-control" required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Salary</label>
                                <input type="text" id ="salary" value="<?php echo $results['salary']?>" name="salary"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Jathakapporutham</label>
                                <select id ="horscop_simlr" name="horscop_simlr"  class="form-control">
                                    <option value="0" selected>നിര്ബന്ധമില്ല </option>
                                    <option value="1">നിർബന്ധം </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Blood Group</label>
                                <input type="text" id ="bgroup" value="<?php echo $results['bgroup']?>" name="bgroup"  class="form-control">
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
                                <input type="text" id ="shishtadhasa" value="<?php echo $results['shishtadhasa']?>" name="shishtadhasa">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Father's Name</label>
                                <input type="text" id ="fathername" value="<?php echo $results['fathername']?>" name="fathername"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Father's Occupation</label>
                                <input type="text" id ="fahter_occupation" name="father_occupation" value="<?php echo $results['father_occupation']?>" class="form-control">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Mother's Name</label>
                                <input type="text" id ="mothername" value="<?php echo $results['mothername']?>" name="mothername" class="form-control">
                            </div>	
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Number of Brothers </label>
                                <input type="text" id ="no_br" value="<?php echo $results['no_br']?>" name="no_br"  class="form-control">
                            </div>		
                            <div class="col-sm-3 form-group">
                                <label>Number of Sisters</label>
                                <input type="text" id ="no_sis" value="<?php echo $results['no_sis']?>" name="no_sis" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Mother's Address</label>
                                <input type="textarea" id ="motheraddr" value="<?php echo $results['motheraddr']?>" name="motheraddr" class="form-control">
                            </div>	
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>About Your Partner </label>
                                <input type="textarea" id ="abt_ptnr" value="<?php echo $results['abt_ptnr']?>" name="abt_ptnr"  class="form-control">
                            </div>		
                            <div class="col-sm-6 form-group">
                                <label>Partner Job and Education</label>
                                <input type="textarea" id ="ptnr_job_edu" value="<?php echo $results['ptnr_job_edu']?>" name="ptnr_job_edu" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Partners Economical status</label>
                                <select id ="ptnr_eco" name="ptnr_eco"  class="form-control">
                                    <option value="1" selected>Poor</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Rich</option>
                                </select>
                            </div>	
                            <div class="col-sm-6 form-group">
                                <label>Second marriage Interested or not</label>
                                <select id ="sec_interest" name="sec_interest"  class="form-control">
                                    <option value="0" selected>അല്ല </option>
                                    <option value="1">അതെ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
    </div>
    <input type="hidden" name="intid" value=<?=$_GET['pid']?>>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
</form>
</div>
<!-- /.box-body -->
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.tpl.php' ?>