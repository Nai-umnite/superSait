<?php 
include 'includes/header.php'; 
include 'db/db.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Взимаме ID-то и го правим цяло число за защита
    $query = "SELECT * FROM bouquets WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $bouquet = mysqli_fetch_assoc($result);

    if (!$bouquet) {
        echo "<p>Букетът не е намерен.</p>";
        include 'includes/footer.php';
        exit();
    }
} else {
    echo "<p>Грешка: Няма избран букет.</p>";
    include 'includes/footer.php';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="product-details">
    <img src="images/<?php echo $bouquet['image']; ?>" alt="<?php echo $bouquet['name']; ?>">
    <h2><?php echo $bouquet['name']; ?></h2>
    <p><?php echo $bouquet['description']; ?></p>
    <p class="price">Цена: <?php echo $bouquet['price']; ?> лв.</p>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>

