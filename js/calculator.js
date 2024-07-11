// // Получаем элементы input
// const inputOne = document.getElementById("input-1");
// const inputTwo = document.getElementById("input-2");

// let indexSelect = "RUB-USD";
// // Константа курса
// const exchangeMap = {
//   "RUB-USD": 93.3,
//   "RUB-USDT": 93.3,
//   "RUB-EUR": 103,
//   "EUR-RUB": 106.25,
//   "USD-RUB": 96.25,
//   "USDT-RUB": 96.25,
//   "USD-USDT": 1,
//   "USDT-USD": 1,
//   "USD-USD": 1,
//   "RUB-RUB": 1,
//   "EUR-EUR": 1,
//   "USDT-USDT": 1,
// };

// let exchangeRate = 93.3;
// let currentOperation = "sell";

// // Функция для обработки изменения значения в первом input
// function handleInputChange(event) {
//   // Получаем текущее значение из первого input
//   const inputValue = parseFloat(event.target.value);

//   console.log(indexSelect, "indexSelect");

//   if (indexSelect === "USD-RUB") {
//     currentOperation = "sell";
//   }
//   if (indexSelect === "RUB-USD") {
//     currentOperation = "buy";
//   }
//   if (indexSelect === "RUB-USDT") {
//     currentOperation = "buy";
//   }
//   if (indexSelect === "RUB-EUR") {
//     currentOperation = "buy";
//   }

//   // Проверяем, что введенное значение числовое и не NaN
//   if (!isNaN(inputValue)) {
//     // Вычисляем новое значение для второго input по заданному курсу
//     if (currentOperation === "sell") {
//       const newValue = (inputValue * exchangeRate).toFixed(2); // округляем до двух знаков после запятой
//       inputTwo.value = newValue; // Устанавливаем новое значение во втором input
//     } else {
//       const newValue = (inputValue / exchangeRate).toFixed(2); // округляем до двух знаков после запятой
//       inputTwo.value = newValue; // Устанавливаем новое значение во втором input
//     }
//   } else {
//     // Если введено не числовое значение, можно выполнить другие действия или оставить поле пустым
//     inputTwo.value = ""; // Очищаем второй input, если первый input не содержит числовое значение
//   }
// }

// // Функция для обработки изменения значения во втором input
// function handleSecondInputChange(event) {
//   // Получаем текущее значение из второго input
//   const inputValue = parseFloat(event.target.value);

//   if (indexSelect === "USD-RUB") {
//     currentOperation = "buy";
//   }
//   if (indexSelect === "RUB-USD") {
//     currentOperation = "sell";
//   }
//   if (indexSelect === "RUB-USDT") {
//     currentOperation = "buy";
//   }
//   if (indexSelect === "RUB-EUR") {
//     currentOperation = "sell";
//   }

//   // Проверяем, что введенное значение числовое и не NaN
//   if (!isNaN(inputValue)) {
//     // Вычисляем новое значение для первого input по обратному курсу
//     if (currentOperation === "buy") {
//       const newValue = (inputValue / exchangeRate).toFixed(2); // округляем до двух знаков после запятой
//       inputOne.value = newValue; // Устанавливаем новое значение в первом input
//     } else {
//       const newValue = (inputValue * exchangeRate).toFixed(2); // округляем до двух знаков после запятой
//       inputOne.value = newValue; // Устанавливаем новое значение в первом input
//     }
//   } else {
//     // Если введено не числовое значение, можно выполнить другие действия или оставить поле пустым
//     inputOne.value = ""; // Очищаем первый input, если второй input не содержит числовое значение
//   }
// }

// // Привязываем обработчики событий к обоим input
// inputOne.addEventListener("input", handleInputChange);
// inputTwo.addEventListener("input", handleSecondInputChange);

// const select1 = document.getElementById("currency-select1");
// const select2 = document.getElementById("currency-select2");

// // Функция для обработки изменения выбранного option
// function handleSelectChange(event) {
//   const right = document.querySelector(".calculator-rates__right");
//   const left = document.querySelector(".calculator-rates__left");
//   const singleRight = right.querySelector(".choices__list--single");
//   const singleLeft = left.querySelector(".choices__list--single");

//   const selectedValue = event.target.value;

