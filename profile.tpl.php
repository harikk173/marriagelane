<?php ob_start() ?>
<div class="container">
    <h1 class="well">Personal Info</h1>
    <div class="col-lg-12 well">
        <div class="row"> 
        <a href="/updatetemp?pid=<?=$results[0]['id']?>"><button class="btn btn-block btn-primary btn-sm"  type="button"  style="font-size:15px" >Update</button></a>
            <div class="col-sm-12">
            <?php foreach($results as $result): ?>      
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Name</label><br>
                            <?= htmlentities($result['name'])?>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-sm-6 form-group">
                                <label>Phone Number</label><br>
                                <?= htmlentities($result['phone'])?>
                        </div>      
                        <div class="col-sm-6 form-group">
                            <label>Email Address</label><br>
                            <?= htmlentities($result['email'])?>
                        </div>
                    </div>  
                    <div class="row">                                                   
                        <div class="col-sm-6 form-group">
                        <?php if ($result['kuripp'] != NULL): ?>
                            <a href = "http://marriagelane.local/<?=htmlentities($result['kuripp'])?>" target="_blank"><button type="button" class=" btn-danger"> download kuripp </button></a>
                        <?php endif ?>
                        </div>  
                    </div> 
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Address</label><br>
                            <?= htmlentities($result['address'])?>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-3 form-group">
                                <label>Date of birth</label><br>
                                <?= htmlentities($result['dob'])?>
                        </div>      
                        <div class="col-sm-3 form-group">
                            <label>Star</label><br>
                            <?= htmlentities($result['star'])?>
                        </div>
                        <div class="col-sm-3 form-group">
                                <label>Gender</label><br>
                                <?php if($result['sex'] == 1) { 
                                 ?>Male<?php }else{?>Female
                                    <?php }?>

                        </div>      
                        <div class="col-sm-3 form-group">
                            <label>Blood Group</label><br>
                            <?= htmlentities($result['bgroup'])?>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-3 form-group">
                                <label>Religion</label><br>
                                <?= htmlentities($result['religion'])?>
                        </div>
                        <div class="col-sm-3 form-group">
                                <label>Shishtadasha</label><br>
                                <?= htmlentities($result['shishtadhasa'])?>
                        </div>      
                        <div class="col-sm-3 form-group">
                            <label>Height</label><br>
                            <?= htmlentities($result['height'])?>
                        </div>    
                        <div class="col-sm-3 form-group">
                            <label>Colour</label><br>
                            <?= htmlentities($result['color'])?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                                <label>Educational Qualification</label><br>
                                <?= htmlentities($result['educational'])?>
                        </div>  
                        <div class="col-sm-3 form-group">
                                <label>Job</label><br>
                                <?= htmlentities($result['job'])?>
                        </div>      
                        <div class="col-sm-3 form-group">
                            <label>Salary</label><br>
                            <?= htmlentities($result['salary'])?>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Jathakaporutham</label><br>
                            <?= htmlentities($result['horscop_simlr'])?>
                        </div>      
                        <div class="col-sm-6 form-group">
                            <label>Father's Name</label><br>
                            <?= htmlentities($result['fathername'])?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                                <label>Father's Ocupation</label><br>
                                <?= htmlentities($result['father_occupation'])?>
                        </div>      
                        <div class="col-sm-6 form-group">
                            <label>Mother's Name</label><br>
                            <?= htmlentities($result['mothername'])?>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-6 form-group">
                                <label>Mohter's address</label><br>
                                <?= htmlentities($result['motheraddr'])?>
                        </div>      
                        <div class="col-sm-6 form-group">
                            <label>kuripp Time</label><br>
                            <?= htmlentities($result['kuripp_time'])?>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Jathaka nila</label><br>
                            <?= htmlentities($result['horscop_status'])?>
                        </div>      
                        <div class="col-sm-6 form-group">
                            <label>Number of Brother</label><br>
                            <?= htmlentities($result['no_br'])?>
                        </div>
                    </div>  
                    <div class="row">  
                        <div class="col-sm-6 form-group">
                            <label>Number of sister</label><br>
                            <?= htmlentities($result['no_br'])?>
                        </div>
                    </div> 
                <?php endforeach; ?>                                                                    
            </div>
        </div>
        <a  class="btn btn-danger" href="/delete?pid=<?php echo $_GET['pid']?>">Delete</a>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.tpl.php' ?>
