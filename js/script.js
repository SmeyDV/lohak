document.addEventListener("DOMContentLoaded", () => {
  const images = [
    'pic/img1.jpg',
    'pic/img2.jpg',
    'pic/img3.jpg',
    'pic/img4.jpg',
    'pic/img5.jpg'
  ];

  let currentImageIndex = 0;
  const jumbotron = document.getElementById('jumbotron');

  function changeBackgroundImage() {
    jumbotron.style.backgroundImage = `url(${images[currentImageIndex]})`;
    currentImageIndex = (currentImageIndex + 1) % images.length;
  }

  images.forEach(src => {
    const img = new Image();
    img.src = src;
  });

  changeBackgroundImage(); 
  setInterval(changeBackgroundImage, 4000);
});
