<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link href="./assets/aos_styles/aos.css" rel="stylesheet"> 
    <link rel="stylesheet" href="./style.css">
    <title>AOS animation</title>
</head>
<body>
    <header class="main-header">
        <h1><span>My Partner Megha is </span> <span id="partnerResponse"></span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quas.</p>
    </header>
    <main class="container">
        <section class="card">
            <img src="./assets/img/paint-1.png" alt="">
            <div>
                <h3> Painting One</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos sapiente, quasi, in illum iusto voluptatem natus ut dolorem voluptas ipsum tempore amet laboriosam optio placeat. Itaque sunt sit asperiores ea!</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </section>
        <section class="card" data-aos="fade-left">
            <img src="./assets/img/paint-2.png" alt="">
            <div>
                <h3> Painting Two</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos sapiente, quasi, in illum iusto voluptatem natus ut dolorem voluptas ipsum tempore amet laboriosam optio placeat. Itaque sunt sit asperiores ea!</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </section>
        <section class="card" data-aos="fade-right">
            <img src="./assets/img/paint-3.png" alt="">
            <div>
                <h3> Painting Three</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos sapiente, quasi, in illum iusto voluptatem natus ut dolorem voluptas ipsum tempore amet laboriosam optio placeat. Itaque sunt sit asperiores ea!</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </section>
        <section class="card" data-aos="fade-left">
            <img src="./assets/img/paint-4.png" alt="">
            <div>
                <h3> Painting Four</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos sapiente, quasi, in illum iusto voluptatem natus ut dolorem voluptas ipsum tempore amet laboriosam optio placeat. Itaque sunt sit asperiores ea!</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </section>
        <section class="card" data-aos="fade-right">
            <img src="./assets/img/paint-5.png" alt="">
            <div>
                <h3> Painting Five</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos sapiente, quasi, in illum iusto voluptatem natus ut dolorem voluptas ipsum tempore amet laboriosam optio placeat. Itaque sunt sit asperiores ea!</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </section>
    </main>
    <script src="./assets/aos_styles/aos.js"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script defer>
       let partnerResponse =  confirm("Megha, Sweetie are you ok?");
       document.getElementById("partnerResponse").innerHTML = partnerResponse ? "Happy With Me 😇" : "Not Happy With Me 😓";
    </script>
    <script>
        AOS.init({
            offset:300,
            duration:600
        });
    </script>
</body>
</html>
