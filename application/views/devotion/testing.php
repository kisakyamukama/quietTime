<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>

    <title>Navbar</title>
    <script>
        // $(document).ready(function(){
        //     $('#mytab a').on('click', function (e){
        //         e.preventDefault()
        //         $($this).tab('show')
        //     });
        // });
    
    </script>
</head>
<body>
            


        <!-- nav tabs -->
        <div id="navBar">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a  class="nav-link active"  data-toggle="tab" href="#home_tab" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "   data-toggle="tab" role="tab" href="#link" aria-controls="link" aria-selected="false">link 1</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link"  data-toggle="tab" role="tab" href="#link2" aria-controls="link2" aria-selected="false">link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"  data-toggle="tab" role="tab" href="#Disabled" aria-controls="Disabled" aria-selected="false" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home_tab" role="tabpanel" aria-labelledby="home-tab"> 1</div>
            <div class="tab-pane" id="link" role="tabpanel" aria-labelledby="link-tab"> home is thsis</div>
            <div class="tab-pane" id="link2" role="tabpanel" aria-labelledby="link2-tab"> homse is this</div>
            <div class="tab-pane" id="Disabled" role="tabpanel" aria-labelledby="Disabled-tab"> hosdme is this</div>

        </div>
           
    
</body>
</html>