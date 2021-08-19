<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- my main.css -->
        <link rel="stylesheet" href="assets/css/main-vertical.css?id=<?=time();?>">

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon_32.png" sizes="32x32">

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/97720ca68f.js" crossorigin="anonymous"></script>

        <!-- my js code -->
        <script type="text/javascript" src="assets/js/main-vertical.js?id=<?=time();?>"></script>

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
        <nav class="navbar fixed-top navbar-light" id="navbar">
            <ul class="navbar-nav ml-auto">
            <a class="btn pull-right shadow-none" href="#" type="button"><span class="inline-flex items-center justify-center px-2 py-1 text-xs transform -translate-y-1/4 transform translate-x-1/2 font-bold leading-none text-red-100 bg-red-600 rounded-full" id="cartbadge">0</span><i class="fas fa-shopping-cart fa-2x"></i></a>
            </ul>
        </nav>
        <div class="main bg-white-yl"><div class="container" id="main-1">
            <div class="fst-page-content">
                <img class="center logo" src="assets/img/logo-cropped.png" />
                <h1 class="ml16 center">Scroll down to shop</h1>
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
        <div class="main bg-white-lil"><div class="container" id="main-2">
            <div class="grid grid-cols-2 divide-gray-500">
                <div class="half-container">
                    <img class="pic-half" src="assets/img/t-frontprint-front.png" onmouseover="this.src='assets/img/t-frontprint-back.png';" onmouseout="this.src='assets/img/t-frontprint-front.png';" id="tFront" />
                </div>
                <div class="half-container text-snd-page">
                    <h1>Frontprint T-shirt</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur andipiscing elit. Vivamus quis dolor quis urna sodales faucibus non a tortor. Nunc lobortis sapien vitae eros rutrum venenatis. Ut id tellus id risus euismod lacinia. Vestibulum iaculis libero a odio rutrum rhoncus. Donec interdum dignissim sem vitae viverra. Integer justo diam, condimentum quis luctus bibendum, tincidunt eget odio.</p>
                    <p><b>699 CZK</b></p>
                    <div class="row">
                        <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="SizeFront" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="col-6"></div>
                        <div class="col-4" style="text-align: right;">
                            <button type="button" class="btn btn-secondary" onclick="incrementBadge()">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
        <div class="main bg-white-yl"><div class="container" id="main-3">
            <div class="grid grid-cols-2 divide-gray-500">
                <div class="half-container text-snd-page">
                    <h1 style="text-align: right;">Backprint T-shirt</h1>
                    <p  style="text-align: right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis dolor quis urna sodales faucibus non a tortor. Nunc lobortis sapien vitae eros rutrum venenatis. Ut id tellus id risus euismod lacinia. Vestibulum iaculis libero a odio rutrum rhoncus. Donec interdum dignissim sem vitae viverra. Integer justo diam, condimentum quis luctus bibendum, tincidunt eget odio.</p>
                    <p  style="text-align: right;"><b>699 CZK</b></p>
                    <div class="row">
                        <div class="col-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="sizeBack" data-bs-toggle="dropdown" aria-expanded="false">
                                    Size
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" onclick="changeText('sizeBack', 'M')">M</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('sizeBack', 'L')">L</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('sizeBack', 'XL')">XL</a></li>
                                    <li><a class="dropdown-item" onclick="changeText('sizeBack', 'XXL')">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-4" style="text-align: right;">
                            <button type="button" class="btn btn-secondary" onclick="incrementBadge()">Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="half-container">
                    <img class="pic-half" src="assets/img/t-backprint-front.png" onmouseover="this.src='assets/img/t-backprint-back.png';" onmouseout="this.src='assets/img/t-backprint-front.png';" id="tBack" />
                </div>
            </div>
        </div></div>
        <div class="main bg-white-lil"><div class="container" id="main-4">
            <div class="grid grid-cols-2 divide-gray-500">
                <div class="half-container">
                    <img class="pic-half" src="assets/img/tote.png" id="tote" />
                </div>
                <div class="half-container text-snd-page">
                    <h1>Tote Bag</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis dolor quis urna sodales faucibus non a tortor. Nunc lobortis sapien vitae eros rutrum venenatis. Ut id tellus id risus euismod lacinia. Vestibulum iaculis libero a odio rutrum rhoncus. Donec interdum dignissim sem vitae viverra. Integer justo diam, condimentum quis luctus bibendum, tincidunt eget odio.</p>
                    <p><b>299 CZK</b></p>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-secondary" onclick="incrementBadge()">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
    </body>
</html>
