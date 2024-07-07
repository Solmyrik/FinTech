const reviewsItems = document.querySelectorAll(".reviews__item");
const reviewsButton = document.querySelector(".reviews__button");

if (reviewsItems.length) {
  if (reviewsItems.length < 4) {
    reviewsButton.style.display = "none";
  } else {
    for (let i = 4; i < reviewsItems.length; i++) {
      reviewsItems[i].style.display = "none";
    }
  }

  reviewsButton.addEventListener("click", (e) => {
    reviewsItems.forEach((item) => {
      item.style.display = "flex";
    });
    reviewsButton.style.display = "none";
  });
}
