<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
<link rel="stylesheet" href="css/item_slider.css" type="text/css">
<script src="js/slider-disabled-js.js"></script>

<section>
    <svg id="waveFooter" data-name="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 172">
        <path class="cls-1"
        d="M1400,5V177H0V99.37C38.91,60.92,170.35,8.22,532,100,941.22,203.87,1325.47,39.77,1400,5Z"
        transform="translate(0 -5)" /></svg>
    </section>

    <div class="productions">

        <h2 class="title-text center-text">
            <a id="productions"></a>
        Продукция</h2>

        <div id="mi-slider" class="mi-slider">


            <?php 

            $connection = include "connection.php"; 

            $query_result = mysqli_query($connection, 'SELECT products.name AS product, products.price, products.img, category.name AS category
              FROM products AS products
              LEFT JOIN category AS category ON ( products.category = category.id ) 
              ORDER BY category.id');

            if ($query_result == false)
            {
                echo 'Ошибка выполнения запроса.';
                $connection->close();
                exit();
            }  

            $categories_array = array();
            $products_array = array();

            echo "<ul>";

            $first_element = true;
            $count_prod_on_category = 0;

            while ( ($current_prod = mysqli_fetch_assoc($query_result))) {

                $current_category = $current_prod['category'];

                if ($first_element === true){
                    $categories_array[] = $current_category;
                    $first_element = false;
                }

                if (array_search($current_category, $categories_array) === false){
                    $categories_array[] = $current_category;      
                    $count_prod_on_category = 0;
                    echo "</ul>";
                    echo "<ul>";
                }

                if ($count_prod_on_category < 4) {
                    echo "<li><img src='images/".$current_prod['img']."' alt='Продукт' width='50%'><h4>".$current_prod['product']."<br>".$current_prod['price']."</h4></li>";
                }

                $count_prod_on_category++;
            };

            echo "</ul>";

            unset($current_prod);
            unset($current_category);

            $connection->close();  

            echo "<nav>";

            foreach ($categories_array as $current_category) {
             echo "<a href='#'>".$current_category."</a>"; 
         }

         echo "</nav>";
         ?>

     </div>
     <script src="js/slider.js"></script>
     <script>

        $(function() {
            $( '#mi-slider' ).catslider();
        });

    </script>

    <button id="btn-prod">Хочу!</button>

</div>

