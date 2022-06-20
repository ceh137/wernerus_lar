const minMeters = 0.01, // Минимальное значение обьема груза
    minKg = 0.5, // Минимальное значение веса груза
    maxMeters = 80, // Максимальный обьем груза
    maxKg = 20000, // Максимальный вес груза
    minInsurance = 30,
    minBort = 200,
    minStretch = 100,
    minRigidPac = 500;

// Города
let fromCity = document.getElementById('city1');
let toCity = document.getElementById('city2');

// Метры кубические
let meters = document.getElementById('meters');

// Килограммы
let kg = document.getElementById('kg');

// Значения из range инпутов
let metersRange = document.getElementById('metersRange');
let kgRange = document.getElementById('kgRange');

// Чекбоксы
let checkboxes = document.getElementsByClassName('form-check-input');

// Лейблы
let toAddressLabel = document.getElementById("labelFor1");
let fromAddressLabel = document.getElementById("labelFor2");
let rigidPacLabel = document.getElementById("labelFor3");
let stretchPacLabel = document.getElementById("labelFor4");
let bortLabel = document.getElementById("labelFor5");
let insuranceLabel = document.getElementById("labelFor6");

let changeCitiesbtn = document.getElementById("changeCities");

kg.max = 20000;
kg.value = 2.5;
kg.min = 0;

meters.max = 80;
meters.value = 0.01;
meters.min = 0;



getDepTimeExpress();
getDepTimeEconom()
timer();

function stepChangekg() {

    if (kg.value >= 0.5 && kg.value < 10) {
        kg.setAttribute('step', 0.5);
        //kg.value = fixValueKg(parseFloat(kg.value));
    } else if ((kg.value == 10 || kg.value > 10) && kg.value < 50) {
        kg.setAttribute('step', 1);
        //kg.value = fixValueKg(parseFloat(kg.value));
    } else if (kg.value >= 50 && kg.value < 100) {
        kg.setAttribute('step', 5);
        //kg.value = fixValueKg(parseFloat(kg.value));
    } else if (kg.value >= 100 && kg.value < 1000) {
        kg.setAttribute('step', 10);
        //kg.value = fixValueKg(parseFloat(kg.value));
    } else if (kg.value >= 1000 && kg.value < 20000) {
        kg.setAttribute('step', 100);

    }
}

function stepChangeM() {
    if (meters.value >= 0 && meters.value < 0.5) {
        meters.setAttribute('step', 0.01);
    } else if (meters.value >= 0.5 && meters.value < 5) {
        meters.setAttribute('step', 0.1);
    } else if (meters.value >= 5 && meters.value < 10) {
        meters.setAttribute('step', 0.5);
    } else if (meters.value >= 10 && meters.value < 80) {
        meters.setAttribute('step', 1);
    }
}


let packageRad = Array.apply(null,  document.getElementsByClassName('package'));
packageRad.forEach(rad => {
    let checked = false;

    rad.addEventListener("mousedown", event => {
        checked = rad.checked;
    });
    rad.addEventListener("click", event => {
        rad.checked = !checked;
        CalculatorEco();
        CalculateExpress();


    });
})

// Логарифмические функции, которые настраивают поведение инпутов range
function logsliderKg(position) {

    var minp = 1;
    var maxp = 100;


    var minv = Math.log(minKg);
    var maxv = Math.log(maxKg);

    // calculate adjustment factor
    var scale = (maxv - minv) / (maxp - minp);

    return Math.exp(minv + scale * (position - minp));

}
function logsliderM(position) {
    // position will be between 0 and 100
    var minp = metersRange.getAttribute('min');
    var maxp = metersRange.getAttribute('max');

    // The result should be between 100 an 10000000
    var minv = Math.log(minMeters);
    var maxv = Math.log(maxMeters);

    // calculate adjustment factor
    var scale = (maxv - minv) / (maxp - minp);

    return Math.exp(minv + scale * (position - minp));
}
// Функции обратные логарифмическим
function logInputKg(value) {
    var minp = kgRange.getAttribute('min');
    var maxp = kgRange.getAttribute('max');


    var minv = Math.log(minKg);
    var maxv = Math.log(maxKg);

    // calculate adjustment factor
    var scale = (maxv - minv) / (maxp - minp);

    return (Math.log(value) - minv) / scale + minp;
}
function logInputM(value) {
    // position will be between 0 and 100
    var minp = +metersRange.getAttribute('min');
    var maxp = +metersRange.getAttribute('max');

    // The result should be between 100 an 10000000
    var minv = Math.log(minMeters);
    var maxv = Math.log(maxMeters);

    // calculate adjustment factor
    var scale = (maxv - minv) / (maxp - minp);

    return (Math.log(value) - minv) / scale + minp;
}

