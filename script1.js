
const images = document.querySelectorAll('.image-slider img');
let currentIndex = 0;

function showImage(index) {
    images.forEach((img, i) => {
        img.classList.remove('active');
        if (i === index) {
            img.classList.add('active');
        }
    });
}

function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
}

document.getElementById('nextBtn').addEventListener('click', nextImage);
document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
});

// Cambiar automáticamente la imagen cada 3 segundos
setInterval(nextImage, 5000);
