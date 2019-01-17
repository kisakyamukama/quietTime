<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/form.css">
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <title>Testimony</title>
</head>
<body>
                        <!-- 
                            session data 
                        -->
                            <?php 
                                    $userID =  $this->session->userdata('userID');
                                    $user_name =  $this->session->userdata('username');
                                ?> 


                        <div class="page-header">
                            <div class="jumbotron">
                                    QUOTES                                   
                            </div>
                            <a href="<?php echo base_url();?>index.php/sightInc/quote" class="btn btn-info">Add a Quote</a>
                            <a type="button" class="btn btn-danger btn-lg" href="<?php echo  base_url('index.php/Qt_controller/logout') ?>" >Log out</a>  
                        </div>
                        <span  style="text-align:center; color:green"><?php echo isset($response) ? $response : '' ?></span>

                        <div class="container">                                            
                                            <div class="row">                                               
                                                        <?php

                                                        foreach($this->sight->retrieve($userID, 'testimony') as $row)
                                                        { 
                                                            ?>       
                                                                    <div class="col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                                                                <div class="p-4 bg-black">
                                                                                        <span class="d-block text-secondary small text-uppercase"><?php echo $row->when_added; ?></span>
                                                                                        <h2 class="h5 text-black mb-3"><a href='#'> <?php echo  $row->added_by; ?></a></h2>
                                                                                        <p><?php echo  $quote->insight; ?></p>
                                                                                </div>
                                                                    </div>                                                        
                                                            <?php
                                                        } ?>                                              
                                            </div>                                                                                
                            </div>
                        


</body>
</html>