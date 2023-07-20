<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sonsic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" href="/css/styles.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" style="width: 100vw; overflow-x: hidden;">
        @include('inc.notifications')

        <div class="container-fluid px-0">
            <!-- Hero -->
            <div class="row bg-light border-bottom border-dark justify-content-center" style="height: 60vh; width: 100%; overflow-x: hidden; margin: 0;">
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center px-4 py-5">
                    <img src="/imgs/Sonsic.svg" class="img-fluid" alt="Sonsic Logo - a premium augmented reality marketing company">
                    <p class="mt-3 mb-5 text-center">Boost customer engagement and drive sales with cutting-edge AR technology, offering unforgettable experiences to leave a long-lasting impression.</p>
                    <a href="#newsletter" class="btn btn-primary mx-auto" style="width: fit-content;">Captivate Your Audience</a>
                </div>
            </div>

            <div class="row d-flex justify-content-evenly px-0 mx-0 py-5 bg-dark">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <i class="bi bi-camera-fill display-1 mx-auto"></i>
                        <h5 class="card-title text-center fw-bold mb-3">Stay Relevant</h5>
                        <p class="card-text">Say goodbye to stagnant marketing materials. Sonsic's AR solutions allow you to update displayed content at any time, ensuring your marketing collateral remains fresh, up-to-date, and aligned with your evolving business goals.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <i class="bi bi-cursor-fill display-1 mx-auto"></i>
                        <h5 class="card-title text-center fw-bold mb-3">One Click Interaction</h5>
                        <p class="card-text">Engage your audience with seamless and interactive experiences. With Sonsic's AR solutions, a simple click opens up a world of captivating digital content, allowing your customers to explore, interact, and connect with your brand like never before.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <i class="bi bi-lightbulb-fill display-1 mx-auto"></i>
                        <h5 class="card-title text-center fw-bold mb-3">Enhance Customer Retention</h5>
                        <p class="card-text">With Sonsic's AR solutions, you can create memorable and interactive experiences that leave a lasting impression on your customers. By offering unique and engaging augmented reality content, you can foster customer loyalty, increase repeat business, and enhance long-term customer retention.</p>
                    </div>
                </div>
            </div>

            <div class="my-5">
                <!--Mobile-->
                <section class="container-fluid d-lg-none" style="padding: 0;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                            <img src="/imgs/demo_placeholder.png" alt="" class="w-75 ">
                        </div>
                        <div class="col-11 col-lg-6 p-3">
                            <h3 class="display-3 fw-bold text-center">Become Unforgettable</h3>
                            <p>Our cutting-edge AR technology offers unforgettable experiences that leave a lasting impression. By incorporating augmented reality into your marketing strategy, you can captivate your audience, increase user interaction time, and ultimately drive sales growth.</p>
                        </div>
                    </div>
                </section>
    
                <!--Desktop-->
                <section class="container d-none d-lg-flex justify-content-center my-5 py-5" style="height: 75vh; padding:0;">
                    <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                        <div class="position-absolute border border-dark bg-light shadow w-50 h-auto p-3 top-0 end-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                            <h3 class="display-3 fw-bold">Become Unforgettable</h3>
                            <p>Our cutting-edge AR technology offers unforgettable experiences that leave a lasting impression. By incorporating augmented reality into your marketing strategy, you can captivate your audience, increase user interaction time, and ultimately drive sales growth.</p>
                        </div>
                        <div class="position-absolute bg-success w-75 h-75 bottom-0 start-0" style="padding:0;">
                            <img src="/imgs/demo_placeholder.png" alt="" class="w-100 h-100 rounded">
                        </div>
                    </div>
                </section>
            </div>

            <div class="my-5">
                <!--Mobile-->
                <section class="container-fluid d-lg-none" style="padding: 0;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                            <img src="/imgs/demo_placeholder.png" alt="" class="w-75 ">
                        </div>
                        <div class="col-11 col-lg-6 p-3">
                            <h3 class="display-3 fw-bold text-center">Stand Out in the Market</h3>
                            <p>In today's competitive landscape, standing out from the crowd is crucial. Sonsic's premium AR solutions help your brand shine by offering unique and memorable marketing experiences. Be the talk of the town and leave a lasting impact on your customers.</p>
                        </div>
                    </div>
                </section>
    
                <!--Desktop-->
                <section class="container d-none d-lg-flex justify-content-center my-5 py-5" style="height: 75vh; padding:0;">
                    <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                        <div class="position-absolute border border-dark bg-light shadow w-50 h-auto p-3 top-0 start-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                            <h3 class="display-3 fw-bold">Stand Out in the Market</h3>
                            <p>In today's competitive landscape, standing out from the crowd is crucial. Sonsic's premium AR solutions help your brand shine by offering unique and memorable marketing experiences. Be the talk of the town and leave a lasting impact on your customers.</p>
                        </div>
                        <div class="position-absolute bg-success w-75 h-75 bottom-0 end-0" style="padding:0;">
                            <img src="/imgs/demo_placeholder.png" alt="" class="w-100 h-100 rounded">
                        </div>
                    </div>
                </section>
            </div>

            <div class="my-5">
                <!--Mobile-->
                <section class="container-fluid d-lg-none" style="padding: 0;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-6 d-flex justify-content-center mb-3">
                            <img src="/imgs/demo_placeholder.png" alt="" class="w-75 ">
                        </div>
                        <div class="col-11 col-lg-6 p-3">
                            <h3 class="display-3 fw-bold text-center">Unleash Creative Potential</h3>
                            <p>With Sonsic, you have the power to transform your marketing collateral into immersive AR experiences. Let your creativity soar as you seamlessly integrate interactive digital content into your physical materials, captivating your audience and differentiating your brand.</p>
                        </div>
                    </div>
                </section>
    
                <!--Desktop-->
                <section class="container d-none d-lg-flex justify-content-center my-5 py-5" style="height: 75vh; padding:0;">
                    <div class="row position-relative w-100" style="padding: 0; max-width: 1150px;">
                        <div class="position-absolute border border-dark bg-light shadow w-50 h-auto p-3 top-0 end-0 rounded" style="z-index: 5; background-color: rgba(7,7,7,.8)">
                            <h3 class="display-3 fw-bold">Unleash Creative Potential</h3>
                            <p>With Sonsic, you have the power to transform your marketing collateral into immersive AR experiences. Let your creativity soar as you seamlessly integrate interactive digital content into your physical materials, captivating your audience and differentiating your brand.</p>
                        </div>
                        <div class="position-absolute bg-success w-75 h-75 bottom-0 start-0" style="padding:0;">
                            <img src="/imgs/demo_placeholder.png" alt="" class="w-100 h-100 rounded">
                        </div>
                    </div>
                </section>
            </div>

            <div class="row bg-dark py-5 px-0 mx-0 d-flex justify-content-center" style="min-height: 25vh;">
                <div class="col-10 text-white d-flex flex-column justify-content-center">
                    <p class="text-center fs-3">Experience the future of marketing with Sonsic and unlock unparalleled interactivity, enhanced brand engagement, and unrivaled success.</p>
                    <p class="text-center fs-3">Join the AR revolution and be at the forefront of innovation.</p>
                </div>
            </div>

            <div class="container my-5 py-5">
                <div class="row mb-5">
                    <div class="col-12 col-md-6 px-5 d-flex flex-column justify-content-center mb-3">
                        <div class="w-auto">
                            <h3 class="fw-bold">Bring Your Business Card</h3>
                            <ol class="list-group">
                                <li class="mb-2">Upload your current business card</li>
                                <li class="mb-2">Position the QR code placeholder where you'd like it to be printed</li>
                                <li class="mb-2">We'll handle the activation, processing, and shipping so you can sit back and relax</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="/imgs/bc_standard_diagram.png" alt="" class="img-fluid" style="max-height: 500px;">
                    </div>
                </div>
                <div class="row d-flex flex-md-row-reverse mb-5">
                    <div class="col-12 col-md-6 px-5 d-flex flex-column justify-content-center mb-3">
                        <div class="w-auto">
                            <h3 class="fw-bold">Become a Partner</h3>
                            <p>We understand that every business is unique. That's why we offer a personalized consultation and custom design package. Our expert team will guide you through the process, whether you need assistance designing business cards, restaurant menus, or any other marketing materials tailored to your specific needs.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <img src="/imgs/partner_placeholder.jpg" alt="" class="img-fluid" style="max-height: 500px;">
                    </div>
                </div>
            </div>

            <div class="row py-5 mt-5 bg-dark mx-0 px-0">
                <div class="col-12 text-white px-5">
                    <p class="fs-4 text-center">Together, let's transform your business and elevate your 
                        marketing to new heights with augmented reality.</p>
                    <p class="fs-4 text-center mb-5">Signup for a chance to get a free demo product</p>
                    <form action="/signup" method="POST" id="newsletter">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-4 mb-3">
                                <label for="first_name">First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="First Name...">
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <label for="last_name">Last Name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Last Name...">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex justify-content-center">
                            <div class="col-12 col-md-8 col-lg-6">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email...">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col text-center">
                                <input type="submit" value="Enter Now" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <footer class="row px-0 mx-0 py-3 bg-dark border-top justify-content-between">
                <div class="col-12 col-md-6 px-3">
                    <p class="fw-bold fs-3 text-white mb-0">Sonsic</p>
                </div>
                <div class="col-12 col-md-6 px-5">
                    <ul class="d-flex gap-3 p-0 justify-content-end mb-0">
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-twitter fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-facebook fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-instagram fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-tiktok fs-4"></i></a></li>
                    </ul>
                </div>
            </footer>

    </body>
</html>
