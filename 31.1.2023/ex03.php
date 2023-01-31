<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$customers = [
    [
        'name' => 'vantu',
        'email' => 'vantu@gmail.com',
        'address' => 'Mexico'
    ],
    [
        'name' => 'vantu 1',
        'email' => 'vantu1@gmail.com',
        'address' => 'Mexico'
    ],
    [
        'name' => 'vantu 2',
        'email' => 'vantu2@gmail.com',
        'address' => 'Mexico'
    ], 
    [
        'name' => 'vantu 2',
        'email' => 'vantu2@gmail.com',
        'address' => 'Mexico'
    ], [
        'name' => 'vantu 2',
        'email' => 'vantu2@gmail.com',
        'address' => 'Mexico'
    ], [
        'name' => 'vantu 2',
        'email' => 'vantu2@gmail.com',
        'address' => 'Mexico'
    ],
];
?>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>
                    STT
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Address
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($customers)){
                    $emails = [];
                    foreach($customers as $index => $customer){
                        if(!in_array($customer['email'], $emails)){
                            $emails[] = $customer['email'];
                        }
                        
                        $key = array_search($customer['email'], $emails);
                        unset($emails[$key]);
                        if($key !== false){
                           
                        }


                        echo ' <tr>
                                    <td>'.($index + 1).'</td>
                                    <td>'.$customer['name'].'</td>
                                    <td>'.$customer['email'].'</td>
                                    <td>'.$customer['address'].'</td>
                                </tr>';
                        
                    }

                }
                print_r($emails);
            ?>
            
        </tbody>
    </table>
</body>
</html>