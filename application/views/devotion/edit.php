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

                $('#devotionButton').click(function(){
                    $('#devotions').show();
                    $('#user_data').hide();
                    alert("clicked");
                });
                $('#profileBtn').click(function(){
                    $('#devotions').hide();
                    $('#user_data').show();
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

        <div class="container">    
        
                <div class="jumbotron" id="header">
                    <div class="page-header">
                      <h1>Edit .. </h1> 
                    </div>
                        
                                               
                </div>  
                    

                      
                <span  style="text-align:center; color:green"><?php echo isset($edit_id) ? $edit_id : '' ?></span>
                




















                
                <!-- 
                                                           USER DATA
                 -->
                 

                                <div  id="user_data" style="display:none;">
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
                                                            <th>Changes</th>
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
                                                                                <td>$row->date_added</td>
                                                                                <td>"; if($row->status) echo 'active'; else echo 'Not active'; echo "</td>
                                                                                <td>"; echo anchor("qt_controller/edit/{$row->id}","EDIT",['class'=>'menu-item']); echo "</td>
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
                                    <div id="devotions" class="container" style="display:none;">                                            
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
        </div><!-- closemain container -->
            
                 <!-- 
                                                                                 SCRIPTS 

                  -->
                 
                                        <script>
                                            let date = new Date();
                                            let day = date.getDate();
                                            let month = date.getMonth()+1;
                                            let year = date.getFullYear();
                                            let today = day +'/'+month+'/'+year;
                                            document.getElementById('date').innerHTML = today;                                    
    
                                        </script>
                                       

                                   
                                
                    

</body>
</html>