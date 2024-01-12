document.addEventListener("DOMContentLoaded", function () {
  // Предположим, что у вас есть функция, которая получает баланс пользователя
  // и обновляет его в элементе с id="hotline"
  function updateBalance() {
    // Получите баланс пользователя (например, с сервера или другого источника данных)
    var userBalance = 1000; // Замените этот пример на реальное значение баланса

    // Обновите значение элемента с id="hotline"
    document.getElementById("hotline").textContent = userBalance;
  }

  // Вызовите функцию для обновления баланса при загрузке страницы
  updateBalance();
});
