async function getCryptoPrices() {
  const url =
    "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum&vs_currencies=usd";

  try {
    const response = await fetch(url);
    if (response.ok) {
      const prices = await response.json();
      const bitcoinPrice = prices.bitcoin.usd;
      const ethereumPrice = prices.ethereum.usd;
      return { bitcoinPrice, ethereumPrice };
    } else {
      throw new Error("Error fetching data from CoinGecko API");
    }
  } catch (error) {
    console.error(error);
  }
}

async function getExchangeRates() {
  const url = "https://api.exchangerate-api.com/v4/latest/USD";

  try {
    const response = await fetch(url);
    if (response.ok) {
      const data = await response.json();
      const usdRubRate = data.rates.RUB;
      const usdCnyRate = data.rates.CNY;
      const usdEurRate = data.rates.EUR;
      const cnyRubRate = usdRubRate / usdCnyRate;
      const eurRubRate = usdRubRate / usdEurRate;
      return { usdRubRate, cnyRubRate, eurRubRate };
    } else {
      throw new Error("Error fetching data from ExchangeRate-API");
    }
  } catch (error) {
    console.error(error);
  }
}

async function getAllRates() {
  try {
    const { bitcoinPrice, ethereumPrice } = await getCryptoPrices();
    const { usdRubRate, cnyRubRate, eurRubRate } = await getExchangeRates();

    const usdElement = document.getElementById("ch-usd");
    const eurElement = document.getElementById("ch-eur");
    const cnyElement = document.getElementById("ch-cny");
    const btcElement = document.getElementById("ch-btc");
    const ethElement = document.getElementById("ch-eth");

    usdElement.textContent = usdRubRate.toFixed(2);
    eurElement.textContent = eurRubRate.toFixed(2);
    cnyElement.textContent = cnyRubRate.toFixed(2);
    btcElement.textContent = bitcoinPrice.toFixed(2);
    ethElement.textContent = ethereumPrice.toFixed(2);
  } catch (error) {
    console.error("Error fetching rates:", error);
  }
}

getAllRates();
