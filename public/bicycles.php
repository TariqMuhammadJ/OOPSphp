<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>

<?php

$parser = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
$bike_array = $parser->parse();
$args = ['brand' => 'Trek', 'model' => 'Emonda', 'year' => 2017, 'gender' => 'Unisex', 'color' => 'black', 'category' => 'Road', 'weight_kg' => 1.5, 'price' => 1000.00];
$bike = new Bicycle($args);

foreach($bike_array as $bike){
  echo "<tr>";
  foreach($bike as $key => $value){
    if ($key === 'price'){
      echo "<td style='color:green'> $$value </td>";
    }
    else{
      echo "<td> $value</td>";
    }
  }
  echo "</tr>";
}
?>

      

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
