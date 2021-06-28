<!-- This is a lightbox (modal gallery) of the 4 images to demonstrate the FSx drive I set up -->
<style>     /* This is all the CSS involved */
* {
  box-sizing: border-box;
}

.row-Modal > .column-Modal {
  padding: 0 8px;
}

.row-Modal:after {
  content: "";
  display: table;
  clear: both;
}

.column-Modal {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close-Modal {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close-Modal:hover,
.close-Modal:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides-Modal {
  display: none;
}

.cursor-Modal {
  cursor: pointer;
}

/* Next & previous buttons */
.prev-Modal,
.next-Modal {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next-Modal {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev-Modal:hover,
.next-Modal:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext-Modal {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container-Modal {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo-Modal {
  opacity: 0.6;
}

.active-Modal,
.demo-Modal:hover {
  opacity: 1;
}

img.hover-shadow-Modal {
  transition: 0.3s;
}

.hover-shadow-Modal:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>


<div class="row-Modal">
  <div class="column-Modal">
    <img src="../../assets/AWS FSx/1 - no drive.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column-Modal">
    <img src="../../assets/AWS FSx/2 - mapping drive.png" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column-Modal">
    <img src="../../assets/AWS FSx/3 - drive mapped.png" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column-Modal">
    <img src="../../assets/AWS FSx/4 - test file displayed.png" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides-Modal">
      <div class="numbertext-Modal">1 / 4</div>
      <img src="../../assets/AWS FSx/1 - no drive.png" style="width:100%">
    </div>

    <div class="mySlides-Modal">
      <div class="numbertext-Modal">2 / 4</div>
      <img src="../../assets/AWS FSx/2 - mapping drive.png" style="width:100%">
    </div>

    <div class="mySlides-Modal">
      <div class="numbertext-Modal">3 / 4</div>
      <img src="../../assets/AWS FSx/3 - drive mapped.png" style="width:100%">
    </div>
    
    <div class="mySlides-Modal">
      <div class="numbertext-Modal">4 / 4</div>
      <img src="../../assets/AWS FSx/4 - test file displayed.png" style="width:100%">
    </div>
    
    <a class="prev-Modal" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next-Modal" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container-Modal">
      <p id="caption"></p>
    </div>


    <div class="column-Modal">
      <img class="demo cursor" src="../../assets/AWS FSx/1 - no drive.png" style="width:100%" onclick="currentSlide(1)" alt="No external drive is mapped">
    </div>
    <div class="column-Modal">
      <img class="demo cursor" src="../../assets/AWS FSx/2 - mapping drive.png" style="width:100%" onclick="currentSlide(2)" alt="Mapping to my FSx drive from the EC2 instance">
    </div>
    <div class="column-Modal">
      <img class="demo cursor" src="../../assets/AWS FSx/3 - drive mapped.png" style="width:100%" onclick="currentSlide(3)" alt="The external drive is now mapped">
    </div>
    <div class="column-Modal">
      <img class="demo cursor" src="../../assets/AWS FSx/4 - test file displayed.png" style="width:100%" onclick="currentSlide(4)" alt="Test file saved in the FSx drive can now be accessed">
    </div>
  </div>
</div>


<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides-Modal");
  var dots = document.getElementsByClassName("demo-Modal");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-Modal", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active-Modal";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>