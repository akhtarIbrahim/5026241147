<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day4_tugas</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    />

    <!-- Bootstrap 4 -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"/>

    <!-- CSS -->
    <style>

        * {
        font-family: "Roboto", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
        font-variation-settings: "wdth" 100;
        }

        html {
        background-color:#fbfbfd
        }

        h2 {
        font-size: 1.1rem;
        font-weight: bold;
        margin: 0.8rem 0;
        }

        .item-icon {
        width: 2.5rem;
        margin-bottom: 8px;
        }

        .text-perwinkle {
        color: #97a0c7;
        }

        .font-weight-semibold {
        font-weight: 500;
        }

        .item-box {
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 16px;
        transition: all 0.3s ease;
        background-color: #fff;
        }

        .item-box:hover {
        border-color: #6366f1;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transform: translateY(-3px);
        }

    </style>

</head>


<body>

    <div class="container vh-100">
        <div class="row vh-100 align-items-center">

            <!-- Left Section -->
            <div class="col-12 col-md-6 align-self-center pr-md-4 mb-4 mb-md-0">

                <!-- Judul -->
                <div class="row mb-5">
                    <h1 class="mb-4 font-weight-bold">
                        Design & Build Your Own Landing Pages
                    </h1>
                    <p class="text-perwinkle font-weight-semibold">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus
                    </p>
                    <p class="text-perwinkle font-weight-semibold">
                    mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                    quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>

                <!-- Item Kiri -->
                <div class="row">

                    <!-- Col atas -->
                    <div class="col-12 col-md-6 px-0 mb-3 mb-md-0 pr-md-3">
                        <div class="item-box">
                            <img class="item-icon" src="asset/day4_icon.png" alt="Paper icon" />
                            <h2>Title Goes Here</h2>
                            <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            </p>
                        </div>
                    </div>

                    <!-- Col Bawah -->
                    <div class="col-12 col-md-6 px-0 pl-md-3">
                        <div class="item-box">
                            <img class="item-icon" src="asset/day4_icon.png" alt="Paper icon" />
                            <h2>Title Goes Here</h2>
                            <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Iem kanan -->
                <div class="row">

                        <!-- Col atas -->
                    <div class="col-12 col-md-6 px-0 mb-3 mb-md-0 pr-md-3">
                        <div class="item-box">
                            <img class="item-icon" src="asset/day4_icon.png" alt="Paper icon" />
                            <h2>Title Goes Here</h2>
                            <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            </p>
                        </div>
                    </div>

                        <!-- Col bawah -->
                    <div class="col-12 col-md-6 px-0 pl-md-3">
                        <div class="item-box">
                            <img class="item-icon" src="asset/day4_icon.png" alt="Paper icon" />
                            <h2>Title Goes Here</h2>
                            <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-6 d-flex justify-content-end align-items-center">
                <img class="img-fluid"
                src="asset/day4_Vert.png"
                alt="Samsung">
            </div>
        </div>
    </div>

</body>

</html>
