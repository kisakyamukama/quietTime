<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add devotion</title>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/forms.css">


</head>
<body>

            <div class="container"> 

                    <div class="jumbotron" id="header">
                                    <div class="page-header">
                                        <h1>
                                            <!-- <marquee behavior="" direction="up" width="30" > -->
                                                Quiet Time devotions... <br> Jesus is my saviour
                                            <!-- </marquee> -->
                                         </h1> 
                                    </div>
                    </div>

                            <p>Hello, <?php echo $this->session->userdata('username'); ?> !</p>
                            <a type="button" class="btn btn-lg btn-info" href="<?php echo base_url('index.php/Qt_controller/view_devotions');?>">view devotions</a>
                            <a type="button" class="btn btn-danger btn-lg" style="float:right" href="<?php echo  base_url('index.php/Qt_controller/logout') ?>" >Log out</a>                    


                            <hr>
                                     <button class="btn btn-block" onclick="show('add')">Create new devotion</button>
                               <div id="devotionForm">
                                                <form  method="post" action="<?php echo base_url('index.php/Qt_controller/add_devotion'); ?>">
                                                        <div class="form-group">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control" name="title" placeholder="Title" required />                      
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Scripture</label>
                                                            <input type="text" class="form-control" name="scripture" placeholder="Scripture" required>                    
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Devotion content (Enter devotion here ....) </label>
                                                            <textarea name="lessons"  class="form-control" id=""  rows="10"  placeholder="Enter what you have understood here and the lessons you have learn" required></textarea>                    
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="form-control btn btn-success"  name="submit" value="save devotion">                    
                                                        </div>
                                                        
                                                </form>                               
                
                                </div>



               












                </div><!-- end container -->

                
        <script>
                function show(div){
                    switch(div)
                    {
                        case 'add':
                             document.getElementById('devotionForm').style.display ='block';
                             document.getElementById('devotionTable').style.display ='none';
                        case 'view':
                             document.getElementById('devotionForm').style.display ='none';
                             document.getElementById('devotionTable').style.display ='block';
                        default:
                             document.getElementById('devotionForm').style.display ='none';
                             document.getElementById('devotionTable').style.display ='none';
                    }
                }
        </script>
</body>
</html>