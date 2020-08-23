<?php 
require('layout.php');
?>

<div class="card pd-20 pd-sm-40 mg-t-50">
  <h6 class="card-body-title">Follow the steps and give accurate information</h6>

  <form action="result.php" method="post">
    <div id="wizard2">
      <h3>STEP 1</h3>
      <section>
        <div class="form-group wd-xs-300">
          <label class="form-control-label">Age: <span class="tx-danger">*</span></label>
          <input id="firstname" class="form-control" name="age" placeholder="Enter Age" type="text" required>
        </div>
        <!-- form-group -->
        <div class="form-group wd-xs-300">
          <label class="form-control-label">Sex: <span class="tx-danger">*</span></label>
          <select  class="form-control select2" data-placeholder="Choose one" name="sex" required>
            <option label="Choose one"></option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group wd-xs-300">
          <label class="form-control-label">Body temperature: <span class="tx-danger">*</span></label>
          <input id="lastname" class="form-control" name="temperature" placeholder="Body temperature on °F" type="text" required>
        </div>
        <br><br>
        <div class="form-group wd-xs-300">
          <label class="ckbox">
            <input type="checkbox"><span>I confirm that these given informations are correct</span>
          </label>
        </div>
        <!-- form-group -->
      </section>
      <h3>STEP 2</h3>
      <section>
       <div class="form-group wd-xs-300">
         <label class="form-control-label">Select your symptoms, you can select multiple symptoms: <span class="tx-danger">*</span></label>
         <select class="form-control select2" name="maj_symptoms[]" multiple style="width: 200px">
          <option value="0" selected>Symptoms : </option>
          <option value="1">Breathing problem</option>
          <option value="1">Dry cough</option>
          <option value="1">Sore throat</option>
          <option value="1">Weakness</option>
          <option value="1">Runny nose</option>
        </select>
      </div>
      <br><br>
      <div class="form-group wd-xs-300">
        <label class="ckbox">
          <input type="checkbox"><span>I confirm that these given informations are correct</span>
        </label>
      </div>
      <!-- form-group -->
    </section>
    <h3>STEP 3</h3>
    <section>
      <div class="form-group wd-xs-300">
       <label class="form-control-label">Additional information about your symptoms, you can select multiple:</label>
       <select class="form-control select2" data-placeholder="Symptoms" name="add_symptoms[]" multiple style="width: 200px">
        <option value="0" selected>Symptoms : </option>
        <option value="2">Abdominal pain</option>
        <option value="2">Vomiting</option>
        <option value="2">Diarrhoea</option>
        <option value="2">Chest pain or pressure</option>
        <option value="2">Muscle pain</option>
        <option value="2">Loss of taste or smell</option>
        <option value="2">Rash on skin, or discoloration of fingers or toes</option>
        <option value="2">Loss of speech or movement</option>
      </select>
    </div>
    <br><br>
    <div class="form-group wd-xs-300">
      <label class="ckbox">
        <input type="checkbox"><span>I confirm that these given informations are correct</span>
      </label>
    </div>
    <div class="form-group">
      <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i>Submit</button>
    </div>
  </section>

</div>


</form>



<hr><hr><br>
<?php 
require('footer.php');
?>