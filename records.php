<?php 
require('layout.php');
require('database.php');

$sql = "SELECT * FROM records ORDER BY id desc";
$record = $conn->query($sql);
?>


<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">Previous Records</h6>
  <div class="table-wrapper">
    <table id="datatable1" class="table display responsive nowrap">
      <thead>
        <tr>
          <th class="wd-10p">Sl No</th>
          <th class="wd-10p">Age</th>
          <th class="wd-10p">Sex</th>
          <th class="wd-10p">Temparature</th>
          <th class="wd-10p">Assessment Date</th>
          <th class="wd-10p">Assessment Score</th>
          <th class="wd-10p">COVID-19 Result</th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($record as $key => $rec){
          ?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $rec['age'] ?></td>
            <td><?php echo $rec['sex'] ?></td>
            <td><?php echo $rec['temperature'].'°F' ?></td>
            <td><?php echo $rec['ass_date'] ?></td>
            <td><?php echo $rec['score'] ?></td>
            <td><?php echo $rec['result'] ?></td>
          </tr>

        <?php } ?>


      </tbody>
    </table>
  </div><!-- table-wrapper -->
</div><!-- card -->


<hr><hr><br>
<?php 
require('footer.php');
?>