// Функции, присваивающие значения вводов пользователя с ползунка числовому инпуту и наоборот
function assignValueRtoI() {

    meters.value = fixValueM(logsliderM(+metersRange.value));

    kg.value = fixValueKg(logsliderKg(kgRange.value));
}
function assignValueItoR() {
    metersRange.value = fixValueM(logInputM(meters.value));
    kgRange.value = fixValueKg(logInputKg(kg.value));
}

// Функции регулирующие поведение ползунков
function fixValueM(val) {
    if (val < 0.5) {
        return +(val.toFixed(2));
    } else if (val >= 0.5 && val < 5) {
        return +(val.toFixed(1));
    } else if (val >= 5 && val < 10) {
        return Math.round(val * 2) / 2;
    } else if (val >= 10) {
        return Math.round(val);
    } else if (val > 80) {
        return 80
    }
}

function fixValueKg(val) {
    if (val > 2.5 && val < 3) {
        return 2.5;
    } else if (val < 10) {
        return Math.round(val * 2) / 2;
    } else if (val >= 10 && val < 50) {
        return Math.round(val);
    } else if (val >= 50 && val < 100) {
        return Math.round(val / 5) * 5;
    } else if (val >= 100 && val < 1000) {
        return Math.round(val / 10) * 10;
    } else if (val >= 1000) {
        return Math.round(val / 100) * 100;
    } else if (val > 20000) {
        return 20000;
    }
}

// Функция, которая меняет города, чтобы доставка была в другой город
function fixCities() {
    if (fromCity.value == 'SPB') {
        toCity.value = 'Moscow';
    } else if (fromCity.value == 'Moscow') {
        toCity.value = 'SPB';
    }
}

// Функция, которая достает значения выбраных опций
function getSelectedCheckboxes() {
    let checkboxes = document.getElementsByClassName('form-check-input');
    let selected = [];
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            selected.push(checkboxes[i].value);
        };
    }
    return selected;

}

// Главная функция калькулятора
function cargoVol() {
    if (kg.value / 250 > meters.value) {
        return +kg.value / 250;
    } else {
        return +meters.value;
    }
}

function cargoWeight() {
    if (meters.value * 250 < kg.value) {
        return kg.value;
    } else {
        return meters.value * 250;
    }
}


function neededArr(express) {
    if (fromCity.value == "Moscow" && toCity.value == 'SPB' && express == false) {
        return arr1;
    } else if (fromCity.value == 'Moscow' && toCity.value == 'SPB' && express == true) {
        return arr2;
    } else if (fromCity.value == 'SPB' && toCity.value == 'Moscow' && express == false) {
        return arr3;
    } else if (fromCity.value == 'SPB' && toCity.value == 'Moscow' && express == true) {
        return arr4;
    } else if (fromCity.value == 'Moscow' && toCity.value == 'Ulan-Ude' && express == false) {
        return arr6;
    } else if (fromCity.value == 'SPB' && toCity.value == 'Ulan-Ude' && express == false) {
        return arr8;
    } else if (fromCity.value == 'Moscow' && toCity.value == 'Krasnoyarsk' && express == false) {
        return arr5;
    } else if (fromCity.value == 'SPB' && toCity.value == 'Krasnoyarsk' && express == false) {
        return arr7;
    }
}

function priceTypeForAD() {
    if (cargoVol() >= 40) {
        return '40m+';
    } else if (cargoVol() >= 30) {
        return 'upTo40m';
    } else if (cargoVol() >= 20) {
        return 'upTo30m';
    } else if (cargoVol() >= 10) {
        return 'upTo20m';
    } else if (cargoVol() >= 7) {
        return 'upTo10m'
    } else if (cargoVol() >= 5) {
        return 'upTo7m';
    } else if (cargoVol() >= 3) {
        return 'upTo5m';
    } else if (cargoVol() >= 1.1) {
        return 'upTo3m';
    } else if (cargoVol() >= 0.2) {
        return 'upTo1m';
    } else if (cargoVol() > 0.1) {
        return 'minP';
    } else if (cargoVol() > 0.01) {
        return 'single';
    } else {
        return 'docs'
    }
}

