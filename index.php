<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Sembunyikan radio button */
        input[type="radio"] {
            display: none;
        }

        /* Tambahkan gaya ikon bintang menggunakan label */
        .rating label {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
        }

        /* Berikan tampilan ikon bintang terpilih */
        .rating input[type="radio"]:checked~label {
            color: gold;
        }
    </style>
</head>

<body>

    <div class="rating">
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1" class="fa fa-star"></label>
    </div>

</body>

</html>