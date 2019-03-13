<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Quiet time</title>
    <script>
           $(document).ready(function(){
             $('ideaBtn').hide();

             $('#admin').load(function(){
             $('ideaBtn').show();
            });
           });
    </script>

</head>
<body>
      <!--
          session data
     -->
                <?php
                    $userID =  $this->session->userdata('userID');
                    $user_name =  $this->session->userdata('username');
                 ?>
                  <!-- navbar -->
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                  <!-- navbar -->


        <div class="container">

                <div class="jumbotron" id="header">
                    <div class="page-header">
                      <h1><marquee behavior="" direction="up" width="300" >My devotions..</marquee> </h1>
                    </div>


                </div>

                       <p>Welcome, <?php echo $user_name;  ?> <b id="date"></b> </p>

                       <!--
                             Buttons for switching
                        -->
                        <?php
                                if($user_name === 'admin'){
                                   echo "<span id='admin'>".$user_name."</span>";
                                }
                            ?>

                        <div  style="text-align:right">

                            <button style="text-align:right; float:left;" class="btn btn-lg" onclick="display()">Home</button>
                            <a class="btn btn-lg btn-info" onclick="display('profile')" id="profileBtn">Profile</a>
                            <a class="btn btn-lg btn-info" onclick="display('devotions')" id="devotionButton">View devotions</a>
                            <a class="btn btn-lg btn-info" onclick="display('music')" id="musicButton">Music list</a>


                            <a type="button" id="ideaBtn" class="btn btn-danger btn-lg" href="<?php echo  base_url('index.php/sightInc/quote') ?>" >Ideas</a>
                            <span type="button" class="btn btn-info btn-lg"><?php echo anchor('qt_controller/logout','Logout');?></span>
                            <a type="button" class="btn btn-danger btn-lg" href="<?php echo  base_url('index.php/sightInc/quote') ?>" >Quote</a>
                            <a type="button" class="btn btn-success  btn-lg" href="<?php echo  base_url('index.php/devotions/addDevotion') ?>" > Add a devotion</a>
                            <a type="button" class="btn btn-danger btn-lg" href="<?php echo  base_url('index.php/Qt_controller/logout') ?>" >Log out</a>
                        </div><br>


                <!--
                                                           USER DATA
                 -->


                                <div  id="user_data">
                                        <table class="table table-striped table-hover">
                                                <caption>user profile</caption>
                                                <thead class="thead-dark">
                                                            <th>Id</th>
                                                            <th>First name</th>
                                                            <th>Last name</th>
                                                            <th>Username</th>
                                                            <th>Gender</th>
                                                            <th>Residence</th>
                                                            <th>Zip Code</th>
                                                            <th>Password</th>
                                                            <th>Profile picture</th>
                                                            <th>Number of devotions</th>
                                                            <th>Date joined</th>
                                                            <th>Status</th>
                                                </thead>
                                                <tbody>
                                                        <?php

                                                        //This loops data from the database and displays it
                                                        function show_data($query){
                                                            foreach($query as $row) //query spcifies data returned as defined in the calling function
                                                            {
                                                                echo "
                                                                        <tr>
                                                                                <td>$row->id</td>
                                                                                <td>$row->first_name</td>
                                                                                <td>$row->last_name</td>
                                                                                <td>$row->username</td>
                                                                                <td>$row->gender</td>
                                                                                <td>$row->residence</td>
                                                                                <td>$row->zip_code</td>
                                                                                <td>$row->password</td>
                                                                                <td>$row->profile_photo</td>
                                                                                <td>$row->total_devotions</td>
                                                                                <td>$row->date_added</td>
                                                                                <td>"; if($row->status) echo 'active'; else echo 'Not active'; echo "</td>
                                                                        </tr>";
                                                            }

                                                        }

                                                                if($user_name=='admin')
                                                                {
                                                                    show_data($this->info->adminSelect('users'));
                                                                }else{
                                                                    show_data($this->info->select('users','id', $userID));
                                                                }

                                                            ?>
                                                </tbody>
                                        </table>
                                </div>




                <!--

                                                            DEVOTIONS TABLE
                -->
                                    <div id="devotions" class="container">
                                            <div class="row">
                                                        <?php

                                                        foreach($this->info->get_data($userID) as $devotion)
                                                        {
                                                            ?>       <div class="col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                                                            <!-- <a href='#'><img src='<?php// echo base_url()?>assets/images/cross.jpg' alt='Image' class='img-fluid'></a> -->
                                                                            <div class="p-4 bg-black">
                                                                                <span class="d-block text-secondary small text-uppercase"><?php echo $devotion->date_added; ?></span>
                                                                                <h2 class="h5 text-black mb-3"><a href='#'> <?php echo  $devotion->title; ?></a></h2>
                                                                                <p><?php echo  $devotion->lessons; ?></p>
                                                                            </div>
                                                                    </div>
                                                            <?php
                                                        } ?>
                                            </div>
                                    </div>

                 <!--
                                                                                 SCRIPTS

                  -->
                  <script>

                                        function display(show)
                                        {
                                            switch(show)
                                            {
                                                case 'devotions':
                                                    document.getElementById('devotions').style.visibility ='visible';
                                                    document.getElementById('devotionButton').style.visibility ='hidden';
                                                    document.getElementById('user_data').style.visibility ='hidden';
                                                    break;
                                                case 'view':
                                                    document.getElementById('devotions').style.visibility ='hidden';
                                                    document.getElementById('devotionButton').style.visibility ='visible';
                                                    document.getElementById('user_data').style.visibility ='visible';
                                                    break;
                                                case 'profile':
                                                    document.getElementById('devotions').style.visibility ='hidden';
                                                    document.getElementById('devotionButton').style.visibility ='visible';
                                                    document.getElementById('user_data').style.visibility ='visible';
                                                    break;
                                                default:
                                                    document.getElementById('devotions').style.visibility ='hidden';
                                                    document.getElementById('devotionButton').style.visibility ='visible';
                                                    document.getElementById('user_data').style.visibility ='hidden';
                                                    break;
                                            }
                                        }


                                    </script>
                                        <script>
                                            let date = new Date();
                                            let day = date.getDate();
                                            let month = date.getMonth()+1;
                                            let year = date.getFullYear();
                                            let today = day +'/'+month+'/'+year;
                                            document.getElementById('date').innerHTML = today;

                                        </script>





<script src="<?php echo  base_url('assets/js/bootstrap.min.js'); ?>" charset="utf-8"></script>
</body>
</html>