function priceForAdWithPackage(volume) {
    volume = volume * 1.3;
    if (volume >= 40) {
        return '40m+';
    } else if (volume >= 30) {
        return 'upTo40m';
    } else if (volume >= 20) {
        return 'upTo30m';
    } else if (volume >= 10) {
        return 'upTo20m';
    } else if (volume >= 7) {
        return 'upTo10m'
    } else if (volume >= 5) {
        return 'upTo7m';
    } else if (volume >= 3) {
        return 'upTo5m';
    } else if (volume >= 1.1) {
        return 'upTo3m';
    } else if (volume >= 0.2) {
        return 'upTo1m';
    }
}

function priceType() {
    if (cargoVol() >= 50) {
        return '50m+';
    } else if (cargoVol() >= 40) {
        return '40m+';
    } else if (cargoVol() >= 30) {
        return '30m+';
    } else if (cargoVol() >= 10) {
        return '10m+';
    } else if (cargoVol() >= 5) {
        return '5m+';
    } else if (cargoVol() >= 0.2) {
        return '5m-'
    } else if (cargoVol() > 0.1) {
        return 'minP';
    } else if (cargoVol() > 0.01) {
        return 'single';
    } else {
        return 'docs'
    }
};

function CalculateExpress(res) {
    let array = neededArr(true);
    let optPrices = array['price'][priceType()];
    let ADprices = array['ADprice'][priceTypeForAD()];
    let volume = cargoVol();
    let weight = cargoWeight();
    let price = 0;
    let options = getSelectedCheckboxes();
    if (options.includes('opt3') || options.includes('opt5')) {
        let volumeWithPackage = volume * 1.3;
        if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
            price += optPrices['send'];
        } else {
            price += optPrices['forunit'] * volumeWithPackage;
        }
    } else {
        // Transportation T-T
        if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
            price += optPrices['send'];
        } else {
            price += optPrices['forunit'] * volume;
        }
    }



    // Options

    for (let option of options) {
        switch (option) {
            case "opt6":
                let insurance = 0
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    insurance = +optPrices['insurance'];
                    price += insurance;

                } else {
                    if (optPrices['insPerKG'] * weight < minInsurance) {
                        insurance = minInsurance;
                        price += insurance;
                    } else {
                        insurance = +optPrices['insPerKG'] * weight;
                        price += insurance;

                    }
                }
                insuranceLabel.innerText = "Страховка (" + insurance.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt5":
                let bortPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    bortPrice = +optPrices['bort'];
                } else {
                    if (optPrices['bort'] * volume < minBort) {
                        bortPrice = minBort;

                    } else {
                        bortPrice = +optPrices['bort'] * volume;
                    }
                }
                price += bortPrice;
                //bortLabel.innerText = "Упаковка в паллет-борт (" + bortPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt4":
                let stretchPacPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    stretchPacPrice = +optPrices['stretchPac'];
                } else {
                    if (optPrices['stretchPac'] * volume < minStretch) {
                        stretchPacPrice = minStretch;

                    } else {
                        stretchPacPrice = +optPrices['stretchPac'] * volume;
                    }
                }
                price += stretchPacPrice;
                //stretchPacLabel.innerText = "Упаковка в стретч-пленку (" + stretchPacPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt3":
                let rigidPacPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    rigidPacPrice = +optPrices['rigidPac'];
                } else {
                    if (optPrices['rigidPac'] * volume < minRigidPac) {
                        rigidPacPrice = minRigidPac;

                    } else {
                        rigidPacPrice = +optPrices['rigidPac'] * volume;
                    }
                }
                price += rigidPacPrice;
                //rigidPacLabel.innerText = "Жесткая упаковка (" + rigidPacPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt2":
                let fromAddressPrice = ADprices['fromAddress'];
                price += fromAddressPrice;
                //fromAddressLabel.innerText = "Забор груза на адресе (" + fromAddressPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt1":
                let toAddressPrice = 0;
                let priceADWithPackage =  [];
                let arr = [];
                if (options.includes('opt3') || options.includes('opt5')) {

                    if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                        arr = neededArr(true);
                        console.log(arr);
                        priceADWithPackage = arr['ADprice'][priceType()];
                        toAddressPrice = priceADWithPackage['toAddress'];
                    } else {
                        let arr = neededArr(true);
                        let priceADWithPackage = arr['ADprice'][priceForAdWithPackage(volume)];
                        toAddressPrice = priceADWithPackage['toAddress'];
                    }
                } else {
                    toAddressPrice = ADprices['toAddress'];
                }

                price += toAddressPrice;


            //toAddressLabel.innerText = "Доставка груза на адрес (" + toAddressPrice.toLocaleString('ru-Ru') + " руб.)";
            default:
                break;
        }
    }


        let result = document.getElementById("resultExpress");


        result.innerText = 'Стоимость ЭКСПРЕСС: ' + price.toLocaleString('ru-RU') + ' руб.';

}

