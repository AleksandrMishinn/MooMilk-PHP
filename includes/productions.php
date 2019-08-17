
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

        <table class="category-table">
            <tr>

 <?php 

$connection = include "connection.php"; 

$query_result = mysqli_query($connection, 'SELECT products.name AS product, products.price, products.img, categories.name AS category
  FROM products AS products
  LEFT JOIN categories AS categories ON ( products.category = categories.id ) 
  ORDER BY categories.id');

if ($query_result == false)
{
    echo 'Ошибка выполнения запроса.';
    $connection->close();
    exit();
}  

$category_array = array();

while ( ($current_prod = mysqli_fetch_assoc($query_result))) {

    $current_category = $current_prod['category'];

    if(array_search($current_category, $category_array) === false){
        $category_array[] = $current_category; 
?>

<td><a href=""><?php echo $current_category ?></a></td> 

        <?php 
    };}
$connection->close();
?>

            </tr>
        </table>

        <table class="productions-table">
            <tr>
                <td>
                    <div><img src="images/sour cream.png" width="60%" alt="Продукт"></div>
                </td>
                <td>
                    <div><img src="images/sour cream.png" width="60%" alt="Продукт"></div>
                </td>
                <td>
                    <div><img src="images/sour cream.png" width="60%" alt="Продукт"></div>
                </td>
                <td>
                    <div><img src="images/sour cream.png" width="60%" alt="Продукт"></div>
                </td>
            </tr>
            <tr>
                <td>Молоко козье</td>
                <td>Сметана 15%</td>
                <td>Кефир</td>
                <td>Молоко коровье</td>
            </tr>
            <tr class="price">
                <td>280 р</td>
                <td>210 р</td>
                <td>240 р</td>
                <td>260 р</td>
            </tr>
        </table>

        <button id="btn-prod">Показать все</button>

    </div>
