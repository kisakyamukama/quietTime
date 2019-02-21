<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
        <?php 
                //all users list
                if(isset($view) &&  $view == 1){
                    ?>
                    <table border="1">
                        <tr>
                            <td>S.no</td>
                            <td>Username</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php
                            $sno = 1;
                            foreach($response as $val)
                            {
                                echo '<tr>
                                            <td>'.$sno.'</td>
                                            <td>'.$val['username'].'</td>
                                            <td>'.$val['name'].'</td>
                                            <td>'.$val['email'].'</td>
                                            <td><a href="'.site_url().'/user/index?edit='.$val['id'].'">Edit</a ></td>
                                      </tr>';
                                      $sno++;
                            }
                        
                        ?>
                    </table>
                    <?php
                }

                //edit user
                if(isset($view) && $view == 2){
                    ?>
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name='txt_uname' readonly value='<?php  echo $response[0]['username']; ?>'></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name='txt_name' readonly value='<?php  echo $response[0]['name']; ?>'></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name='txt_email' readonly value='<?php  echo $response[0]['email']; ?>'></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" name='submit' readonly value='submit'></td>
                            </tr>
                        </table>
                    
                    </form>
            <?php
                }
        
        
        ?>
    
</body>
</html>