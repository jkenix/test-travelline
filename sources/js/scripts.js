document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".rooms-card").forEach((card) => {
    const btn = card.querySelector(".rooms-card__btn");
    const card_content = card.querySelector(".rooms-card__content");

    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      btn.classList.add("rooms-card__btn--active");
    });

    card.addEventListener("mouseleave", () => {
      if (btn.classList.contains("rooms-card__btn--active")) {
        card.classList.add("rooms-card--active");
        card_content.classList.add("rooms-card__content--active");
        btn.classList.add("rooms-card__btn--reversed");
      }
    });

    card.addEventListener("click", (e) => {
      if (!e.target.closest(".check-pay")) {
        card.classList.remove("rooms-card--active");
        card_content.classList.remove("rooms-card__content--active");
        btn.classList.remove("rooms-card__btn--active");
        btn.classList.remove("rooms-card__btn--reversed");
      }
    });
  });
});