//   // const choiceslist2 = right.querySelector(".choices__list--dropdown");
//   // const single = right.querySelector(".choices__list--single");
//   // if (selectedValue === "USD") {
//   //   hideOptionsExcept(choiceslist2.children[0].children, ["RUB", "USDT"], single.children[0]);
//   // } else if (selectedValue === "RUB") {
//   //   hideOptionsExcept(
//   //     choiceslist2.children[0].children,
//   //     ["USD", "USDT", "EUR"],
//   //     single.children[0],
//   //   );
//   // } else {
//   //   // Показать все option, если выбрано значение, отличное от "usd"
//   //   const options = choiceslist2.children[0].children;
//   //   for (let i = 0; i < options.length; i++) {
//   //     options[i].style.display = "flex";
//   //   }
//   // }

//   const valueSelectLeft = singleLeft.children[0].dataset.value;
//   const valueSelectRight = singleRight.children[0].dataset.value;

//   indexSelect = `${valueSelectLeft}-${valueSelectRight}`;
//   exchangeRate = exchangeMap[indexSelect];

//   // Обновляем значения в inputOne и inputTwo
//   const inputValueOne = parseFloat(inputOne.value);
//   const inputValueTwo = parseFloat(inputTwo.value);

//   if (!isNaN(inputValueOne)) {
//     const newValueTwo = (inputValueOne * exchangeRate).toFixed(2);
//     inputTwo.value = newValueTwo;
//   } else {
//     inputTwo.value = "";
//   }
// }

// function hideOptionsExcept(selectElement, valueToKeep, single) {
//   let isCheck = false;
//   const options = selectElement;
//   for (let i = 0; i < options.length; i++) {
//     const option = options[i];
//     const dataValue = option.dataset.value;
//     let isValue = true;

//     valueToKeep.forEach((item) => {
//       if (item === dataValue) {
//         isValue = false;
//       }
//     });

//     if (isValue) {
//       option.style.display = "none";
//     } else {
//       option.style.display = "flex";
//       if (!isCheck) {
//         single.dataset.id = option.dataset.id;
//         single.dataset.value = option.dataset.value;
//         single.innerHTML = `
//       <img src="img/flag/${option.dataset.value.toLowerCase()}.svg" class="select-image" alt="${
//           option.dataset.value
//         }" /> ${option.dataset.value}
//       `;
//       }
//       isCheck = true;
//     }
//   }
// }

// // Навешиваем обработчик события change на оба select
// select1.addEventListener("change", handleSelectChange);
// select2.addEventListener("change", handleSelectChange);

// const reverseItem = document.querySelector(".calculator-rates__reverse");

// reverseItem.addEventListener("click", onReverse);

// function onReverse() {
//   const right = document.querySelector(".calculator-rates__right");
//   const left = document.querySelector(".calculator-rates__left");
//   const singleRight = right.querySelector(".choices__list--single");
//   const singleLeft = left.querySelector(".choices__list--single");

//   const SelectLeft = singleLeft.children[0];
//   const SelectRight = singleRight.children[0];

//   const SelectLeftId = SelectLeft.dataset.id;
//   const SelectLeftValue = SelectLeft.dataset.value;

//   SelectLeft.dataset.id = SelectRight.dataset.id;
//   SelectLeft.dataset.value = SelectRight.dataset.value;
//   SelectLeft.innerHTML = `
//       <img src="img/flag/${SelectRight.dataset.value.toLowerCase()}.svg" class="select-image" alt="${
//     SelectRight.dataset.value
//   }" /> ${SelectRight.dataset.value}
//       `;

//   SelectRight.dataset.id = SelectLeftId;
//   SelectRight.dataset.value = SelectLeftValue;
//   SelectRight.innerHTML = `
//       <img src="img/flag/${SelectLeftValue.toLowerCase()}.svg" class="select-image" alt="${SelectLeftValue}" /> ${SelectLeftValue}
//       `;

//   exchangeRate = exchangeMap[`${SelectLeft.dataset.value}-${SelectRight.dataset.value}`];
//   indexSelect = `${SelectLeft.dataset.value}-${SelectRight.dataset.value}`;
//   currentOperation = "sell";

//   console.log(exchangeRate, "exchangeRate");
// }
