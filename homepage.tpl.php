<?php ob_start() ?>
<?php $count = 0;?>
<!-- TABLE: LATEST ORDERS -->
<!-- Content Header (Page header) -->
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
<?php $content=ob_get_clean();?>
<?php include 'layout.tpl.php'?>