<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sample_styles.css">
    <link rel="stylesheet" href="button.css">
    <title>Home</title>
</head>
<body style = "margin: 0;">
    <!-- HEADER -->
    <div class = "header-bg">
        <div class="header-container">
            <div class="header-container-title">
                <h1><a href = "sample.php">Snezhnaya Hearth Orphanage</a></h1>
            </div>
            <div class="header-container-menu">
                <ul><a href = "sample.php">Home</a></ul>
                <ul><a href = "about.html">About</a></ul>
                <ul><a href = "services.html">Services</a></ul>
                <ul><a href = "articles.html">Discussions</a></ul>
                <ul><a href = "gallery.html">Gallery</a></ul>
                <ul><a href = "contact.html">Contact</a></ul>
            </div>
        </div>
        <div class="secondary-header">
            <div style = "width: 100%; height: 100%; margin-bottom: -80px; display: flex; justify-content: center; align-items: center;">
                <h1>House of Hearth</h1>
            </div>
            <div style = "margin-bottom: 50px;">
                <div class = "underline"></div>
            </div>
            <div style = "display: flex; justify-content: center; align-items: center;">
                <button data-modal-target="#modal" class="fancy">
                    <span class="top-key"></span>
                    <span class="text">Support the Cause</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </button>
            </div>
        </div>
    </div>
        <div class="modal" id="modal">
            <div class="modal-header">
                <div class="title">Support the Cause!</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <div class="modal-body-1">
                        <h1>Donate Now!</h1>
                        <p>Howdy there! Please consider donating to the Orphanage. It will be of great help to us in keeping the children alive.</p>
                        <br>
                        <p>Thank you for considering donating!</p>
                    </div>
                    <div class="modal-body-2">
                        <h2>Enter Amount to Donate</h2>
                            <form action="donate.php" method="POST">
                                <label for="amount">Amount:</label><br>
                                <input type="number" id="amount" name="amount" required><br><br>
                            </form>
                    </div>
                </div>
                <div style="display: flex; justify-content: flex-end;">
                    <span style="background-color: rgb(133,114,81);">
                        <input type="submit" value="Proceed" data-modal-target = "#thanks" class="modal-button">
                    </span>
                </div>
        </div>
    </div>
    </div>
    <!-- Second Modal (Initially Hidden) -->
        <div class="modal" id="thanks">
            <div class="modal-header">
                <div class="title">Thank You!</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-body-1">
                    <p>Thank you for Donating! It means the world to us!</p>
                </div>
            </div>
        </div>
    <div id="overlay"></div>
    <!-- BODY: SECTION 1-->
    <div class="body-poster">
        <center>
            <figure>
                <img src="img/poster.jpg" alt="Family Poster" style="width:80%">
                <figcaption id="poster-caption">Forming a Bond of Life with every child with no Blood Debt incurred.</figcaption>
              </figure>
              <hr> 
        </center>
    </div>

    <!--BODY: SERVICE-->
    <div class="body-service">
        <div style="max-width: 42em;">
            <p id="service-title">A Service for All</p>
            <p>Beyond housing, we cater to counseling, adoption, and training for each child housed. Educated in all matters, wordly or not, our children are sure to meet expectations.
                <br><br> Each child carries the pride of The Knave. We guarantee that our products will be of utmost quality.
            </p>
            <a href="services.html"><button style="float: right; border-radius: 5px;" class = "service-button">Learn More</button></a>
        </div>
        <div class="body-service-img">
            <img src="img/charlotte.jpg" alt="Charlotte" style="width: 464px; height: 260px; object-fit: cover; object-position: 100% 0;">
        </div>
    </div>

    <!--BODY: ARTICLES-->
    <div class="body-articles">
                <div class="body-articles-container" >
                    <div class = "body-articles-figure-container">
                        <div class="body-articles-figure">
                            <figure>
                                <img src="https://i.insider.com/5b841ce8672e162061284559?width=700" alt="Orphanage" style="width: 260px; height: 260px; object-fit: cover;">
                                <a href="articles.html?entry=1" style="text-decoration: none;"><figcaption>State of Orphanages</figcaption></a>
                            </figure>
                        </div>
                        <div class="body-articles-figure">
                            <figure>
                                <img src="https://plus.unsplash.com/premium_photo-1681998458979-44c609b22c1b?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="teen" style="width: 260px; height: 260px; object-fit: cover; object-position: 80% 0;">
                                <a href="articles.html?entry=2" style="text-decoration: none;"><figcaption>Relevance of Age</figcaption></a>
                            </figure>
                        </div>
                        <div class="body-articles-figure">
                            <figure>
                                <img src="https://images.unsplash.com/photo-1617817376017-3de702f0c35f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="children around a table" style="width: 260px; height: 260px; object-fit: cover;">
                                <a href="articles.html?=entry3" style="text-decoration: none;"><figcaption>Dealing with Children</figcaption></a>
                            </figure>
                        </div>
                        <div class="body-articles-figure" >
                            <figure>
                                <img src="https://images.unsplash.com/photo-1576696058573-12b47c49559e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="family on a beach" style="width: 260px; height: 260px; object-fit: cover;">
                                <a href="articles.html?entry=4" style="text-decoration: none;"><figcaption>Existing and New Families</figcaption></a>
                                <div style=" display: flex ;">
                                    <button class="articles-button"><a href="articles.html" style="text-decoration: none; color: #FFFAF1;">Read More</a></button>
                                </div>
                            </figure>
                            
                        </div>
                        
                    </div>
                </div>
        <center>
            <hr style="margin-top: 80px;">
        </center>
    </div>

    <!--BODY: OFFERINGS-->
    <div>
        <div class="body-offerings">
            <!--Carousel-->
            <div style = "width: 29em">
                <div class = carousel>
                    <!--
                    object-fit  and object-position are only  necessary if the image
                    exceeds the maximum size, remove it otherwise lol
                    -->
                    <div class = "slide">
                        <img src = "Images/kid1.jpg" style = "width:100%; object-fit: cover; object-position: 0% 20%;">
                    </div>
                    <div class = "slide">
                        <img src = "Images/kid2.jpg" style = "width:100%; object-fit: cover;">
                    </div>
                    <div class = "slide">
                        <img src = "Images/kid3.jpg" style = "width:100%; object-fit: cover; object-position: 35% 0%;">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>

            <div style="max-width: 42em">
                <p id="offerings-title">Check out our offerings!</p>
                <p>
                There are three categories for each child, each with their own benefits. For most people, the Basic children are enough for menial tasks, however we do acknowledge different needs for different families, as such we offer higher quality children separated by their tier. Reach out to us for more details.
                </p>
            </div>
        </div>
        <hr>
    </div>

    <div style=" height:5em; background-color: rgb(130,113,83); display: flex; justify-content: center; align-content: center;">
        <div style="align-content: center" >
            <button class="pulling-button">
                <a href="contact.html" style="text-decoration: none; color: #827153;">Start Pulling</a>
              </button>
        </div>
    </div>
    <!--FOOTER-->
    <footer style="display: inline-flex ; align-items: flex-end ; align-self: flex-end; background-color: bisque; width: 100%; left : 0 ; bottom: 0; background-color: antiquewhite;  ;display: flex; justify-content: center ;">

        <div style="display: flex; justify-content: center; width: 80vw; ">
            <div style="display: flex; width: 65rem; justify-content: space-between;">
            <div style=" ">
                <h2>
                    THE HOUSE OF HEARTH
                </h2>
                <h5>
                    A SNEZHNAYAN COMPANY
                </h5>
            </div>
            <div style="display: flex; justify-content: space-between; ; align-items: center; flex-wrap: wrap; ">
                <a href="#" class="social twitter">
                    <svg height="1em" viewBox="0 0 512 512">
                      <path
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                      ></path>
                    </svg>
                  </a>
                  <a href="#" class="social facebook">  
                    <svg height="1em" viewBox="0 0 320 512">                    
                           <path
                         d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                          </path>
                          </svg>
                        </a>

                        <a href="#" class="social instagram"
             ><svg height="1em" viewBox="0 0 448 512">
       <path
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
             ></path></svg></a>
                
            </div>
        </div>
     </div>
    </footer>
    <script src="script/index.js"></script>
</body>
</html>