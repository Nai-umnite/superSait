<?php 
include 'includes/header.php'; 
include 'db/db.php'; // Файл за връзка с базата данни
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
<div class="home-container">
    <h1>Добре дошли в Lilly's Boutique</h1>
    <p>Най-красивите цветя за всякакъв повод!</p>
</div>

<div class="product-section">
    <h2>Нашите Букети</h2>
    <div class="product-list">
        <?php
        $query = "SELECT * FROM bouquets";
        $result = mysqli_query($conn, $query);
        $counter = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            if ($counter % 3 == 0) {
                echo '<div class="product-row">'; 
            }
            ?>

            <div class="product">
                <a href="product.php?id=<?php echo $row['id']; ?>">
                    <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <p class="price">Цена: <?php echo $row['price']; ?> лв.</p>
                </a>
            </div>

            <?php
            $counter++;
            if ($counter % 3 == 0) {
                echo '</div>'; 
            }
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>