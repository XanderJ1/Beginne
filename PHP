<?php

    $name = 'Bash';
    $age = 25;
    $location = 'Tema, Comm 25';

    $Brent= [
        ['Position'=>'Accountant','Name' =>'Prince'],
        ['Position' => 'Operations' , 'Name' => 'Ben'],
        [ 'Position'=>'Accountant2', 'Name' =>'Francis'],
        ['Position'=>'Accountant3','Name' =>'Nab'],
        ['Position'=>'Accountant4', 'Name'=>'Bash'],
        ['Position'=> 'CEO', 'Name'=> 'Hakeem'],
        ['Position' =>'Board Chairman', 'Name'=> 'Victor']
    ];



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
    <body>
       <H1><?php echo 'User profile' ?></H1>
        <p><?php echo 'Name: '.$name ?></p>
        <p><?php echo  'Age: '. $age?></p>
        <p><?php echo 'Location: '. $location ?></p>

        <p><?php   foreach ($Brent as $Brent){
            echo $Brent['Position'].' - '.$Brent['Name']. '<br>';
     };
     ?>
    </body>
</html>
