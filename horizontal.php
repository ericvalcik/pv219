<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- my main.css -->
        <link rel="stylesheet" href="assets/css/main.css?id=<?=time();?>">

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon_32.png" sizes="32x32">

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/97720ca68f.js" crossorigin="anonymous"></script>

        <!-- my js code -->
        <script type="text/javascript" src="assets/js/main.js?id=<?=time();?>"></script>

        <!-- moving letters -->
        <script src="assets/js/anime.min.js"></script>

        <!-- tailwind -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- diable browser cache -->
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

        <title>Adorable</title>
    </head>
    <body onload="updateBadge()">
        <nav class="navbar fixed-top navbar-light bg-transparent" id="navbar" style="opacity: 0;">
            <ul class="navbar-nav ml-auto">
                <a class="btn pull-right shadow-none" href="#" type="button"><span class="inline-flex items-center justify-center px-2 py-1 text-xs transform -translate-y-1/4 translate-x-1/2 font-bold leading-none text-red-100 bg-red-600 rounded-full" id="cartbadge">0</span><i class="fas fa-shopping-cart fa-2x"></i></a>
            </ul>
        </nav>
        <div class="main bg-white-yl"><div class="container" id="main-1">
            <div class="fst-page-content" id="main1">
                <img class="center logo" src="assets/img/logo-cropped.png" style="padding-top: 35vh;" />
                <h1 class="ml16 center" id="bait-text">Scroll down to shop</h1>
            </div>
            <script>
                // Wrap every letter in a span
                var textWrapper = document.querySelector('.ml16');
                textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                anime.timeline({loop: true})
                .add({
                    targets: '.ml16 .letter',
                    opacity: [
                        {value: 0, easing: "easeInExpo", delay: (el, i) => 30 * (i+1) + 2000},
                        {value: 1, easing: "easeOutExpo", delay: 0}
                    ],
                });
            </script>
        </div></div>
        <div class="main bg-white-yl" id="main-2">
            <div class="grid grid-cols-3 divide-x divide-transparent">
                <div class="half-container center">
                    <img class="pic-half" src="assets/img/t-frontprint-front.png" onmouseover="this.src='assets/img/t-frontprint-back.png';" onmouseout="this.src='assets/img/t-frontprint-front.png';" id="tFront" />
                    <div class="row">
                        <div class="col-4 transform translate-y-1 price">699 CZK</div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="SizeFront" data-bs-toggle="dropdown" aria-expanded="false">
                                    Size
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" onclick="changeText('SizeFront', 'M')">M</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('SizeFront', 'L')">L</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('SizeFront', 'XL')">XL</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('SizeFront', 'XXL')">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-light" onclick="incrementBadge()">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="half-container center">
                    <img class="pic-half" src="assets/img/t-backprint-front.png" onmouseover="this.src='assets/img/t-backprint-back.png';" onmouseout="this.src='assets/img/t-backprint-front.png';" id="tBack" />
                    <div class="row">
                        <div class="col-4 transform translate-y-1 price">699 CZK</div>
                        <div class="col-3">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="SizeBack" data-bs-toggle="dropdown" aria-expanded="false">
                                    Size
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" onclick="changeText('SizeBack', 'M')">M</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('SizeBack', 'L')">L</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('SizeBack', 'XL')">XL</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('SizeBack', 'XXL')">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-light" onclick="incrementBadge()">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="half-container center">
                    <img class="pic-half" src="assets/img/tote.png" id="tote" />
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-4 transform translate-y-1 price">299 CZK</div>
                        <div class="col-6">
                            <button type="button" class="btn btn-light" onclick="incrementBadge()">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
