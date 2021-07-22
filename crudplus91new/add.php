<?php
include('connection.php');
include('header.php');
?>  
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           PHP CRUD <small>Patient details</small>
                       </h1>
                       
                   </div>
               </div>


               <div class="col-lg-12">
                  <h2>Add  Patient details</h2>
                  <div class="col-lg-6">

                    <form role="form" method="post" action="transac.php?action=add">
                        
                        <div class="form-group">
                          <input class="form-control" placeholder="Full Name" name="firstname">
                      </div>
                      <div class="form-group">
                          <input type="date" class="form-control" placeholder="Date of Birth" name="dob">
                      </div> 
                      <div class="form-group">
                          <input class="form-control" placeholder="Age" name="age">
                      </div> 
                      <div class="form-group">
                          <input class="form-control" placeholder="Address" name="address">
                      </div> 
                      <div class="form-group">
                         <select class="form-control" name="city" id="city">
                            <option value="Mumbai">Mumbai</option>
                            <option value="Pune">Pune</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <select class="form-control" name="state" id="state">
                            <option value="Maharshtra">Maharshtra</option>
                            <option value="Goa">Goa</option>
                        </select>
                        <!-- <input class="form-control" placeholder="state" name="state"> -->
                    </div> 
                           <!--  <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="comment"></textarea>
                          </div>  --> 
                          <button type="submit" class="btn btn-default">Save Record</button>
                          <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                  </div>
              </div>
              
          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="js/plugins/morris/raphael.min.js"></script>
  <script src="js/plugins/morris/morris.min.js"></script>
  <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