function CalculatorEco(res) {
    let array = neededArr(false);
    let optPrices = array['price'][priceType()];
    let ADprices = array['ADprice'][priceTypeForAD()];
    let volume = cargoVol();
    let weight = cargoWeight();
    let price = 0;
    let options = getSelectedCheckboxes();
    if (options.includes('opt3') || options.includes('opt5')) {
        let volumeWithPackage = volume * 1.3;
        if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
            price += optPrices['send'];
        } else {
            price += optPrices['forunit'] * volumeWithPackage;
        }
    } else {
        // Transportation T-T
        if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
            price += optPrices['send'];
        } else {
            price += optPrices['forunit'] * volume;
        }
    }



    // Options

    for (let option of options) {
        switch (option) {
            case "opt6":
                let insurance = 0
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    insurance = +optPrices['insurance'];
                    price += insurance;

                } else {
                    if (optPrices['insPerKG'] * weight < minInsurance) {
                        insurance = minInsurance;
                        price += insurance;

                    } else {
                        insurance = +optPrices['insPerKG'] * weight;
                        price += insurance;

                    }
                }
                insuranceLabel.innerText = "Страховка (" + insurance.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt5":
                let bortPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    bortPrice = +optPrices['bort'];
                } else {
                    if (optPrices['bort'] * volume < minBort) {
                        bortPrice = minBort;

                    } else {
                        bortPrice = +optPrices['bort'] * volume;
                    }
                }
                price += bortPrice;
                bortLabel.innerText = "Упаковка в паллет-борт (" + bortPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt4":
                let stretchPacPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    stretchPacPrice = +optPrices['stretchPac'];
                } else {
                    if (optPrices['stretchPac'] * volume < minStretch) {
                        stretchPacPrice = minStretch;

                    } else {
                        stretchPacPrice = +optPrices['stretchPac'] * volume;
                    }
                }
                price += stretchPacPrice;
                stretchPacLabel.innerText = "Упаковка в стретч-пленку (" + stretchPacPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt3":
                let rigidPacPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    rigidPacPrice = +optPrices['rigidPac'];
                } else {
                    if (optPrices['rigidPac'] * volume < minRigidPac) {
                        rigidPacPrice = minRigidPac;

                    } else {
                        rigidPacPrice = +optPrices['rigidPac'] * volume;
                    }
                }
                price += rigidPacPrice;
                rigidPacLabel.innerText = "Жесткая упаковка (" + rigidPacPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt2":
                let fromAddressPrice = ADprices['fromAddress'];
                price += fromAddressPrice;
                fromAddressLabel.innerText = "Забор груза на адресе (" + fromAddressPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt1":
                let toAddressPrice = 0;
                let priceADWithPackage =  [];
                let arr = [];
                if (options.includes('opt3') || options.includes('opt5')) {

                    if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                        arr = neededArr(false);
                        console.log(arr);
                        priceADWithPackage = arr['ADprice'][priceType()];
                        toAddressPrice = priceADWithPackage['toAddress'];
                    } else {
                        let arr = neededArr(false);
                        let priceADWithPackage = arr['ADprice'][priceForAdWithPackage(volume)];
                        toAddressPrice = priceADWithPackage['toAddress'];
                    }
                } else {
                    toAddressPrice = ADprices['toAddress'];
                }

                price += toAddressPrice;
            //toAddressLabel.innerText = "Доставка груза на адрес (" + toAddressPrice.toLocaleString('ru-Ru') + " руб.)";
            default:
                break;
        }
    }

    let abstractOptions = []
    for (let checkbox of checkboxes) {
        abstractOptions.push(checkbox.value)
    }

    for (let abstractOption of abstractOptions) {
        switch (abstractOption) {
            case "opt6":
                let insurance = 0
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    insurance = +optPrices['insurance'];
                } else {
                    if (optPrices['insPerKG'] * weight < minInsurance) {
                        insurance = minInsurance;

                    } else {
                        insurance = +optPrices['insPerKG'] * weight;
                    }
                }
                insuranceLabel.innerText = "Страховка (" + insurance.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt5":
                let bortPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    bortPrice = +optPrices['bort'];
                } else {
                    if (optPrices['bort'] * volume < minBort) {
                        bortPrice = minBort;

                    } else {
                        bortPrice = +optPrices['bort'] * volume;
                    }
                }
                bortLabel.innerText = "Упаковка в паллет-борт (" + bortPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt4":
                let stretchPacPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    stretchPacPrice = +optPrices['stretchPac'];
                } else {
                    if (optPrices['stretchPac'] * volume < minStretch) {
                        stretchPacPrice = minStretch;

                    } else {
                        stretchPacPrice = +optPrices['stretchPac'] * volume;
                    }
                }
                stretchPacLabel.innerText = "Упаковка в стретч-пленку (" + stretchPacPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt3":
                let rigidPacPrice = 0;
                if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                    rigidPacPrice = +optPrices['rigidPac'];
                } else {
                    if (optPrices['rigidPac'] * volume < minRigidPac) {
                        rigidPacPrice = minRigidPac;

                    } else {
                        rigidPacPrice = +optPrices['rigidPac'] * volume;
                    }
                }
                rigidPacLabel.innerText = "Жесткая упаковка (" + rigidPacPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt2":
                let fromAddressPrice = ADprices['fromAddress'];
                fromAddressLabel.innerText = "Забор груза на адресе (" + fromAddressPrice.toLocaleString('ru-Ru') + " руб.)";
                break;
            case "opt1":
                let toAddressPrice = 0;
                let priceADWithPackage =  [];
                let arr = [];
                if (options.includes('opt3') || options.includes('opt5')) {

                    if (priceType() == "minP" || priceType() == "single" || priceType() == "docs") {
                        arr = neededArr(false);
                        console.log(arr);
                        priceADWithPackage = arr['ADprice'][priceType()];
                        toAddressPrice = priceADWithPackage['toAddress'];
                    } else {
                        let arr = neededArr(false);
                        let priceADWithPackage = arr['ADprice'][priceForAdWithPackage(volume)];
                        toAddressPrice = priceADWithPackage['toAddress'];
                    }
                } else {
                    toAddressPrice = ADprices['toAddress'];
                }

                

                toAddressLabel.innerText = "Доставка груза на адрес (" + toAddressPrice.toLocaleString('ru-Ru') + " руб.)";
            default:
                break;
        }
    }

    let result = document.getElementById("resultEco");


    result.innerText = 'Стоимость ЭКОНОМ: ' + price.toLocaleString('ru-RU') + ' руб.';

}


