@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

        <div class="col-md-6 mx-auto bg-light p-4 rounded mt-5">

                <div class="progress mb-3" style="height:40px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width:100%;" id="progressBar">
                    <b class="lead" id="progressText">Registration</b>
                  </div>
                </div>
      
                <form class="needs-validation" novalidate id="form-data" method="post">
      
                  <!-- First Part of the form -->
                  <div>
      
                    <h4 class="text-center bg-primary p-1 rounded text-light">Enrollment Info</h4>
      
                    <div class="form-group row">
      
                      <div class="col-md-4 form-group mt-3">
                        <label for="school-year">School Year</label>
                        <select class="form-control" id="school-year">
                          <option selected></option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
      
                      <div class="col-md-4 form-group mt-3">
                        <label for="semester">Semester</label>
                        <select class="form-control" id="semester">
                          <option disabled>Select</option>
                          <option selected>1st semester</option>
                          <option>2nd semester</option>
                        </select>
                      </div>
      
                      <div class="col-md-4 form-group mt-3">
                        <label for="date">Date</label>
                        <select class="form-control" id="date">
                          <option disabled selected>Select</option>
                          <option>Sample Date</option>
                          <option>Sample Date</option>
                        </select>
                      </div>
      
                  </div>

                  <div class="form-group row">
                    <div class="col-md-4 form-group mt-3">
                      <label for="date">Enrollment Type</label>
                      <select class="form-control" id="enrollment-type">
                        <option disabled selected>Select</option>
                          <option selected>New Student</option>
                      </select>
                    </div>
                  </div>
                  
                  <!--Enrollment Type-->
      
                  <h4 class="text-center bg-primary p-1 mt-4 rounded text-light">Basic Information</h4>
      
                  <div class="input-group mt-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="name">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="LastName" required>
                    <input type="text" class="form-control" placeholder="FirstName" required>
                    <input type="text" class="form-control" placeholder="MiddleName" required>
                    <div class="invalid-feedback">
                        * Please choose a valid name.
                    </div>
                  </div>
      
                  <div class="form-group row mt-3">
                    <div class="col-sm-4">
                      <label for="studentid">Student ID</label>
                      <input type="text" class="form-control" id="studentid" placeholder="Student ID" required>
                      <div class="invalid-feedback">
                          * Please choose a valid id.
                      </div>
                    </div>
      
                    <div class="col-sm-4">
                      <label for="course-major">Course Major</label>
                      <select class="form-control" id="course-major">
                        <option disabled selected>Select</option>
                        <option>Bachelor of Science in Computer Science</option>
                        <option>Bachelor of Science in Office Administration</option>
                        <option>Bachelor in Hotel Management</option>
                        <option>Bachelor of Science in Fisheries</option>
                        <option>Bachelor of Science in Marine Biology</option>
                      </select>
                      <div class="invalid-feedback">
                        * Please choose a valid name.
                    </div>
                    </div>
      
                    <div class="col-sm-4">
                      <label for="year">Year</label>
                      <select class="form-control" id="year">
                        <option disabled selected>Select</option>
                        <option >1st Year</option>
                        <option >2nd Year</option>
                        <option >3rd Year</option>
                        <option >4th Year</option>
                      </select>
                    </div>
                  </div>
      
                  <div class="form-group row mt-4">
      
                    <div class="col-sm-4">
                      <label for="birth-date">BirthDate</label>
                      <select class="form-control" id="birth-date">
                        <option disabled selected>Select</option>
                        <option >Sample</option>
                        <option >Sample</option>
                      </select>
                    </div>
      
                    <div class="col-sm-8">
                      <label for="place-of-birth">Place of Birth</label>
                      <input type="text" class="form-control" id="place-of-birth" placeholder="Place of Birth">
                    </div>
      
                  </div>
      
                  <div class="form-group row mt-4">
      
                    <div class="col-md-3">
                      <label for="gender">Gender</label>
                      <select class="form-control" id="gender">
                        <option disabled selected>Select</option>
                        <option >Male</option>
                        <option >Female</option>
                      </select>
                    </div>
      
                    <div class="col-md-3">
                      <label for="citizenship">Citizenship</label>
                      <select class="form-control" id="citizenship">
                        <option disabled selected>Select</option>
                        <option>Filipino</option>
                        <option>Others</option>
                      </select>
                    </div>
      
                    <div class="col-md-3">
                      <label for="civil-status">Civil Status</label>
                      <select class="form-control" id="civil-status">
                        <option disabled selected>Select</option>
                        <option>Single</option>
                        <option>Married</option>
                      </select>
                    </div>
      
                    <div class="col-md-3">
                      <label for="religion">Religion</label>
                      <select class="form-control" id="religion">
                        <option disabled selected>Select</option>
                        <option>Catholic</option>
                        <option>Inc</option>
                        <option>Born Again</option>
                      </select>
                    </div>
      
                  </div>
      
                  <h4 class="text-center bg-primary p-1 rounded text-light mt-4 mb-4">Contact Information</h4>
      
                  <div class="form-group row mt-4">
      
                    <div class="col-md-6">
                      <label for="mobile-no">Mobile No</label>
                      <input type="text" class="form-control" id="mobile-no" placeholder="Mobile No">
                    </div>
      
                    <div class="col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
      
                  </div>
      
                  <div class="input-group mt-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Address</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Permanent Address">
                    <input type="text" class="form-control" placeholder="Present Address">
                  </div>
    
                  </div>
      
                  <!-- Second Part of the form -->
                  <div>
      
                    <h4 class="text-center bg-primary p-1 rounded text-light mt-4">Emergency Contact Person</h4>
      
                    <div class="input-group mt-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="parents-name">Parents Name</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Father">
                      <input type="text" class="form-control" placeholder="Mother">
                    </div>
      
                    <div class="input-group mt-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="parents-name">Occupation</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Father">
                      <input type="text" class="form-control" placeholder="Mother">
                    </div>
      
                    <div class="form-group row mt-4">
      
                      <div class="col-md-4">
                        <label for="parents-mobile">Parents Mobile No</label>
                        <input type="text" class="form-control" id="parents-mobile" placeholder="Parents Mobile No">
                      </div>
      
                      <div class="col-md-4">
                        <label for="parents-addr">Parents Address</label>
                        <input type="text" class="form-control" id="parents-addr" placeholder="Parents Address">
                      </div>
      
                      <div class="col-md-4">
                        <label for="zipcode">Zip Code</label>
                        <input type="text" class="form-control" id="zipcode" placeholder="Optional">
                      </div>
      
                    </div>
      
                    <div class="input-group mt-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="">Guardian</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Name (Optional)">
                      <input type="text" class="form-control" placeholder="Address (Optional)">
                    </div>
      
                    <h4 class="text-center bg-primary p-1 rounded text-light mt-4">Educational Background</h4>
      
                    <div class="input-group mt-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="">Elementary</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Name">
                      <input type="text" class="form-control" placeholder="Address">
                      <input type="text" class="form-control" placeholder="Year">
                    </div>
      
                    <div class="input-group mt-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="">Highschool</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Name">
                      <input type="text" class="form-control" placeholder="Address">
                      <input type="text" class="form-control" placeholder="Year">
                    </div>
      
                    <div class="input-group mt-4 form-group row">
      
                      <div class="col-md">
                        <label for="other-college">Other College / School Last Attended</label>
                        <input type="text" id="other-college" class="form-control" placeholder="Other / Last attended University">
                      </div>
                    </div>
      
                    <!--Next Button -->
                    <!--<div class="form-group mt-4">
                      <a href="#" class="btn btn-success btn-lg" type="submit" id="submit">Submit</a>
                    </div>-->
                    <button class="btn btn-success" type="submit">Submit form</button>
      
                  </div>
      
                </form>
      
              </div>
</div>
<!--Row-->

<script src="js/custom/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

<script type="text/javascript">

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>

@endsection