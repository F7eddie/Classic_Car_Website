<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <header>
    <link rel="stylesheet" href="../style.css">
    <div class="container navbar">
      <div class="logo">Old Timer Motors Co.</div>
      <ul class="nav-links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../backbone/hire.php">Hire</a></li>
        <li><a href="../backbone/buy.php">Buy</a></li>
        <li><a href="../backbone/testimonials.php">Testimonials</a></li>
        <li><a href="../backbone/contact.php">Contact</a></li>
        <li><a href="../backbone/login.php">Account</a></li>
      </ul>
    </div>
  </header>
  
  <div class="product-page">

  <div class="gallery">

    <img id="mainImage"
      src="../Images/chevrolet_1.jpg"
      class="main-image">

    <div class="thumbnails">
      <img src="../Images/chevrolet_1.jpg" onclick="changeImage(this)">
      <img src="../Images/chevrolet_2.jpg" onclick="changeImage(this)">
      <img src="../Images/chevrolet_3.jpg" onclick="changeImage(this)">
      <img src="../Images/chevrolet_4.jpg" onclick="changeImage(this)">
    </div>

  </div>

  <div class="car-info">
    <h1>1949 Chevrolet V8 Pick-up Truck · MUSSEL</h1>
    <p class="price">Hire from £185/day</p>

    <p>
      Loud heavy chunk of metal to make heads turn!
    </p>
    <p>
      This 1948 Chevrolet 3100 stepside pickup has a 5.8 litre chevy small block v8 fitted for pure power and sound.
    </p>
    <a href="../backbone/contact.php" class="btn btn-primary"> CHECK AVAILABILITY!</a>
    
  </div>

</div>

  
<footer>
  <div class="container">
    <p>2026 Old Timer Motors Co. — Classic Car Hire & Sales</p>
  </div>
</footer>

<script>
  function changeImage(image) {
    document.getElementById("mainImage").src = image.src;
  }
</script>
