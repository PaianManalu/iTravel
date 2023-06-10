 <style>
     .navigation a {
         font-size: 26px;
         text-decoration: none;
         color: #0dcdc2;
         font-weight: 400;
         margin-left: 5px;
         transition: background 0.3s ease;
         position: relative;
         z-index: 1;
         padding: 7px 15px;
         /* Tambahkan border tipis putih pada menu yang aktif */
         border: 1px solid transparent;
     }

     .navigation button {
         background: none;
         border: 2px solid;
         font: inherit;
         line-height: 1;
         margin: 0.5em;
         padding: 1em 2em;
     }

     .navigation button.raise {
         --color: #0dcdc2;
         --hover: #00bab0;
     }

     button {
         color: var(--color);
         transition: 0.25s;
     }

     button:hover,
     button:focus {
         border-color: var(--hover);
         color: #fff;
     }

     .raise:hover,
     .raise:focus {
         box-shadow: 0 0.8em 0.8em -0.4em var(--hover);
         transform: translateY(-0.25em);
     }
 </style>
 <section class="header" id="home">
     <header>
         <a href="home.php" class="logo">iTravel</a>
         <nav>
             <div class="navigation">
                 <div id="button">
                     <button class="raise">
                         <a href="#home">
                             Beranda</a>
                     </button>
                     <button class="raise">
                         <a href="tb_map.php">Map</a>
                     </button>
                     <button class="raise">
                         <a href="#service">Layanan</a>
                     </button>
                     <button class="raise">
                         <a href="#about">Tentang Kami</a>
                     </button>
                     <button class="raise">
                         <a href="tb_contact.php">Kontak</a>
                     </button>
                 </div>
             </div>
         </nav>
         <script src="../js/nav.js">
             /*active navigation*/
         </script>
     </header>