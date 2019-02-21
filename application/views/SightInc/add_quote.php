<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <!-- <link rel="stylesheet" href="<?php // echo base_url();?>assets/css/form.css"> -->
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <title>Quotes
    </title>
    <!-- <meta http-equiv="refresh" content="3"> -->
    <script>
        $(document).ready(function(){

            $('#qBtn').click(function(){
                $('#qInput').show();
                $('#title_input').hide();
            });
            $('.title').click(function(){
                $('#qInput').hide();
                $('#title_input').show();
            });

            $('#qBtn').css("color", "cyan");
           // $('#title_input').css("background-color","black");
            $('#title_input').css("color","green");
           // $('.title').css("background-color","pink");


        });

    </script>
</head>
<body>
                        <div class="page-header">
                                        <div class="jumbotron" style="text-align:center;">
                                                    ADD QUOTE
                                        </div>

                        </div>



        </div>

        <div class="container">

                                              <a href="<?php echo base_url();?>index.php/sightInc/view_quotes" class="btn btn-info btn-lg">View quotes</a> <br>
                                                    <hr>


                                        <!-- ADD QUOTE  -->
                                                <div id="devotionForm">
                                                       <span class="error" style="text-align:center"><?php echo isset($form) ? $form : '' ?></span>
                                                       <?php echo "<span id='error'> ". validation_errors(). "</span>"; ?>

                                                        <form  method="post" action="<?php echo base_url('index.php/sightInc/add_quote'); ?>">

                                                                <div class="form-group">
                                                                    <!-- <label for="">Qoute</label> -->
                                                                    <select class="custom-select" name="table" id="">
                                                                        <option value="idea" class="title">Idea</option>
                                                                        <option value="testimony" class="title">Testimony</option>
                                                                        <option value="quote" id="qBtn"  >Quote</option>
                                                                    </select>
                                                                    <!-- <input type="text" class="form-control" name="quote" placeholder="enter quote here" required>                     -->
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="quote" placeholder="enter quote here" id="qInput" style="display:none;">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="title" placeholder="enter title here" id="title_input">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="insight"  class="form-control" id=""  rows="10"  placeholder="Enter insights here ..."></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Your ID </label>
                                                                    <input name="id"  class="form-control" value="<?php echo $this->session->userdata('userID') ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="form-control btn btn-success"  name="submit" value="save devotion">
                                                                </div>

                                                        </form>
                                                 </div>
    </div>

</body>
</html>
