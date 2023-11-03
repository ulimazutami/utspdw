<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
    <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>MATH-TER</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
        <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    </head>
    
    <title>Halaman Pertanyaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #f0d90b;
            text-align: center;
            padding: 10px;
        }
        nav a {
            text-decoration: none;
            color: #bcbe3c;
            margin: 10px;
            font-weight: bold;
        }
        section {
            padding: 40px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #555;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Math-ter Question</h1>
    </header>
    <nav>
        Silakan bertanya jika masih ada yang belum jelas atau ingin bertanya lebih lanjut jika ingin tahu lebih banyak!
    </nav>
    <section>
        <div class="row mrgn30">    
        <form method="POST" action="prosessubmit.php" id="contactfrm" role="form">
              <div class="col-sm-12">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter nama">
                  </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="pertanyaan">Pertanyaan</label>
                  <textarea name="pertanyaan" class="form-control" id="pertanyaan" cols="3" rows="5" placeholder="Enter your message…"></textarea>
                  <button type="submit" value="Submit" class="button">Submit</button>
                  <a href="index.php" class="button">Back</a>
                </div>
                <div class="result"></div>
              </div>
            </form>
    </form>
          </div>
        </div>
      </div>
    </section>
    </section>
</form>
    <footer>
        &copy; 2023 Math-ter
    </footer>
</body>
</html>
