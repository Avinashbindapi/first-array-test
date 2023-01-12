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
                        $pdo = $conn->prepare("SELECT * FROM product;");
                        $pdo->execute();
                        $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
                        print_r($data);

                        for($i = 0; $i < count($data); $i++){                            
                            echo $data[$i]['name'] . '<br>';
                        }

                        foreach ($data as $key => $product) :
                            echo $product['name'] . '<br>';
                        endforeach;
                    ?>

                    <?php
                        $product = array(
                            array(                                    
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
                            ),
                            array(                                    
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
                            ),
                            array(                                    
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
                            ),
                        );

                        $products = [
                            [
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
                            ],
                            [
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
                            ],
                            [
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
                            ],
                            [
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
                            ],
                            [
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
                            ],
                            [
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
                            ],
                            [
                                'product_id' => 4,
                                'sku' => 's k',
                                'name' => 'ashish SDF ',
                                'image' => './assets/images/4.jpg',
                                'cetegory_id' => 3,
                                'short_description' => 'lop',
                                'detaills' => 'good',
                                'stock' => 1,
                                'active' => 1,
                                'create_at' => '2022-12-04 04:00:05',
                            ],
                        ];

                        for($i = 0; $i < count($product); $i++){                            
                            echo $product[$i]['name'] . '<br>';
                        }

                        foreach ($products as $key => $product) :
                            echo $product['name'] . '<br>';
                        endforeach;

                        // echo $product['name'];
                    ?>
                </pre>
            </div>
        </div>
    </div>

    <script>
        const App = {
            template:`
                <pre v-for="product in products"> {{product.product_id}} </pre>
                <pre> {{array[1]}} </pre>
            `,
            data(){
                return {
                    products : [
                                {
                                    product_id : [{key : "v1", another : "smajhane"},{key : "v2"},{key : "v3"},{key : "v4"},{key : "v5"}],
                                    sku : 's k',
                                    name : 'ashish sd',
                                    image : './assets/images/4.jpg',
                                    cetegory_id : 3,
                                    short_description : 'lop',
                                    detaills : 'good',
                                    stock : 1,
                                    active : 1,
                                    create_at : [{key : '2022-12-04 04:00:05'}],
                                },
                                {
                                    product_id : 4,
                                    sku : 's k',
                                    name : 'ashishr ty',
                                    image : './assets/images/4.jpg',
                                    cetegory_id : 3,
                                    short_description : 'lop',
                                    detaills : 'good',
                                    stock : 1,
                                    active : 1,
                                    create_at : [{key : '2022-12-04 04:00:05'}],
                                },
                                {
                                    product_id : 4,
                                    sku : 's k',
                                    name : 'ashishe55gf ',
                                    image : './assets/images/4.jpg',
                                    cetegory_id : 3,
                                    short_description : 'lop',
                                    detaills : 'good',
                                    stock : 1,
                                    active : 1,
                                    create_at : [{key : '2022-12-04 04:00:05'}],
                                },
                                {
                                    product_id : 4,
                                    sku : 's k',
                                    name : 'ashish4 thef dfg',
                                    image : './assets/images/4.jpg',
                                    cetegory_id : 3,
                                    short_description : 'lop',
                                    detaills : 'good',
                                    stock : 1,
                                    active : 1,
                                    create_at : [{key : '2022-12-04 04:00:05'}],
                                },
                                {
                                    product_id : 4,
                                    sku : 's k',
                                    name : 'ashishsfvfb ret rg',
                                    image : './assets/images/4.jpg',
                                    cetegory_id : 3,
                                    short_description : 'lop',
                                    detaills : 'good',
                                    stock : 1,
                                    active : 1,
                                    create_at : [{key : '2022-12-04 04:00:05'}],
                                },
                            ],

                    array:[{ key : 'val' },[{ key2 : 'val2' }],[{ key3 : 'val3' }]],
                }
            } 
        }
        Vue.createApp(App).mount('#app')
    </script>
</body>
</html>