
let logIn = document.getElementById("log");
let logPage = document.getElementById("logPage");
let logedBtn = document.getElementById("logedBtn");

logIn.addEventListener("click", function () {
  logPage.style.display = "block";
});
/*slider*/
const slider = document.querySelector('.slider');
        let count = 0;

        function nextSlide() {
            count++;
            if (count >= 3) {
                count = 0;
            }
            updateSlider();
        }

        function prevSlide() {
            count--;
            if (count < 0) {
                count = 2;
            }
            updateSlider();
        }

        function updateSlider() {
            const translateValue = -count * 100;
            slider.style.transform = `translateX(${translateValue}%)`;
        }

        document.getElementById('next').addEventListener('click', nextSlide);
        document.getElementById('prev').addEventListener('click', prevSlide);
        //footer
        function changeStyle() {
          var footer = document.getElementById('myFooter');
          footer.classList.toggle('clicked');
        }

        function openMap() {
          var mapContainer = document.getElementById('map-container');
          mapContainer.style.display = 'block';

          // Set the map source with the API key when the button is clicked
          var googleMap = document.getElementById('google-map');
          googleMap.src = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14477.846414858734!2d67.0651228!3d24.8822316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f73979a5495%3A0x4c95566470a6e6f2!2sCCD%20MEDIA!5e0!3m2!1sen!2s!4v1700240098051!5m2!1sen!2s';
      }