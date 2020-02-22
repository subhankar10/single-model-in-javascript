<style>
#tom{
    background-color:#fff;
}

</style>


<?php include "head.php" ?>
<?php include "nav.php" ?> 

<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                <p>User Edit</p>  <hr>
                                    <!-- Page-header start -->
                                    <div class="tom">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                         
                                                        </li>
                                                    
                                                    </ul>
                                                </div>
                                            </div>
                     
                                       
                                       
                                  
                                    <div class="col-xl-3 col-md-6">
                                            
							
                                            <label >User Type
</label>
						

                                    <select class="js-example-basic-single col-sm-12">
                <optgroup>
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="WY">Peter</option>
                    <option value="WY">Hanry Die</option>
                    <option value="WY">John Doe</option>
                </optgroup>
            </select>
</div>                                    <div class="col-xl-3 col-md-6">


<label >District
</label>
						

                        <select class="js-example-basic-single col-sm-12">
    <optgroup>
        <option value="AL">Alabama</option>
        <option value="WY">Wyoming</option>
        <option value="WY">Peter</option>
        <option value="WY">Hanry Die</option>
        <option value="WY">John Doe</option>
    </optgroup>
</select>
</div>							
<div class="col-xl-3 col-md-6">


<label >Block
</label>
						

                        <select class="js-example-basic-single col-sm-12">
    <optgroup>
        <option value="AL">Alabama</option>
        <option value="WY">Wyoming</option>
        <option value="WY">Peter</option>
        <option value="WY">Hanry Die</option>
        <option value="WY">John Doe</option>
    </optgroup>
</select>
</div>
<div class="col-xl-3 col-md-6">
<button class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>

               <!-- model create -->
               <div id="create" class="modal">
               <span onclick="document.getElementById('create').style.display='none'" class="close" title="Close Modal">×</span>
               <div id="tom">
               <div class="container">

               <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>

                                <!-- <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                    </div>
                                </div> -->



                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="text" name="user-name" class="form-control" required="" placeholder="Username">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><a href="log.php">LOGIN</a></button>
                                        
                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account?<a href=""> <b class="f-w-600">Register here </b></a></p>
                            </div>



                        </div>
                    <!-- </form> -->
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                </div>



</div>
</div>

                                  <!-- model end -->

                                        <!-- Filtering Foo-table card start -->
                                     
                                        <button onclick="document.getElementById('create').style.display='block'" class="btn btn-secondary">Add(+)</button>

                                        <div class="page-body">
                                        <!-- Basic Key-table fix table start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Cader View</h5>
                                                
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="basic-key-table" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>User Id</th>
                                                                <th>User Password</th>
                                                                <th>Name</th>
                                                                <th>Mobile No</th>
                                                                <th>Reg No</th>
                                                                <th>Status</th>
                                                                <th>Edit</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Edinburgh</td>
                                                                <td>jslps</td>
                                                                <td>43534634747</td>
                                                                <td>564574574</td>
                                                                <td>Tiger Nixon</td>
                                                                <td>
                                                                <a href="" class="btn-primary btn">Edit</a>
                                                       <button class="btn btn-danger">Delete</button>
                                                                </td>   
                                                            </tr>
                                                           
                                                           
                                                        </tfoot>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Edinburgh</td>
                                                                <td>jslps</td>
                                                                <td>43534634747</td>
                                                                <td>564574574</td>
                                                                <td>Tiger Nixon</td>
                                                                <td>
                                                                <a href="" class="btn-primary btn">Edit</a>
                                                       <button class="btn btn-danger">Delete</button>
                                                                </td>
                                                                
                                                            </tr>
                                                           
                                                           
                                                        </tfoot>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Edinburgh</td>
                                                                <td>jslps</td>
                                                                <td>43534634747</td>
                                                                <td>564574574</td>
                                                                <td>Tiger Nixon</td>
                                                                <td><ul>
                                                                <a href="" class="btn-primary btn">Edit</a>
                                                       <button class="btn btn-danger">Delete</button>
                                                                </td>
                                                                
                                                            </tr>
                                                           
                                                           
                                                        </tfoot>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Edinburgh</td>
                                                                <td>jslps</td>
                                                                <td>43534634747</td>
                                                                <td>564574574</td>
                                                                <td>Tiger Nixon</td>
                                                                <td><ul>
                                                                <a href="" class="btn-primary btn">Edit</a>
                                                       <button class="btn btn-danger">Delete</button>
                                                                </td>
                                                                
                                                            </tr>
                                                           
                                                           
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                   
                                       
                                       
</div>
<script>
var modal = document.getElementById('create');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

          							
<?php include "footer.php" ?>						



