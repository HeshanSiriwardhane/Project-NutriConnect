// signup form validation

document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.signup-form');

  form.addEventListener('submit', function (event) {
    // Prevent form submission
    event.preventDefault();

    // Get form values
    const fname = document.getElementById('fname').value.trim();
    const lname = document.getElementById('lname').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Validation checks
    if (fname === '') {
      alert('First name is required');
      return;
    }
    if (lname === '') {
      alert('Last name is required');
      return;
    }
    if (!validateEmail(email)) {
      alert('Please enter a valid email address');
      return;
    }
    if (password === '') {
      alert('Password is required');
      return;
    }
    if (password.length < 6) {
      alert('Password must be at least 8 characters long');
      return;
    }
    if (password !== confirmPassword) {
      alert('Passwords do not match');
      return;
    }

    // If validation passes, submit the form
    alert('Form submitted successfully!');
    form.submit();
  });

  // Email validation function
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
  }
});

let slideIndex = 0;
const slides = document.querySelectorAll(".news-slide");
const dots = document.querySelectorAll(".dot");
const wrapper = document.querySelector(".news-wrapper");

function showSlides() {
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }

  let offset = -slideIndex * 100;
  wrapper.style.transform = `translateX(${offset}%)`;

  dots.forEach(dot => dot.classList.remove("active"));
  dots[slideIndex].classList.add("active");
}


// Auto Slide Every 5 Seconds
function autoSlide() {
  slideIndex++;
  showSlides();
  setTimeout(autoSlide, 5000);
}

// Change Slide on Button Click
function changeSlide(n) {
  slideIndex += n;
  showSlides();
}

// Change Slide on Dot Click
function currentSlide(n) {
  slideIndex = n;
  showSlides();
}

// Start Slider
document.addEventListener("DOMContentLoaded", () => {
  showSlides();
  setTimeout(autoSlide, 5000);
});

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
  },

});
