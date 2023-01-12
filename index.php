<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./css/bootstrap.bundle.min.js"></script>
    <script src="./css/vue.global.js"></script>
</head>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div id="app"></div>
            </div>
        </div>
        <div class="col-6">
            <pre>
               <?php
                $conn = new PDO("mysql:host=localhost;dbname=shopee_2",'root','');
                $pdo = $conn->prepare("SELECT * FROM users;");
                $pdo ->execute();
                $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
                print_r($data);

                for ($i=0; $i <count($data) ; $i++) { 
                    echo $data[$i]['email'] . '<br>';
                }

                $users = [
                    [
                        'user_Id' => 21,
                        'first_name' => 'Avadhesh',
                        'last_name' => 'Kumar',
                        'username' => 'ava',
                        'email' =>' ava@gmail.com',
                        'password' => '$2y$10$9FU45cdkWYrmHN6a/dXa1eDVEDJAO/zGpn3z6ylcXOsyB2PHeoWNS',
                        'create_at' => '2022-12-16 09:49:41',
                    ],
                    [
                        'user_Id' => 21,
                        'first_name' => 'Avadhesh',
                        'last_name' => 'Kumar',
                        'username' => 'ava',
                        'email' =>' ava@gmail.com',
                        'password' => '$2y$10$9FU45cdkWYrmHN6a/dXa1eDVEDJAO/zGpn3z6ylcXOsyB2PHeoWNS',
                        'create_at' => '2022-12-16 09:49:41',
                    ],
                    
                ];

                for ($i=0; $i <count($users) ; $i++) { 
                    echo $users[$i]['first_name'];
                }

                foreach($users as $key => $user) :
                    echo $user['password'] . '<br>';
                endforeach;
               ?>
            </pre>
        </div>

    </div>

</body>
</html>