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
    <title>Quotes</title>
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
                            <div class="jumbotron" style="text-align:center;">
                                    QUOTES  | IDEAS | TESTIMONIES                                 
                            </div>
                           
                        </div>
                       
                        <div class="container"> 
                                                 <a href="<?php echo base_url();?>index.php/sightInc/quote" class="btn btn-info btn-lg">Add a Quote</a>
                                                 <a type="button" class="btn btn-danger btn-lg" href="<?php echo  base_url('index.php/Qt_controller/logout') ?>" >Log out</a>  

                                                <span  style="text-align:center; color:green"><?php echo isset($response) ? $response : '' ?></span>
                                                <p></p>                           
                                         <div id="quotes">   
                                           <h3 type="button" class="btn btn-block btn-primary">Quotes</h3>                                       
                                            <div class="row">                                                                                             
                                                        <?php
                                                        foreach($this->sight->retrieve($userID, 'quote') as $quote)
                                                        { 
                                                            ?>       
                                                                    <div class="col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                                                                <div class="p-4 bg-black">
                                                                                        <span class="d-block text-secondary small text-uppercase"><?php echo $quote->when_added; ?></span>
                                                                                        <h2 class="h5 text-black mb-3"><a href='#'> <?php echo  $quote->quote; ?></a></h2>
                                                                                        <p><?php echo  $quote->insight; ?></p>
                                                                                </div>
                                                                    </div>                                                        
                                                            <?php
                                                        } ?>                                              
                                            </div>  
                                         </div>
                                         <div id="testimonies">
                                                <h3 type="button" class="btn btn-block btn-primary">Testimonies</h3>
                                                    <div class="row">
                                                               <?php
                                                                        foreach($this->sight->retrieve($userID, 'testimony') as $row)
                                                                        { 
                                                                            ?>       
                                                                                    <div class="col-md-11 col-lg-11 mb-4" data-aos="fade-up" data-aos-delay="100">
                                                                                                <div class="p-1 bg-black">
                                                                                                        <span class="d-block text-secondary small text-uppercase"><?php echo $row->when_added; ?></span>
                                                                                                        <h2 class="h5 text-black mb-3"><a href='#'> <?php echo  $row->title; ?></a></h2>
                                                                                                        <p><?php echo  $row->insight; ?></p>
                                                                                                </div>
                                                                                    </div>                                                        
                                                                            <?php
                                                                        }                                                                
                                                                ?>  

                                                        </div>
                                                </div>
                                        <div id="ideas">
                                                <h3 type="button" class="btn btn-block btn-primary">Ideas</h3>
                                                <div class="row">
                                                               <?php
                                                                        foreach($this->sight->retrieve($userID, 'idea') as $row)
                                                                        { 
                                                                            ?>       
                                                                                    <div class="col-md-4 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                                                                                <div class="p-4 bg-black">
                                                                                                        <span class="d-block text-secondary small text-uppercase"><?php echo $row->when_added; ?></span>
                                                                                                        <h2 class="h5 text-black mb-3"><a href='#'> <?php echo  $row->title; ?></a></h2>
                                                                                                        <p><?php echo  $row->insight; ?></p>
                                                                                                </div>
                                                                                    </div>                                                        
                                                                            <?php
                                                                        }                                                                
                                                                ?>   
                                                </div>   

                                        </div>                                                                           
                            </div>
                
                                                                        
                <div class="page-footer">
                            <div class="jumbotron" style="text-align:center;">
                                   Sight Inc &copy; 2019                                 
                            </div>
                           
                 </div>
</body>
</html>