// Массив range инпутов (ползунков)
let ranges = [
    metersRange,
    kgRange
];
// Массив числовых инпутов
let valInputs = [
    kg,
    meters
]
kg.setAttribute('step', 0.5);

assignValueItoR();

meters.addEventListener('input', () => {
    stepChangeM();
    if (meters.value > 80) {
        meters.value = 80;
    }

})
kg.addEventListener('input', () => {
    stepChangekg();
    if (kg.value > 20000) {
        kg.value = 20000;
    }
})

// Синхронизация range и числовых инпутов
for (let input of valInputs) {
    input.addEventListener('input', () => {
        assignValueItoR();
    })
}
for (let range of ranges) {
    range.addEventListener('input', () => {
        assignValueRtoI();
    })
}
changeCitiesbtn.addEventListener('click', () => {
    let city1 = fromCity.value;
    let city2 = toCity.value;
    fromCity.value = city2;
    toCity.value = city1;
})
let cities = [
    fromCity,
    toCity
]
// for (let city of cities) {
//     city.addEventListener('input', () => {
//         fixCities();
//     })
// }
// Массив всех инпутов
let AllInputs = [
    fromCity,
    toCity,
    meters,
    kg,
    kgRange,
    metersRange
];
// добавление чекбоксов в инпуты
for (let check of checkboxes) {
    AllInputs.push(check);
}

CalculatorEco();
CalculateExpress();



// Пересчитывание значение при каждом изменении значений введенных пользователем
for (let inp of AllInputs) {
    inp.addEventListener('input', () => {
        CalculatorEco();
        CalculateExpress();
    })
}