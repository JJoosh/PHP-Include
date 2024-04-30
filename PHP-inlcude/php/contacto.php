
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Tarea1 Unidad3</title>
</head>
<body>

<?php
  if (!include "../php/header.php") {
    echo "Error including inicio.php file";
}
?>
  <div class="div_1200 div_title">
        <h2>
            Request now
        </h2>
    </div>
    <div class="div_1200 div_info">
        <h3>Beautifully designed, print-ready massage gift certificate</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint dignissimos odit qui explicabo omnis? Alias atque non animi earum praesentium!</p>
    </div>
    <div class="div_1200 div_form">
    <form action="" method="" name="form">
        <input type="email" placeholder="enter your email:" required>
        <input type="tel" placeholder="Enter your phone:" required>
        <select name="services" required>
            <option value="">Select services</option>
            <option value="Higt quality services">Higt quality services</option>
            <option value="Paradise atmosphere">Paradise atmosphere</option>
            <option value="Massage to any taste">Massage to any taste</option>
        </select>
        <select name="time" required>
            <option value="">Select time:</option>
            <option value="1">1 hr</option>
            <option value="2">2 hrs</option>
            <option value="3">3 hrs</option>
            <option value="4">4 hrs</option>
            <option value="5">5 hrs</option>
        </select>
        <button type="submit" onclick="validar_submit()" >Leave a Request</button>
    </form>
    <script src="../js/script.js"></script>
    </div>

<?php
  if (!include "../php/footer.php") {
    echo "Error including inicio.php file";
}
?>

</body>
</html> 
