document.addEventListener("DOMContentLoaded", () => {
  const images = [
    'https://t4.ftcdn.net/jpg/01/02/53/49/360_F_102534906_tiedDFfDfgpIRwF7dPSU4zV2NvDtjh0S.jpg',
    'https://www.thefairtradevillage.com/wp-content/uploads/2019/06/FTV-Ceramics-Product_AHA-7323.jpg',
    'https://www.aptouring.com.au/-/media/travelmarvel-responsive-website/people/people-16-9/gi-t-as-cambodia-apsara-dancers-5177220-d-16-9.jpg',
    'https://satcha-handicraft.com/wp-content/uploads/2022/12/IMG_6059-HDR.jpg',
    'https://satcha-handicraft.com/wp-content/uploads/2022/12/IMG_6281-HDR.jpg'
  ];

  let currentImageIndex = 0;
  const jumbotron = document.getElementById('jumbotron');

  function preloadImages(callback) {
    let loadedImages = 0;
    images.forEach((src) => {
      const img = new Image();
      img.src = src;
      img.onload = () => {
        loadedImages++;
        if (loadedImages === images.length) {
          callback();
        }
      };
    });
  }

  function changeBackgroundImage() {
    jumbotron.style.backgroundImage = `url(${images[currentImageIndex]})`;
    currentImageIndex = (currentImageIndex + 1) % images.length;
  }

  preloadImages(() => {
    changeBackgroundImage(); // Set the initial background image immediately
    setInterval(changeBackgroundImage, 5000); // Change background image every 5 seconds
  });
});
