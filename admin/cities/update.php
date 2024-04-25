<?php require '../../confing.php';  ?>
<?php require BL.'fun/validata.php';  ?>
<?php require BLA.'inc/header.php';  ?>


<?php 
                if (isset($_POST['submit'])) 
                {
                    
                    $name = $_POST['name'];
                    $city_id = $_POST['city_id'];
                    if(checkEmpty($name)&& checkless($name , 3)){
                        $row = getRow('cities','city_id',$city_id);
                        
                      if($row ){
                        $sql = "UPDATE cities SET `city_name`='$name' WHERE `city_id` =' $city_id'";
                        $success_message = db_update($sql);
        


                    }
                    else 
                    {
                        $error_message = "Please Type Correct City";
                    }
                }
                else 
                {
                    $error_message = "Please Type City Name";
                }
    
                require BL.'fun/messages.php';
            }
    
    
            
                ?>









<?php require BLA.'inc/footer.php';  ?>
