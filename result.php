<?php 
require('layout.php');
require('database.php');

$temp_score = 0;
$maj_symp_score = 0;
$add_symp_score = 0;
$total_score = 0;

if (isset($_POST['submit'])) {
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $temperature = $_POST['temperature'];
  $maj_symptoms = $_POST['maj_symptoms'];
  $add_symptoms = $_POST['add_symptoms'];
  $date = date("Y/m/d");

    //Calculate Score :
  if ($temperature > 99.5 || $temperature > 100.9) {
    $temp_score = 2 ;
  }
  if (array_sum($maj_symptoms) > 0){
    $maj_symp_score = array_sum($maj_symptoms) + 2;
  }
  $add_symp_score = array_sum($add_symptoms);

  $total_score = $temp_score+$maj_symp_score+$add_symp_score;


    //assign Result
  if ($total_score < 5) {
    $result = 'Negative';
  }

  if ($total_score == 5) {
    $result = 'Positive';
  }
  if ($total_score > 5 && $total_score <= 7) {
    $result = 'Positive';
  }
  if ($total_score > 7) {
    $result = 'Positive';
  }


  //insert into database
  $sql = "INSERT INTO records (age, sex, temperature, ass_date, score, result)
  VALUES ('$age', '$sex', '$temperature', '$date', '$total_score', '$result')";
  $conn->query($sql);


}
?>




<!-- main content of the page-->

<?php if (isset($_POST['submit'])){ ?>

 <div class="card pd-20 pd-sm-40 mg-t-50">
  <h6 class="card-body-title">Your Result</h6>
  <p class="mg-b-20 mg-sm-b-30">this is based on your given information</p>

  <?php if ($total_score > 7) {
   ?>
   <div class="alert alert-danger pd-y-20" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="d-sm-flex align-items-center justify-content-start">
      <i class="icon ion-ios-close alert-icon tx-52 tx-danger mg-r-20"></i>
      <div class="mg-t-20 mg-sm-t-0">
        <h5 class="mg-b-2 tx-danger">Almost confirm case of COVID-19 positive.</h5>
        <p class="mg-b-0 tx-gray">Advice : 
          <ol>
            <li>Go for isolation</li>
            <li>Contact Doctor immediately and follow advices</li>
            <li>Highly recommended patient to be hospitalized</li>
          </ol>
        </p>
        <p class="mg-b-0 tx-gray">List of phone numbers in case of emergency :
          <ol>
            <li>IEDCR : 02-9898796, 10655, 01944333222</li>
            <li>DMC : 02-55165088</li>
            <li>DGHS : 16263</li>
          </ol>
        </p>
      </div>
    </div><!-- d-flex -->
  </div><!-- alert -->
<?php } ?>

<?php if ($total_score > 5 && $total_score <= 7) {
  ?>
  <div class="alert alert-warning pd-y-20" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="d-sm-flex align-items-center justify-content-start">
      <i class="icon ion-alert-circled alert-icon tx-52 tx-warning mg-r-20"></i>
      <div class="mg-t-20 mg-sm-t-0">
        <h5 class="mg-b-2 tx-warning">Highly chance of COVID-19 affected</h5>
        <p class="mg-b-0 tx-gray">Advice : 
          <ol>
            <li>Go for isolation</li>
            <li>Contact Doctor and follow advice</li>
          </ol>
        </p>
        <p class="mg-b-0 tx-gray">List of phone numbers in case of emergency :
          <ol>
            <li>IEDCR : 02-9898796, 10655, 01944333222</li>
            <li>DMC : 02-55165088</li>
            <li>DGHS : 16263</li>
          </ol>
        </p>
      </div>
    </div><!-- d-flex -->
  </div><!-- alert -->
<?php } ?>

<?php if ($total_score == 5) {
 ?>
 <div class="alert alert-info pd-y-20" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="d-sm-flex align-items-center justify-content-start">
    <i class="icon ion-ios-information alert-icon tx-52 mg-r-20"></i>
    <div class="mg-t-20 mg-sm-t-0">
      <h5 class="mg-b-2">Possible suspected case for COVID-19 affected</h5>
      <p class="mg-b-0 tx-gray">Advice : <ol>
        <li>Go for isolation</li>
        <li>Contact Doctor and follow advice</li>
      </ol></p>
    </div>
  </div><!-- d-flex -->
</div><!-- alert -->
<?php } ?>

<?php if ($total_score < 5) {
 ?>
 <div class="alert alert-success pd-y-20" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="d-sm-flex align-items-center justify-content-start">
    <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
    <div class="mg-t-20 mg-sm-t-0">
      <h5 class="mg-b-2 tx-success">Merely have chance to get affected by COVID-19</h5>
      <p class="mg-b-0 tx-gray">Advice : <ol>
        <li>Go for isolation</li>
        <li>Contact Doctor and follow advice</li>
      </ol></p>
    </div>
  </div><!-- d-flex -->
</div><!-- alert -->
<?php } ?>

</div><!-- card -->
<?php } ?>


<hr><hr><br>


<?php 
require('footer.php');
?>