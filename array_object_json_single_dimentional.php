<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array and Objects - JavaScript (Vue) and Core PHP</title>
    <link rel="stylesheet" href="./../bootstrap.min.css">
    <script src="./../bootstrap.bundle.min.js"></script>
    <script src="./../vue.global.js"></script>
</head>
<body>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div id="app"></div>
            </div>
            <div class="col-6">
                <pre>
                    <?php
                        $conn = new PDO("mysql:host=localhost;dbname=dev4myshoppe", 'root', '');
                        $pdo = $conn->prepare("SELECT * FROM product WHERE product_id = ?;");
                        $pdo->execute([4]);
                        $data = ($pdo->fetch(PDO::FETCH_ASSOC));
                        print_r($data);
                        echo $data['name'];
                    ?>

                    <?php
                        $product = array(
                            'product_id' => 4,
                            'sku' => 's k',
                            'name' => 'ashish',
                            'image' => './assets/images/4.jpg',
                            'cetegory_id' => 3,
                            'short_description' => 'lop',
                            'detaills' => 'good',
                            'stock' => 1,
                            'active' => 1,
                            'create_at' => '2022-12-04 04:00:05',
                        );

                        print_r($product);

                        echo $product['name'];
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <script>
        const App = {
            template:`
                <pre> {{products.name}} </pre>
                <pre> {{product.name}} </pre>
                <pre> {{array[1]}} </pre>
            `,
            data(){
                return {
                    products : <?php echo json_encode($product); ?>,
                    product : {
                        product_id : 4,
                        sku : 's k',
                        name : 'ashish',
                        image : './assets/images/4.jpg',
                        cetegory_id : 3,
                        short_description : 'lop',
                        detaills : 'good',
                        stock : 1,
                        active : 1,
                        create_at : '2022-12-04 04:00:05',
                    },
                    array:['df','werrw','dfgdfgfg'],
                }
            } 
        }
        Vue.createApp(App).mount('#app')
    </script>
</body>
</html>