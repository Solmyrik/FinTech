document.addEventListener("DOMContentLoaded", function () {
  const selectElements = [
    document.getElementById("currency-select1"),
    document.getElementById("currency-select2"),
  ];

  // Функция для обновления изображения в опциях
  const addImagesToOptions = (selectElement) => {
    const options = selectElement.querySelectorAll("option");
    options.forEach((option) => {
      const imgSrc = option.getAttribute("data-img-src");
      if (imgSrc) {
        option.innerHTML = `<img src="${imgSrc}" class="select-image" alt="${option.text}" /> ${option.text}`;
      }
    });
  };

  // Функция для обновления изображения выбранного элемента
  const updateSelectedImage = (selectElement) => {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    const imageUrl = selectedOption.getAttribute("data-img-src");
    selectElement
      .closest(".top-calculator__select-wrapper")
      .style.setProperty("--image-url", `url(${imageUrl})`);
  };

  // Функция для обновления изображений для опций Choices.js
  const updateChoicesWithImages = (selectElement, choices) => {
    const choicesList = choices._store.choices;
    choicesList.forEach((choice) => {
      const option = selectElement.querySelector(`option[value="${choice.value}"]`);
      if (option) {
        choice.customProperties = { imgSrc: option.getAttribute("data-img-src") };
      }
    });
  };

  // Обработка первого select
  const selectElement1 = selectElements[0];
  addImagesToOptions(selectElement1);
  const choices1 = new Choices(selectElement1, { searchEnabled: false });
  updateChoicesWithImages(selectElement1, choices1);
  updateSelectedImage(selectElement1);
  selectElement1.addEventListener("change", () => updateSelectedImage(selectElement1));

  // Обработка второго select
  const selectElement2 = selectElements[1];
  addImagesToOptions(selectElement2);
  const choices2 = new Choices(selectElement2, { searchEnabled: false });
  updateChoicesWithImages(selectElement2, choices2);
  updateSelectedImage(selectElement2);
  selectElement2.addEventListener("change", () => updateSelectedImage(selectElement2));

  //calculator

  // Получаем элементы input
  const inputOne = document.getElementById("input-1");
  const inputTwo = document.getElementById("input-2");

  let indexSelect = "RUB-USD синий";
  // Константа курса
  const exchangeMap = {
    "RUB-USDT": 93.3,
    "USDT-RUB": 96.25,
    "USD синий-USDT": 1,
    "USD белый-USDT": 1,
    "USDT-USD белый": 1,
    "USDT-USD синий": 1,
  };

  let exchangeRate = 93.3;
  let currentOperation = "sell";

  // Функция для обработки изменения значения в первом input
  function handleInputChange(event) {
    // Получаем текущее значение из первого input
    let inputValue = removeNonNumeric(event.target.value, inputOne);

    onChangeCurrentOperation();

    console.log(indexSelect, "indexSelect");

    // Проверяем, что введенное значение числовое и не NaN

    // Вычисляем новое значение для второго input по заданному курсу
    if (currentOperation === "sell") {
      const newValue = (inputValue * exchangeRate).toFixed(2); // округляем до двух знаков после запятой
      inputTwo.value = newValue; // Устанавливаем новое значение во втором input
      // formatNumberInput(inputValue, inputOne);
    } else {
      const newValue = (inputValue / exchangeRate).toFixed(2); // округляем до двух знаков после запятой
      // console.log(formatNumberInput(newValue, null), "1111");
      inputTwo.value = newValue; // Устанавливаем новое значение во втором input
      // formatNumberInput(inputValue, inputOne);
    }
  }

  // Функция для обработки изменения значения во втором input
  function handleSecondInputChange(event) {
    // Получаем текущее значение из второго input
    let inputValue = removeNonNumeric(event.target.value, inputTwo);

    onChangeCurrentOperation();

    // Проверяем, что введенное значение числовое и не NaN
    if (!isNaN(inputValue)) {
      // Вычисляем новое значение для первого input по обратному курсу
      if (currentOperation === "buy") {
        const newValue = (inputValue / exchangeRate).toFixed(2); // округляем до двух знаков после запятой
        inputOne.value = newValue; // Устанавливаем новое значение в первом input
      } else {
        const newValue = (inputValue * exchangeRate).toFixed(2); // округляем до двух знаков после запятой
        inputOne.value = newValue; // Устанавливаем новое значение в первом input
      }
    } else {
      // Если введено не числовое значение, можно выполнить другие действия или оставить поле пустым
      inputOne.value = ""; // Очищаем первый input, если второй input не содержит числовое значение
    }
  }

  function onChangeCurrentOperation() {
    if (
      indexSelect === "USD белый-RUB" ||
      indexSelect === "USD синий-RUB" ||
      indexSelect === "EUR-RUB" ||
      indexSelect === "USDT-RUB"
    ) {
      currentOperation = "sell";
    }
    if (
      indexSelect === "RUB-USD белый" ||
      indexSelect === "RUB-USD синий" ||
      indexSelect === "RUB-USDT" ||
      indexSelect === "RUB-EUR"
    ) {
      currentOperation = "buy";
    }
  }

  // Привязываем обработчики событий к обоим input
  inputOne.addEventListener("input", handleInputChange);
  inputTwo.addEventListener("input", handleSecondInputChange);

  const select1 = document.getElementById("currency-select1");
  const select2 = document.getElementById("currency-select2");

  // Функция для обработки изменения выбранного option
  function handleSelectChange(event) {
    const right = document.querySelector(".calculator-rates__right");
    const left = document.querySelector(".calculator-rates__left");
    const singleRight = right.querySelector(".choices__list--single");
    const singleLeft = left.querySelector(".choices__list--single");

    const selectedValue = event.target.value;

    const valueSelectLeft = singleLeft.children[0].dataset.value;
    const valueSelectRight = singleRight.children[0].dataset.value;

    indexSelect = `${valueSelectLeft}-${valueSelectRight}`;
    exchangeRate = exchangeMap[indexSelect];

    // Обновляем значения в inputOne и inputTwo
    const inputValueOne = parseFloat(inputOne.value);
    const inputValueTwo = parseFloat(inputTwo.value);

    if (!exchangeMap[indexSelect]) {
      onChangeError(true);
      return;
    } else {
      onChangeError(false);
    }

    onChangeCurrentOperation();

    console.log("ok");
    console.log(currentOperation);

    if (currentOperation === "sell") {
      const newValue = (inputValueOne * exchangeRate).toFixed(2); // округляем до двух знаков после запятой
      inputTwo.value = newValue; // Устанавливаем новое значение во втором input
      // formatNumberInput(inputValue, inputOne);
    } else {
      const newValue = (inputValueOne / exchangeRate).toFixed(2); // округляем до двух знаков после запятой
      // console.log(formatNumberInput(newValue, null), "1111");
      inputTwo.value = newValue; // Устанавливаем новое значение во втором input
      // formatNumberInput(inputValue, inputOne);
    }

    // if (!isNaN(inputValueOne)) {
    //   const newValueTwo = (inputValueOne * exchangeRate).toFixed(2);
    //   inputTwo.value = newValueTwo;
    // } else {
    //   inputTwo.value = "";
    // }
  }

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
  //     <img src="img/flag/${option.dataset.value.toLowerCase()}.svg" class="select-image" alt="${
  //           option.dataset.value
  //         }" /> ${option.dataset.value}
  //     `;
  //       }
  //       isCheck = true;
  //     }
  //   }
  // }

  // Навешиваем обработчик события change на оба select
  select1.addEventListener("change", handleSelectChange);
  select2.addEventListener("change", handleSelectChange);

  const reverseItem = document.querySelector(".calculator-rates__reverse");

  reverseItem.addEventListener("click", onReverse);

  function onReverse() {
    const right = document.querySelector(".calculator-rates__right");
    const left = document.querySelector(".calculator-rates__left");
    const singleRight = right.querySelector(".choices__list--single");
    const singleLeft = left.querySelector(".choices__list--single");

    const SelectLeftValue = singleLeft.children[0].dataset.value;
    const SelectRightValue = singleRight.children[0].dataset.value;

    console.log(singleLeft);

    choices1.setChoiceByValue(SelectRightValue);
    choices2.setChoiceByValue(SelectLeftValue);

    updateInput();
    // handleInputChange();

    // exchangeRate = exchangeMap[`${SelectLeft.dataset.value}-${SelectRight.dataset.value}`];
    // indexSelect = `${SelectLeft.dataset.value}-${SelectRight.dataset.value}`;
    // currentOperation = "sell";

    // console.log(exchangeRate, "exchangeRate");
  }

  function updateInput() {
    const right = document.querySelector(".calculator-rates__right");
    const left = document.querySelector(".calculator-rates__left");
    const singleRight = right.querySelector(".choices__list--single");
    const singleLeft = left.querySelector(".choices__list--single");

    const valueSelectLeft = singleLeft.children[0].dataset.value;
    const valueSelectRight = singleRight.children[0].dataset.value;

    indexSelect = `${valueSelectLeft}-${valueSelectRight}`;
    exchangeRate = exchangeMap[indexSelect];

    const inputValueOne = parseFloat(inputOne.value);
    const inputValueTwo = parseFloat(inputTwo.value);

    if (!isNaN(inputValueOne)) {
      const newValueTwo = (inputValueOne * exchangeRate).toFixed(2);
      inputTwo.value = newValueTwo;
    } else {
      inputTwo.value = "";
    }

    const event = {
      target: {
        value: inputValueOne,
      },
    };

    handleInputChange(event);
  }

  // function formatNumberInput(value, inputElement) {
  //   let parts = value.split(",");
  //   parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  //   const result = parts.join(",");
  //   console.log(result, "result");
  //   if (inputElement) {
  //     inputElement.value = result;
  //   }
  //   return result;
  // }

  function removeNonNumeric(value, input) {
    value = value + "";
    const result = value.replace(/\D/g, "");
    input.value = result;
    return result;
  }

  function onChangeError(value) {
    const elementError = document.querySelector(".calculator-rates__error");
    if (value) {
      elementError.classList.add("active");
      inputOne.value = "";
      inputTwo.value = "";
    } else {
      elementError.classList.remove("active");
    }
  }
});
