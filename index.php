<?php
$category = $_GET['category'] ?? '';
$filename = "$category.json";

$news_array = [];
if (file_exists($filename)) {
    $data = file_get_contents($filename);
    $news_array = json_decode($data, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>News Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0 w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Newzly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="?category=entertainment">Entertainment</a></li>
                    <li class="nav-item"><a class="nav-link" href="?category=sports">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="?category=technology">Technology</a></li>
                    <li class="nav-item"><a class="nav-link" href="?category=business">Business</a></li>
                    <li class="nav-item"><a class="nav-link" href="?category=travel">Travel</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php if ($category == ''): ?>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://thumbs.dreamstime.com/b/bright-blue-orange-text-displays-breaking-news-digital-screen-surrounded-abstract-data-visualization-elements-386391298.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/02/01/00/56/news-1172463_1280.jpg" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://t4.ftcdn.net/jpg/05/07/18/23/360_F_507182355_1w2uDrbw4HT9hDi6rzpj2EKrxopkAxL3.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <div class="d-flex align-items-center text-light my-5">
        <hr class="flex-grow-1 border-success">
        <h2 class="px-3 m-0 text-success" id="cat">Explore News Categories</h2>
        <hr class="flex-grow-1 border-success">
    </div>






    <div class="container my-5 d-flex justify-content-center gap-4 flex-wrap">

        <!-- Card 1 -->
        <a href="?category=entertainment">
            <div class="card">
                <b></b>
                <img src="https://burst.shopifycdn.com/photos/dj-crowd.jpg?width=1000&format=pjpg&exif=0&iptc=0"
                    alt="News Image">
                <div class="content">
                    <p class="title">Entertainment<br><span>Lights, Camera, Buzz! Your Front-Row Pass to All Things
                            Entertainment!</span></p>
                    <ul class="sci">
                        <!-- <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </a>


        <!-- Card 2 -->
         <a href="?category=sports">
        <div class="card">
            <b></b>
            <img src="https://c4.wallpaperflare.com/wallpaper/971/967/737/sports-images-for-desktop-background-wallpaper-preview.jpg"
                alt="News Image">
            <div class="content">
                <p class="title">Sports<br><span>Where Passion Meets the Pitch — Your Daily Dose of Sporting
                        Glory!</span></p>
                <ul class="sci">
                    <!-- <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> -->
                </ul>
            </div>
        </div>
        </a>


        <!-- Card 3 -->
         <a href="?category=technology">
        <div class="card">
            <b></b>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/032/994/496/small/data-visualization-close-up-technology-digitalization-optimization-of-high-tech-electronics-data-mining-artificial-intelligence-business-analytics-ai-generative-photo.jpg"
                alt="News Image">
            <div class="content">
                <p class="title">Technology<br><span>Wired for the Future — Breaking the Code on All Things Tech!</span>
                </p>
                <ul class="sci">
                    <!-- <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> -->
                </ul>
            </div>
        </div>
        </a>


        <!-- Card 4 -->
         <a href="?category=business">
        <div class="card">
            <b></b>
            <img src="https://burst.shopifycdn.com/photos/business-meeting-over-coffee.jpg?width=1000&format=pjpg&exif=0&iptc=0"
                alt="News Image">
            <div class="content">
                <p class="title">Business<br><span>Markets, Money, and Moves — Your Daily Edge in the World of
                        Business!</span></p>
                <ul class="sci">
                    <!-- <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> -->
                </ul>
            </div>
        </div>
        </a>



        <!-- Card 5 -->
         <a href="?category=travel">
        <div class="card">
            <b></b>
            <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dHJhdmVsfGVufDB8fDB8fHww"
                alt="News Image">
            <div class="content">
                <p class="title">Travel<br><span>Wander the World with Us — Your Passport to the Latest in
                        Travel!</span></p>
                <ul class="sci">
                    <!-- <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> -->
                </ul>
            </div>
        </div>
        </a>

    </div>

    <?php endif; ?>

    <!-- NEWS SECTION -->
    <div class="container-fluid py-4">
        <div class="row">
            <?php foreach ($news_array as $news): ?>
            <div class="col-sm-6">
                <div class="news-card">
                    <?php if (!empty($news['image'])): ?>
                    <img src="<?php echo $news['image']; ?>" alt="">
                    <?php endif; ?>
                    <h3>
                        <?php echo $news['title']; ?>
                    </h3>
                    <p><strong>Date:</strong>
                        <?php echo $news['date']; ?> | <strong>Author:</strong>
                        <?php echo $news['author']; ?>
                    </p>
                    <p>
                        <?php echo $news['summary']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="mt-5" style="background-color: #212121; color: #ccc;">
        <div class="container-fluid px-5 py-5">
            <div class="row">

                <!-- Left Column: Branding -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase text-success">Newzly</h5>
                    <p>Your Daily Source of Trusted News.</p>
                    <div>
                        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <!-- Middle Column: Links -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase text-success">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="#about" class="text-light text-decoration-none">About</a></li>
                        <li><a href="#contact" class="text-light text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Right Column: Contact -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase text-success">Contact Us</h5>
                    <p><i class="bi bi-envelope me-2"></i> support@Newzly.com</p>
                    <p><i class="bi bi-phone me-2"></i> 0123456789</p>
                    <p><i class="bi bi-geo-alt me-2"></i> West Bengal, India</p>
                </div>

            </div>

            <hr class="border-light">
            <div class="text-center">
                <small>&copy; 2025 <span class="text-success">Newzly</span>. All Rights Reserved.</small>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script>
        // Hide broken images
        document.querySelectorAll('img').forEach(img => {
            img.onerror = function () {
                this.style.display = 'none';
            };
        });
    </script>
</body>

</html>