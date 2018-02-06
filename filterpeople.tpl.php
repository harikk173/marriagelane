<?php ob_start()?>
<div class="col-md-3">
</div>
<div class="col-md-6">
<form role="form" action="http://marriagelane.local/filtered" method="POST">
    <label>Gender</label>
        <select id ="sex" name="sex"  class="form-control">
            <option value="1" selected>Male</option>
            <option value="2">Female</option>
        </select>
    <label>Age</label>
        <input type="text" placeholder="enter the age" id ="age" name="age"  class="form-control" required>
    <label>Religion</label>
        <input type="text" placeholder="enter the religion" id ="caste" name="caste"  class="form-control" required>
    <label>Jathakapporutham</label>
        <select id ="Jathakam" name="Jathakam"  class="form-control">
            <option value="0" selected>no</option>
            <option value="1">yes</option>
        </select>
    <label>star</label>
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
    <label>Horscop Status</label>
        <select id ="horscop_status" name="horscop_status"  class="form-control">
            <option value="1" selected>Normal</option>
            <option value="2">shudham</option>
            <option value="3">Dhosham</option>
        </select>
    <label>economical status</label>
        <select id ="Economical" name="economical"  class="form-control">
            <option value="1" selected>Poor</option>
            <option value="2">Medium</option>
            <option value="3">Rich</option>
        </select>    
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
</div>
<div class="col-md-12">
<section class="content-header">
  <h1>
    Full list
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="overflow: scroll !important;">
        <div class="box-header">
          <h3 class="box-title">Full list</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="candidateList" class="table table-bordered table-striped">
            <thead>
              <th><h3>Reg.No</h3></th>
              <th><h3>Name</h3></th>
              <th><h3>Email</h3></th>
              <th><h3>Phone</h3></th>
              <th><h3>Age</h3></th>
              <th><h3>Religion</h3></th>
              <th><h3>Gender</h3></th>
            </thead>
            <tbody>
              <?php foreach($candidates as $candidate):?>
                <tr>
                  <td><?=$candidate['id']?></td>
                  <td><a href="/showprofile?pid=<?= $candidate['id']?>"><?= $candidate['name']?></a></td>
                  <td><?= $candidate['email']?></td>
                  <td><?=$candidate['phone']?></td>
                  <td><?=$candidate['age']?></td>
                  <td><?=$candidate['religion']?></td>
                  <?php if($candidate['sex'] == 1){?>
                    <td>Male</td>  
                  <?php } else {?>
                    <td>Female</td>
                  <?php }?>          
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<!-- /.box -->
</div>
<?php $content=ob_get_clean();?>
<?php include 'layout.tpl.php'?>