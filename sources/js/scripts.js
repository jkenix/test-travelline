// Ждем, пока DOM будет полностью загружен
document.addEventListener("DOMContentLoaded", function () {
  // Находим все карточки с классом .rooms-card
  document.querySelectorAll(".rooms-card").forEach((card) => {
    // Получаем кнопку внутри карточки
    const btn = card.querySelector(".rooms-card__btn");
    // Получаем содержимое карточки
    const card_content = card.querySelector(".rooms-card__content");

    // Обработчик события клика по кнопке
    btn.addEventListener("click", (e) => {
      e.stopPropagation(); // Останавливаем всплытие события
      btn.classList.add("rooms-card__btn--active"); // Добавляем класс активности к кнопке
    });

    // Обработчик события на мышь, когда она покидает карточку
    card.addEventListener("mouseleave", () => {
      // Проверяем, активна ли кнопка
      if (btn.classList.contains("rooms-card__btn--active")) {
        card.classList.add("rooms-card--active"); // Добавляем класс активности к карточке
        card_content.classList.add("rooms-card__content--active"); // Добавляем класс активности к содержимому
        btn.classList.add("rooms-card__btn--reversed"); // Меняем стиль кнопки
      }
    });

    // Обработчик события клика по самой карточке
    card.addEventListener("click", (e) => {
      // Проверяем, является ли целевой элемент частью check-pay
      if (!e.target.closest(".check-pay")) {
        // Убираем классы активности, если клик был не по элементу check-pay
        card.classList.remove("rooms-card--active");
        card_content.classList.remove("rooms-card__content--active");
        btn.classList.remove("rooms-card__btn--active");
        btn.classList.remove("rooms-card__btn--reversed");
      }
    });
  });
});
