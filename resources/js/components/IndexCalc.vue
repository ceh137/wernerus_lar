<template>
    <div class="uk-grid-item-match uk-flex-middle uk-width-large@m">
        <div class="calc-widget">
            <form action="/order" method="post">
                <slot>
                    <!-- CSRF gets injected into this slot -->
                </slot>
                <div class="calc-widget-grid uk-grid-row-small uk-grid-column-collapse uk-grid" uk-grid>
                    <div class="uk-h4 first-ttl">Выбор города</div>
                    <div class="uk-row uk-grid-callapse uk-flex uk-row-full uk-flex-between uk-flex-middle">
                        <div class="">
                            <select v-on:change="calculator()" v-model="selected_from_city" id="city1" name="from_city" class="form-select uk-select form-select uk-select-lg mb-3" aria-label=".form-select uk-select-lg example">
                                <option   v-for="city in from_cities" :value="city.code" >{{ city.name }}</option>
                            </select>
                        </div>
                        <div>
                            <button type="button" id="changeCities" class="uk-button uk-button-default"></button>
                        </div>
                        <div class="">
                            <select  v-on:chnage="calculator()" v-model="selected_to_city" id="city2" name="to_city" class="form-select uk-select form-select uk-select-lg mb-3" aria-label=".form-select uk-select-lg example">
                                <option v-for="city in to_cities" :value="city.code" >{{ city.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-width-medium@m uk-flex uk-flex-center@m col-2">
                        <div class="uk-card">
                            <div class="form-check form-check-row-1">
                                <input v-on:input="calculator()" v-on:click="changeExpress()" class="form-check-input uk-radio" type="radio" name="rad"  id="Ecorad">
                                <label class="form-check-label" for="Ecorad">
                                    ЭКОНОМ
                                </label>
                            </div>
                            <div class="form-check form-check-row-2">
                                <input v-on:input="calculator()" v-on:click="changeExpress()" :disabled="noExpress" class="form-check-input uk-radio" type="radio" name="rad"  id="Expressrad" checked>
                                <label class="form-check-label" for="Expressrad">
                                    ЭКСПРЕСС
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="uk-row uk-grid-item-match">
                        <div class="uk-row uk-grid-medium uk-flex uk-row-full uk-flex-between uk-flex-middle">
                            <div>
                                <div class="uk-h4">Вес груза</div>
                                <div class="input-group">
                                    <input v-on:input="logInputKg()" :step="stepkg" v-model="kg" id="kg" type="number" class="form-control uk-input" name="kilos"  aria-label="Sizing example input" aria-describedby="labelkg">
                                    <span class="input-group-text" id="labelkg">кг</span>
                                </div>
                                <label for="kgRange" class="form-label"></label>
                                <input v-on:input=" logsliderKg()"  v-model="range.kg" type="range" min='0' max="100" step="0.5" class="form-range" id="kgRange">
                            </div>
                            <div>
                                <div class="uk-h4">Обьем груза</div>
                                <div class="input-group">
                                    <input  v-on:input=" logInputM()"  v-model="meters" :step="stepm" id="meters" type="number" class="form-control uk-input" name="meters"  step="0.01" min="0.01" max="80" aria-label="Sizing example input" aria-describedby="labelmeters">
                                    <span class="input-group-text" id="labelmeters">м<sup>3</sup></span>
                                </div>
                                <label for="metersRange" class="form-label"></label>
                                <input v-on:input=" logsliderM()"  v-model="range.meters" type="range" min="0" max="100" step="0.01" class="form-range" id="metersRange">
                            </div>
                        </div>
                        <div class="row-dop-functions">
                            <div class="uk-h4">Дополнительные функции</div>
                            <div class="form-row-check">
                                <div class="form-check uk-flex uk-flex-middle">
                                    <input v-model="with_addr_to" v-on:change="toAddr()"  class="form-check-input uk-checkbox check" type="checkbox" name="options[]"  id="check1" >
                                    <label class="form-check-label" for="check1" id="labelFor1">
                                        Доставка груза до адреса {{ to_addr_price.toLocaleString('ru-Ru') }} руб.
                                    </label>
                                </div>
                                <div class="form-check uk-flex uk-flex-middle">
                                    <input v-model="with_addr_from" v-on:change="fromAddr()" class="form-check-input uk-checkbox check" type="checkbox"  name="options[]" id="check2" >
                                    <label class="form-check-label" for="check2" id="labelFor2">
                                        Забор груза от адреса {{ from_addr_price.toLocaleString('ru-Ru') }} руб.
                                    </label>
                                </div>
                                <div class="form-check uk-flex uk-flex-middle">
                                    <input v-model="rig_pac"  v-on:click="rigClick()" class="form-check-input uk-radio check package" type="checkbox" name="options[]"  id="check3" >
                                    <label class="form-check-label" for="check3" id="labelFor3">
                                        Жесткая упаковка {{ rig_pac_price.toLocaleString('ru-Ru') }} руб.
                                    </label>
                                </div>
                                <div class="form-check uk-flex uk-flex-middle">
                                    <input v-model="stretch_pac" class="form-check-input uk-checkbox check" type="checkbox" name="options[]"  id="check4" >
                                    <label class="form-check-label" for="check4" id="labelFor4">
                                        Упаковка в стретч-пленку {{ stretch_pac_price.toLocaleString('ru-Ru') }} руб.
                                    </label>
                                </div>
                                <div class="form-check uk-flex uk-flex-middle ">
                                    <input v-model="bort_pac" v-on:click="bortClick()" class="form-check-input uk-radio check package" type="checkbox" name="options[]"  id="check5" >
                                    <label class="form-check-label" for="check5" id="labelFor5">
                                        Упаковка в паллет-борт {{ bort_pac_price.toLocaleString('ru-Ru') }} руб.
                                    </label>

                                </div>
                                <div class="form-check uk-flex uk-flex-middle">
                                    <input v-model="insurance" class="form-check-input uk-checkbox check" type="checkbox" name="options[]"  id="check6" >
                                    <label class="form-check-label" for="check6" id="labelFor6">
                                        Страховка {{ insurance_price.toLocaleString('ru-Ru') }} руб.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="uk-row calc-result uk-grid-item-match">
                        <div class="uk-row calc-result uk-grid-item-match">
                            <div v-if="!(selected_from_city === 'Москва' || selected_from_city === 'Санкт-Петербург')" class="uk-text-result uk-margin">
                                <div id="arrEco" class="uk-text">{{ arr_eco_text }}</div>
                                <div id="arrExpress" class="uk-text">{{ arr_exp_text }}</div>
                                <div id="total" class="uk-h1">ИТОГО: {{ total.toLocaleString('ru-Ru') }} руб.</div>
                            </div>
                            <input class="uk-button uk-button-primary btn-order" type="submit" value="Оформить"> </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "IndexCalc",
    data() {
        return {
            cargo_type: '',
            comment: '',
            payments: {
                sender: {
                    INN: '',
                    company: '',
                    name: '',
                    tel: '',
                    email: '',
                    pay_all: false,
                    pay_TT: false,
                    pay_pac: false,
                    pay_ins: false,
                    pay_del_to_addr: false,
                    pay_del_from_addr: false,
                    pay_PRR_to_addr: false,
                    pay_PRR_from_addr: false,
                    subtotal:  0
                },
                receiver: {
                    INN: '',
                    company: '',
                    name: '',
                    tel: '',
                    email: '',
                    pay_all: false,
                    pay_TT: false,
                    pay_pac: false,
                    pay_ins: false,
                    pay_del_to_addr: false,
                    pay_del_from_addr: false,
                    pay_PRR_to_addr: false,
                    pay_PRR_from_addr: false,
                    subtotal: 0,
                },
                third_party: {
                    INN: '',
                    company: '',
                    name: '',
                    tel: '',
                    email: '',
                    pay_all: false,
                    pay_TT: false,
                    pay_pac: false,
                    pay_ins: false,
                    pay_del_to_addr: false,
                    pay_del_from_addr: false,
                    pay_PRR_to_addr: false,
                    pay_PRR_from_addr: false,
                    subtotal: 0,
                },
            },
            steppieces:1,
            from_cities: {
                msk:
                    {
                        name: 'Москва',
                        code: 'MSK',
                    },
                spb:
                    {
                        name: 'Санкт-Петербург',
                        code: 'SPB',
                    },
            },
            to_cities: cities,
            zoneFrom: {
                zone: 1,
                distance: 0,
                precision: "Точные координаты дома"
            },
            zoneTo: {
                zone: 1,
                distance: 0,
                precision: "Точные координаты дома"
            },
            date_to: '',
            date_from: '',
            from_time_from_addr: '',
            to_time_from_addr: '',
            from_time_to_addr: '',
            to_time_to_addr: '',
            max_from_time_from_addr: '',
            min_from_time_from_addr: '',
            max_to_time_from_addr: '',
            min_to_time_from_addr: '',
            min_date_to: '',
            max_date_to: '',
            min_date_from: '',
            max_date_from: '',
            arr_eco_text: '',
            arr_exp_text: '',
            dep_eco_text: '',
            dep_exp_text: '',
            selected_from_city: 'SPB',
            selected_to_city: 'MSK',
            kg: 2.5,
            meters: 0.01,
            pieces: 1,
            heaviest: 2.5,
            longest: 10,
            range: {
                meters: 0,
                kg: 0,
                pieces: 0,
                heaviest: 0,
                longest: 0
            },
            to_fixed_time: false,
            from_fixed_time: false,
            rig_pac: false,
            stretch_pac: false,
            bort_pac: false,
            insurance: false,
            with_addr_from: false,
            with_addr_to: false,
            PRR_to_addr: false,
            PRR_from_addr: false,
            TT_price: 0,
            to_addr_price: 0,
            from_addr_price: 0,
            rig_pac_price: 0,
            stretch_pac_price: 0,
            bort_pac_price: 0,
            insurance_price: 0,
            worth: 0,
            PRR_to_addr_price: 0,
            PRR_from_addr_price: 0,
            total: 0,
            express: true,
            paymentAllChosen:false,
            addressFrom: '',
            addressTo: '',
            Addrprops: [],
            addressToProps: [],
            addressFromProps: [],
            warning: '',
            noExpress: false,
            econom: false,
            ADto: 0,
            ADfrom: 0
        }
    },
    methods: {
        submitForm() {
            if (this.validatePrice()) {
                let selFromCity = '';
                let selToCity = '';
                for (let city in this.to_cities) {
                    if (this.to_cities[city].code === this.selected_to_city) {
                        selToCity = this.to_cities[city].name;
                        break;
                    }
                }
                for (let city in this.from_cities) {
                    if (this.from_cities[city].code === this.selected_from_city) {
                        selFromCity = this.from_cities[city].name;
                        break;
                    }
                }
                this.comment = this.comment.replace('#', ' ');
                this.comment = this.comment.replace('&', ' ');
                this.comment = this.comment.replace('%', ' ');
                this.comment = this.comment.replace('$', ' ');
                let dataToSubmit = {
                    date_to: this.date_to,
                    date_from: this.date_from,
                    payments: this.payments,
                    from_time_from_addr: this.from_time_from_addr,
                    to_time_from_addr: this.to_time_from_addr,
                    from_time_to_addr: this.from_time_to_addr,
                    to_time_to_addr: this.to_time_to_addr,
                    selected_from_city: selFromCity,
                    selected_to_city: selToCity,
                    kg: this.kg,
                    meters: this.meters,
                    pieces: this.pieces,
                    heaviest: this.heaviest,
                    longest: this.longest,
                    to_fixed_time: this.to_fixed_time,
                    from_fixed_time: this.from_fixed_time,
                    rig_pac: this.rig_pac,
                    stretch_pac: this.stretch_pac,
                    bort_pac: this.bort_pac,
                    insurance: this.insurance,
                    with_addr_from: this.with_addr_from,
                    with_addr_to: this.with_addr_to,
                    PRR_to_addr: this.PRR_to_addr,
                    PRR_from_addr: this.PRR_from_addr,
                    TT_price: this.TT_price,
                    to_addr_price: this.to_addr_price,
                    from_addr_price: this.from_addr_price,
                    rig_pac_price: this.rig_pac_price,
                    stretch_pac_price: this.stretch_pac_price,
                    bort_pac_price: this.bort_pac_price,
                    insurance_price: this.insurance_price,
                    worth: this.worth,
                    PRR_to_addr_price: this.PRR_to_addr_price,
                    PRR_from_addr_price: this.PRR_from_addr_price,
                    total: this.total,
                    express: this.express,
                    addressFrom: this.addressFrom,
                    addressTo: this.addressTo,
                    cargo_type: this.cargo_type,
                    comment: this.comment,
                };
                console.log(dataToSubmit)
                let url  =  "server.php?data="+JSON.stringify(dataToSubmit);
                document.location.href = url;
            } else {
                this.warning = 'Наверное вы забыли выбрать что-то из оплаты';
            }
        },
        async ZoneAPI(terminal,address, where) {
            let response = await fetch("http://wernerus.ru/zone.php?url="+ WernerZoneURL+this.EncodeString(terminal+String.fromCharCode(30)+address));
            let data = await response.json();
            if (where == "from") {
                this.zoneFrom = data;
            }else if(where == "to") {
                this.zoneTo = data;
            }
            this.calculator();
        },
        EncodeString(t) {
            const c30 = String.fromCharCode(30);
            const a = ['ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789:,.- []{}'+c30,
                'abcdefghijklmnopqrstuvwxyz!#$%&\'()*+/;<=>?@\\^_`|~ЁёЪъ":,.- []{}',
                'АБВГДЕЖЗИЙКЛМНОПРСТУФХЦЧШЩЫЬЭЮЯабвгдежзийклмнопрстуфхцчшщыьэюя '];
            const a64 = 'xDMpbsZyvUWuchefok-7LaCFIOi1Rtdj6TNS3A0JX8BY94rzQlV2HEgGPmw_5Kqn';
            var m=0,s='',ise,i,c;
            for(var q=0;q<t.length;q++) {
                ise=false;
                while(!ise) {
                    i=a[m].indexOf(t[q]);
                    if(i>-1) {
                        s+=a64[i]; ise=true;
                    } else {
                        if(m==0) {
                            if(a[1].indexOf(t[q])>-1) {
                                s+=a64[46]; m=1;
                            } else if(a[2].indexOf(t[q])>-1) {
                                s+=a64[47]; m=2;
                            } else {
                                c=t.charCodeAt(q);
                                s+=a64[48+Math.floor(c/4096)];
                                c=c%4096;
                                s+=a64[Math.floor(c/64)]+a64[c%64];
                                ise=true;
                            }
                        } else {
                            s+=a64[63]; m=0;
                        }
                    }
                }
            }
            return s;
        },
        unfocusAddress(where) {
            if (this.selected_from_city == "MSK" || this.selected_from_city == "SPB" || this.selected_to_city == "MSK" || this.selected_to_city == "SPB") {
                if (where == 'from') {
                    let terminal;
                    if (this.selected_from_city == "MSK") {
                        terminal = "Москва";
                    } else if (this.selected_from_city == "SPB") {
                        terminal = "Санкт-Петербург";
                    }
                    let addr = this.addressFrom;
                    this.ZoneAPI(terminal, addr, "from")
                } else if (where == "to") {
                    let terminal;
                    if (this.selected_to_city == "MSK") {
                        terminal = "Москва";
                    } else if (this.selected_to_city == "SPB") {
                        terminal = "Санкт-Петербург";
                    }
                    let addr = this.addressTo;
                    this.ZoneAPI(terminal, addr, "to")
                }
            }
            this.calculator();
        },
        calculateAD(where) {

            let size;
            let volume;
            let ispackage = this.rig_pac || this.bort_pac;

            if (ispackage && this.not_big) {
                volume = this.cargoVol() * 1.3;
            } else {
                volume = this.cargoVol();
            }

            if (volume > 40) {
                size = '40m+';
            } else if (volume > 30) {
                size = 'upTo40m';
            } else if (volume > 20) {
                size = 'upTo30m';
            } else if (volume > 10) {
                size = 'upTo20m';
            } else if (volume > 7) {
                size = 'upTo10m';
            } else if (volume > 5) {
                size = 'upTo7m';
            } else if (volume > 3) {
                size = 'upTo5m';
            } else if (volume > 1) {
                size = 'upTo3m';
            } else if (volume > 0.2) {
                size = 'upTo1m';
            } else if (volume > 0.1) {
                size = 'minP';
            } else if (volume >= 0.01) {
                size = 'single';
            } else {
                size = 'docs';
            }

            let method = 'econom';
            if (this.express) {
                method = 'express';
            }

            if (this.selected_from_city === "MSK" ||this.selected_from_city === "SPB") {

                if (where =="from") {
                    let arrayAd = AD[this.selected_from_city][size];
                    let basePrice = +arrayAd[method];
                    let addons = +arrayAd[this.zoneFrom.zone+'zone'];
                    let distance = +this.zoneFrom.distance;
                    if(isNaN(addons)) {
                        addons=0;
                    }
                    console.log(basePrice, addons, distance)
                    let pricead = basePrice + addons + distance*pricePerKM;
                    if (this.oversize) {
                        pricead = pricead*OversizeAD;
                    }
                    return Math.round(pricead);
                }}

            if (where == 'to' && (this.selected_to_city === "MSK" ||this.selected_to_city === "SPB")) {
                let arrayAd = AD[this.selected_to_city][size];
                let basePrice = +arrayAd[method];
                let addons = +arrayAd[this.zoneTo.zone+'zone'];
                let distance = +this.zoneTo.distance;
                if(isNaN(addons)) {
                    addons=0;
                }
                console.log(basePrice, addons, distance)
                let pricead = basePrice + addons + distance*pricePerKM;
                if (this.oversize) {
                    pricead = pricead*OversizeAD;
                }
                return Math.round(pricead);
            } else {
                let array = this.neededArr(this.express);
                let ADprices = array['ADprice'][size];
                if (where =="from") {
                    let price = +ADprices['fromAddress'];
                    if (this.oversize) {
                        price = price * OversizeAD;
                    }
                    if (this.from_fixed_time) {
                        price += ADfixMSK;
                    }
                    return price;
                } else if (where == 'to') {

                    let priceADWithPackage = {};
                    priceADWithPackage = array['ADprice'][size];
                    let price = priceADWithPackage['toAddress'];

                    if (this.oversize) {
                        price = price * OversizeAD;
                    }

                    if (this.to_fixed_time) {
                        price += ADfixSPB;
                    }
                    return price;
                }

            }

        },
        validatePrice() {
            let allpays = this.payments.sender.subtotal + this.payments.receiver.subtotal + this.payments.third_party.subtotal;
            if (allpays === this.total) {
                return true;
            }else {
                return false;
            }
        },
        rigClick() {
            this.rig_pac = !this.rig_pac;
            if (this.bort_pac) {
                this.bort_pac = false;
            }
        },
        bortClick()  {
            this.bort_pac = !this.bort_pac;
            if (this.rig_pac) {
                this.rig_pac = false;
            }
        },
        changeExpress() {
            this.express = !this.express;
            this.econom = !this.econom;
        },
        changeToAddress() {
            this.with_addr_to = !this.with_addr_to;
        },
        changeFromAddress() {
            this.with_addr_from = !this.with_addr_from;
        },
        logsliderKg() {
            let res = Math.exp(Math.log(0.5) + ((Math.log(20000) - Math.log(0.5)) / (100 - 1)) * (this.range.kg - 1));
            if (res > 0 && res < 3) {
                this.kg = Math.round(res*2)/2;
            } else if (res < 10) {
                this.kg = Math.round(res * 2) / 2;
            } else if (res >= 10 && res < 50) {
                this.kg = Math.round(res);
            } else if (res >= 50 && res < 100) {
                this.kg =  Math.round(res / 5) * 5;
            } else if (res >= 100 && res < 1000) {
                this.kg = Math.round(res / 10) * 10;
            } else if (res >= 1000) {
                this.kg = Math.round(res / 100) * 100;
            } else if (res > 20000) {
                this.kg = 20000;
            }
        },
        logsliderM() {
            let res = Math.exp(Math.log(0.01) + ((Math.log(80) - Math.log(0.01)) / (100 - 1)) * (this.range.meters - 1));
            if (res < 0.5) {
                this.meters = Math.round(res * 100) / 100;
            } else if (res >= 0.5 && res < 5) {
                this.meters = Math.round(res * 10) / 10;
            } else if (res >= 5 && res < 10) {
                this.meters =  Math.round(res * 2) / 2;
            } else if (res >= 10) {
                this.meters = Math.round(res);
            } else if (res > 80) {
                this.meters = 80;
            }
        },
        logsliderPieces() {
            let res = Math.exp(Math.log(1) + ((Math.log(150) - Math.log(1)) / (100 - 1)) * (this.range.pieces - 1));
            this.pieces = Math.round(res);
        },
        logsliderHeaviest() {
            let res = Math.exp(Math.log(2.5) + ((Math.log(1000) - Math.log(2.5)) / (100 - 1)) * (this.range.heaviest - 1));
            this.heaviest = Math.round(res);
        },
        logsliderLongest() {
            let res = Math.exp(Math.log(10) + ((Math.log(300) - Math.log(10)) / (100 - 1)) * (this.range.longest - 1));
            this.longest = Math.round(res);
        },
        logInputKg() {
            this.range.kg = (Math.log(this.kg) - Math.log(0.5)) / ((Math.log(20000) - Math.log(0.5)) / (100 - 1)) + 1;
        },
        logInputM() {
            this.range.meters = (Math.log(this.meters) - Math.log(0.01)) / ((Math.log(80) - Math.log(0.01)) / (100 - 1)) + 1;
        },
        logInputPieces() {
            this.range.pieces = (Math.log(this.pieces) - Math.log(1)) / ((Math.log(150) - Math.log(1)) / (100 - 1)) + 1
        },
        logInputLongest() {
            this.range.longest = (Math.log(this.longest) - Math.log(10)) / ((Math.log(300) - Math.log(10)) / (100 - 1)) + 1
        },
        logInputHeaviest() {
            this.range.heaviest = (Math.log(this.heaviest) - Math.log(0.5)) / ((Math.log(1000) - Math.log(0.5)) / (100 - 1)) + 1
        },
        stepChangeKg() {
            if (this.kg >= 0.5 && this.kg < 10) {
                kg.setAttribute('step', 0.5);
                //this.kg = fixValueKg(parseFloat(this.kg));
            } else if ((this.kg == 10 || this.kg > 10) && this.kg < 50) {
                kg.setAttribute('step', 1);
                //this.kg = fixValueKg(parseFloat(this.kg));
            } else if (this.kg >= 50 && this.kg < 100) {
                kg.setAttribute('step', 5);
                //this.kg = fixValueKg(parseFloat(this.kg));
            } else if (this.kg >= 100 && this.kg < 1000) {
                kg.setAttribute('step', 10);
                //this.kg = fixValueKg(parseFloat(this.kg));
            } else if (this.kg >= 1000 && this.kg < 20000) {
                kg.setAttribute('step', 100);

            }
        },
        cargoVol() {
            if (this.kg / 250 > this.meters) {
                return +this.kg / 250;
            } else {
                return +this.meters;
            }
        },
        cargoWeight() {
            if (this.meters * 250 < this.kg) {
                return +this.kg;
            } else {
                return this.meters * 250;
            }
        },
        neededArr(express) {
            let city1 = this.selected_from_city;
            let city2 = this.selected_to_city;
            // if (city1 === city2 && city1 !== "SPB")  {
            //     this.selected_to_city = "SPB";
            //     city2 = "SPB";
            // } else if (city1 === city2 && city1 !== "MSK") {
            //     this.selected_to_city = "MSK";
            //     city2 = "MSK";
            // }


            let method = 'econom';
            if (express) {
                method = 'express';
            }
            if(this.selected_to_city == this.selected_from_city) {
                return array["MSKtoSPBexpress"];
            }
            let key = city1+'to'+city2+method;

            if ( city1+'to'+city2+'express' in array  && city1+'to'+city2+'econom' in array) {
                this.noExpress = false;
                return array[key];
            } else if (!(city1+'to'+city2+'express' in array) || city1+'to'+city2 in array) {
                this.express = false;
                this.noExpress = true;
                document.getElementById('Ecorad').checked = true;
                key = city1+'to'+city2+'econom';
                if (city1+'to'+city2 in array) {
                    return array[city1+'to'+city2]
                }
                return array[key];
            }
        },
        priceTypeForAD() {
            if (this.cargoVol() > 40) {
                return '40m+';
            } else if (this.cargoVol() > 30) {
                return 'upTo40m';
            } else if (this.cargoVol() > 20) {
                return 'upTo30m';
            } else if (this.cargoVol() > 10) {
                return 'upTo20m';
            } else if (this.cargoVol() > 7) {
                return 'upTo10m'
            } else if (this.cargoVol() > 5) {
                return 'upTo7m';
            } else if (this.cargoVol() > 3) {
                return 'upTo5m';
            } else if (this.cargoVol() > 1) {
                return 'upTo3m';
            } else if (this.cargoVol() > 0.2) {
                return 'upTo1m';
            } else if (this.cargoVol() > 0.1) {
                return 'minP';
            } else if (this.cargoVol() >= 0.01) {
                return 'single';
            } else {
                return 'docs'
            }
        },
        priceForAdWithPackage() {
            let volume = this.cargoVol() * 1.3;
            if (volume > 40) {
                return '40m+';
            } else if (volume > 30) {
                return 'upTo40m';
            } else if (volume > 20) {
                return 'upTo30m';
            } else if (volume > 10) {
                return 'upTo20m';
            } else if (volume > 7) {
                return 'upTo10m'
            } else if (volume > 5) {
                return 'upTo7m';
            } else if (volume > 3) {
                return 'upTo5m';
            } else if (volume > 1) {
                return 'upTo3m';
            } else if (volume >= 0.2) {
                return 'upTo1m';
            }
        },
        priceType() {
            if (this.cargoVol() >= 50) {
                return '50m+';
            } else if (this.cargoVol() > 40) {
                return '40m+';
            } else if (this.cargoVol() > 30) {
                return '30m+';
            } else if (this.cargoVol() > 10) {
                return '10m+';
            } else if (this.cargoVol() > 5) {
                return '5m+';
            } else if (this.cargoVol() > 0.2) {
                return '5m-'
            } else if (this.cargoVol() > 0.1) {
                return 'minP';
            } else if (this.cargoVol() >= 0.01) {
                return 'single';
            } else {
                return 'docs'
            }
        },
        calculator() {
            let volume = this.cargoVol();
            let weight = this.cargoWeight();

            if(this.selected_from_city == this.selected_to_city) {
                this.TT_price = 0;
                let array = this.neededArr(this.express);
                let optPrices = array['price'][this.priceType()];
                let ADprices = array['ADprice'][this.priceTypeForAD()];

                if (true) {
                    this.PRR_to_addr_price = PRRtoAddress * weight / 20;
                    this.PRR_to_addr_price = Math.ceil(this.PRR_to_addr_price / PRRtoAddress) * PRRtoAddress
                }
                if (true) {
                    this.PRR_from_addr_price = PRRfromAddress * weight / 20;
                    this.PRR_from_addr_price = Math.ceil(this.PRR_from_addr_price / PRRtoAddress) * PRRtoAddress;
                }

                if (true) {
                    if (this.worth > 0) {
                        this.insurance_price = 0;
                        if (this.worth <= 2000) {
                            this.insurance_price = 25;
                        } else if (this.worth <= 50000) {
                            this.insurance_price = 28;
                        } else if (this.worth <= 100000) {
                            this.insurance_price = 50;
                        } else {
                            this.insurance_price = this.worth * INSpercent / 100;
                        }
                    } else {
                        if (this.not_big) {
                            this.insurance_price = +optPrices['insurance'];
                        } else {
                            if (optPrices['insPerKG'] * weight < minInsurance) {
                                this.insurance_price = minInsurance;
                            } else {
                                this.insurance_price = +optPrices['insPerKG'] * weight
                            }
                        }
                    }
                }
                if (true) {
                    if (this.not_big) {
                        this.bort_pac_price = +optPrices['bort'];
                    } else {
                        if (optPrices['bort'] * volume < minBort) {
                            this.bort_pac_price = minBort;
                        } else {
                            this.bort_pac_price = +optPrices['bort'] * volume;
                        }
                    }
                }
                if (true) {
                    if (this.not_big) {
                        this.stretch_pac_price = +optPrices['stretchPac'];
                    } else {
                        if (optPrices['stretchPac'] * volume < minStretch) {
                            this.stretch_pac_price = minStretch;
                        } else {
                            this.stretch_pac_price = +optPrices['stretchPac'] * volume;
                        }
                    }
                }
                if (true) {
                    if (this.not_big) {
                        this.rig_pac_price = +optPrices['rigidPac'];
                    } else {
                        if (optPrices['rigidPac'] * volume < minRigidPac) {
                            this.rig_pac_price = minRigidPac;

                        } else {
                            this.rig_pac_price = +optPrices['rigidPac'] * volume;
                        }
                    }
                }
                if (true) {
                    this.from_addr_price = this.calculateAD('from');
                }
                if (true) {
                    this.to_addr_price = this.calculateAD('to');
                }
            } else {

                let array = this.neededArr(this.express);
                let optPrices = array['price'][this.priceType()];
                let ADprices = array['ADprice'][this.priceTypeForAD()];

                if (this.rig_pac || this.bort_pac) {
                    let volumeWithPackage = volume * 1.3;

                    if (this.not_big) {
                        this.TT_price = optPrices['send'];
                        if (this.heaviest > 999 || this.longest > 120) {
                            this.TT_price = this.TT_price * OversizeTerm;

                        }
                    } else {
                        this.TT_price = optPrices['forunit'] * volumeWithPackage;
                        if (this.oversize) {
                            this.TT_price = this.TT_price * OversizeTerm;

                        }
                    }
                } else {
                    // Transportation T-T
                    if (this.not_big) {
                        this.TT_price = optPrices['send'];
                        if (this.oversize) {
                            this.TT_price = this.TT_price * OversizeTerm;

                        }
                    } else {
                        this.TT_price = optPrices['forunit'] * volume;
                        if (this.oversize) {
                            this.TT_price = this.TT_price * OversizeTerm;
                        }
                    }
                }

                if(this.selected_to_city != "MSK" && this.selected_to_city != "SPB") {
                    if (weight < 125 || volume < 0.5) {
                        this.TT_price = mins[this.selected_from_city+'to'+this.selected_to_city];
                    }
                }else if (mins[this.selected_from_city+'to'+this.selected_to_city] > this.TT_price) {
                    this.TT_price = mins[this.selected_from_city+'to'+this.selected_to_city];
                }

                if (true) {
                    this.PRR_to_addr_price = PRRtoAddress * weight / 20;
                    this.PRR_to_addr_price = Math.ceil(this.PRR_to_addr_price / PRRtoAddress) * PRRtoAddress
                }
                if (true) {
                    this.PRR_from_addr_price = PRRfromAddress * weight / 20;
                    this.PRR_from_addr_price = Math.ceil(this.PRR_from_addr_price / PRRtoAddress) * PRRtoAddress;
                }
                if (true) {
                    if (this.worth > 0) {
                        this.insurance_price = 0;
                        if (this.worth <= 2000) {
                            this.insurance_price = 25;
                        } else if (this.worth <= 50000) {
                            this.insurance_price = 28;
                        } else if (this.worth <= 100000) {
                            this.insurance_price = 50;
                        } else {
                            this.insurance_price = this.worth * INSpercent / 100;
                        }
                    } else {
                        if (this.not_big) {
                            this.insurance_price = +optPrices['insurance'];
                        } else {
                            if (optPrices['insPerKG'] * weight < minInsurance) {
                                this.insurance_price = minInsurance;
                            } else {
                                this.insurance_price = +optPrices['insPerKG'] * weight
                            }
                        }
                    }
                }
                if (true) {
                    if (this.not_big) {
                        this.bort_pac_price = +optPrices['bort'];
                    } else {
                        if (optPrices['bort'] * volume < minBort) {
                            this.bort_pac_price = minBort;
                        } else {
                            this.bort_pac_price = +optPrices['bort'] * volume;
                        }
                    }
                }
                if (true) {
                    if (this.not_big) {
                        this.stretch_pac_price = +optPrices['stretchPac'];
                    } else {
                        if (optPrices['stretchPac'] * volume < minStretch) {
                            this.stretch_pac_price = minStretch;
                        } else {
                            this.stretch_pac_price = +optPrices['stretchPac'] * volume;
                        }
                    }
                }
                if (true) {
                    if (this.not_big) {
                        this.rig_pac_price = +optPrices['rigidPac'];
                    } else {
                        if (optPrices['rigidPac'] * volume < minRigidPac) {
                            this.rig_pac_price = minRigidPac;

                        } else {
                            this.rig_pac_price = +optPrices['rigidPac'] * volume;
                        }
                    }
                }
                if (true) {
                    this.from_addr_price = this.calculateAD('from');
                }
                if (true) {
                    this.to_addr_price = this.calculateAD('to');
                }
            }
            this.TT_price = Math.round(this.TT_price);
            this.from_addr_price = Math.round(this.from_addr_price);
            this.to_addr_price = Math.round(this.to_addr_price);
            this.stretch_pac_price = Math.round(this.stretch_pac_price);
            this.rig_pac_price = Math.round(this.rig_pac_price);
            this.bort_pac_price = Math.round(this.bort_pac_price);
            this.insurance_price = Math.round(this.insurance_price / 2) * 2;
            this.PRR_from_addr_price = Math.round(this.PRR_from_addr_price);
            this.PRR_to_addr_price = Math.round(this.PRR_to_addr_price);
            // Options
            this.total = this.TT_price;
            if (this.with_addr_from) {
                this.total += this.from_addr_price;
            }
            if (this.with_addr_to) {
                this.total += this.to_addr_price;
            }
            if (this.stretch_pac) {
                this.total += this.stretch_pac_price;
            }
            if (this.rig_pac) {
                this.total += this.rig_pac_price;
            }
            if (this.bort_pac) {
                this.total += this.bort_pac_price;
            }
            if (this.insurance) {
                this.total += this.insurance_price;
            }
            if (this.PRR_from_addr) {
                this.total += this.PRR_from_addr_price;
            }
            if (this.PRR_to_addr) {
                this.total += this.PRR_to_addr_price;
            }
            this.calculateSubs();
            this.dates_calc();
        },
        calculateSubs(whoPays) {
            for (let pays in this.payments) {
                this.payments[pays].subtotal = 0;
                if (this.payments[pays].pay_TT) {
                    this.payments[pays].subtotal += this.TT_price;
                }
                if (this.payments[pays].pay_pac)  {
                    this.payments[pays].subtotal += this.packagePrice;
                }
                if (this.payments[pays].pay_ins) {
                    this.payments[pays].subtotal += this.insurance_price;
                }
                if (this.payments[pays].pay_del_from_addr) {
                    this.payments[pays].subtotal += this.from_addr_price;
                }
                if (this.payments[pays].pay_del_to_addr) {
                    this.payments[pays].subtotal += this.to_addr_price;
                }
                if (this.payments[pays].pay_PRR_from_addr) {
                    this.payments[pays].subtotal  +=  this.PRR_from_addr_price;
                }
                if (this.payments[pays].pay_PRR_to_addr) {
                    this.payments[pays].subtotal += this.PRR_to_addr_price;
                }
                if (this.payments[pays].pay_all) {
                    this.payments[pays].subtotal = this.total;
                    for (let payer in this.payments) {
                        this.payments[payer].pay_TT = false;
                        this.payments[payer].pay_pac = false;
                        this.payments[payer].pay_ins  = false;
                        this.payments[payer].pay_del_to_addr = false;
                        this.payments[payer].pay_del_from_addr = false;
                        this.payments[payer].pay_PRR_to_addr = false;
                        this.payments[payer].pay_PRR_from_addr = false;
                    }
                }
                if (whoPays) {
                    this.choosePayment(whoPays);
                }
            }
        },
        dates_calc() {
            if (this.selected_to_city == 'MSK' || this.selected_to_city == 'SPB') {
                this.getDepTimeEconom();
                this.getDepTimeExpress();
                return 0;
            }
            let date = new Date();
            let arrival_date1 = new Date(date.getFullYear(), date.getMonth(), date.getDate()+delivery_time[this.selected_from_city + 'to' + this.selected_to_city]['from'], 0, 0 , 0);
            let arrival_date2 = new Date(date.getFullYear(), date.getMonth(), date.getDate()+delivery_time[this.selected_from_city + 'to' + this.selected_to_city]['to'], 0, 0 , 0);

            this.arr_eco_text = 'ЭКОНОМ: Груз будет доставлен' + ' ' + arrival_date1.getDate() + " - "+ arrival_date2.getDate() +" " + months[arrival_date2.getMonth()];
            this.dep_eco_text ='';
            this.dep_exp_text ='';
            this.arr_exp_text ='';

        },
        changeCities() {
            let city1  = this.selected_from_city;
            this.selected_from_city = this.selected_to_city;
            this.selected_to_city = city1;
        },
        getDepTimeEconom() {
            let now = new Date();
            let hour = now.getUTCHours();
            let date = now.getUTCDate();
            let month = now.getUTCMonth();
            if (hour + 3 >= 24) {
                hour = 0;
                date += 1;
            }
            if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                date = 1;
                month += 1;
                hour = 0;
            }

            hour += 3;

            while (dayOff[month].includes(date)) {
                date += 1;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                        date = date - 31;
                        month += 1;
                    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                        date = date - 30;
                        month += 1;
                    } else if (month == 1) {
                        date = date - 28;
                        month += 1;
                    }
                }
                if (month > 11) {
                    month = 0;
                }
                hour = 0;
            }


            if (hour >= 21) {


                date += 1;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                        date = date - 31;
                        month += 1;
                    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                        date = date - 30;
                        month += 1;
                    } else if (month == 1) {
                        date = date - 28;
                        month += 1;
                    }
                }
                if (month > 11) {
                    month = 0;
                }
                if ((date <= this.getDepTimeExpress() - 1) || (date == 30 && this.getDepTimeExpress() == 1) || (date == 28 && this.getDepTimeExpress() == 1)) {
                    date++;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }

                this.dep_eco_text = 'ЭКОНОМ: Машина выезжает в 21:00' + ' ' + date + " " + months[month];
                date++;


                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    date = 1;
                    month += 1;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }
                this.arr_eco_text = 'ЭКОНОМ: Груз будет доставлен в 10:00' + ' ' + date + " " + months[month];
            } else {
                if ((date <= this.getDepTimeExpress() - 1) || (date == 30 && this.getDepTimeExpress() == 1) || (date == 28 && this.getDepTimeExpress() == 1)) {
                    date++;
                }

                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    date = 1;
                    month += 1;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }
                this.dep_eco_text = 'ЭКОНОМ: Машина выезжает в 21:00' + ' ' + date + " " + months[month];
                date++;


                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    date = 1;
                    month += 1;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }


                this.arr_eco_text = 'ЭКОНОМ: Груз будет доставлен в 10:00' + ' ' + date + " " + months[month];
                return date;
            }




        },
        getDepTimeExpress() {
            let now = new Date();
            let hour = now.getUTCHours();
            let date = now.getUTCDate();
            let month = now.getUTCMonth();
            if (hour + 3 >= 24) {
                hour = 0;
                date += 1;
            }
            if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                date = 1;
                month += 1;
                hour = 0;
            }

            hour += 3;

            while (dayOff[month].includes(date)) {
                date += 1;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                        date = date - 31;
                        month += 1;
                    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                        date = date - 30;
                        month += 1;
                    } else if (month == 1) {
                        date = date - 28;
                        month += 1;
                    }
                }
                if (month > 11) {
                    month = 0;
                }
                hour = 0;
            }

            if (hour >= 21) {
                date += 1;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                        date = date - 31;
                        month += 1;
                    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                        date = date - 30;
                        month += 1;
                    } else if (month == 1) {
                        date = date - 28;
                        month += 1;
                    }
                }
                if (month > 11) {
                    month = 0;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }

                this.dep_exp_text = 'ЭКСПРЕСС: Машина выезжает в 21:00' + ' ' + date + " " + months[month];
                date++;


                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    date = 1;
                    month += 1;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }
                this.arr_exp_text = 'ЭКСПРЕСС: Груз будет доставлен в 10:00' + ' ' + date + " " + months[month];
                return date;
            } else {
                this.dep_exp_text = 'ЭКСПРЕСС: Машина выезжает в 21:00' + ' ' + date + " " + months[month];
                date++;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    date = 1;
                    month += 1;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }
                this.arr_exp_text = 'ЭКСПРЕСС: Груз будет доставлен в 10:00' + ' ' + date + " " + months[month];
                return date;
            }
        },
        timer() {
            let now = new Date();
            let year = now.getFullYear();
            let hour = now.getUTCHours();
            let date = now.getUTCDate();
            let month = now.getUTCMonth();
            if (hour + 3 >= 24) {
                hour = 0;
                date += 1;
            }
            if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                date = 1;
                month += 1;
                hour = 0;
            }
            hour += 3;
            while (dayOff[month].includes(date)) {
                date += 1;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                        date = date - 31;
                        month += 1;
                    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                        date = date - 30;
                        month += 1;
                    } else if (month == 1) {
                        date = date - 28;
                        month += 1;
                    }
                }
                if (month > 11) {
                    month = 0;
                }
                hour = 0;
            }
            if (hour >= 21) {
                date += 1;
                if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                        date = date - 31;
                        month += 1;
                    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                        date = date - 30;
                        month += 1;
                    } else if (month == 1) {
                        date = date - 28;
                        month += 1;
                    }
                }
                if (month > 11) {
                    month = 0;
                }
                while (dayOff[month].includes(date)) {
                    date = date + 1;
                    if ((date > 31 && (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11)) || (date > 30 && (month == 3 || month == 5 || month == 8 || month == 10)) || ((date > 28) && (month == 1))) {
                        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                            date = date - 31;
                            month += 1;
                        } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                            date = date - 30;
                            month += 1;
                        } else if (month == 1) {
                            date = date - 28;
                            month += 1;
                        }
                    }
                    if (month > 11) {
                        month = 0;
                    }
                }
                let time = new Date();
                let year1 = time.getFullYear();
                let month1 = time.getMonth();
                let date1 = time.getDate();
                let hour1 = time.getHours();
                let minutes1 = time.getMinutes();
                let time1 = new Date(year1, month1, date1, hour1, minutes1);
                let time2 = new Date(year, month, date, 21);
                let different = time2 - time1;
                let days = Math.floor(different/86400000);
                let hours = Math.floor((different % 86400000) / 3600000);
                let minutes = Math.round(((different % 86400000) % 3600000) / 60000);
                let result = '';
                if (days >= 1) {
                    result = days+' день  '+hours + ' часов  ' + minutes+ ' минут';
                } else {
                    result = hours + ' часов  ' + minutes+ ' минут';
                }
                this.dep_exp_text = 'ЭКСПРЕСС: Машина выезжает через  ' + result;
            } else {
                let time = new Date();
                let year1 = time.getFullYear();
                let month1 = time.getMonth();
                let date1 = time.getDate();
                let hour1 = time.getHours();
                let minutes1 = time.getMinutes();
                let time1 = new Date(year1, month1, date1, hour1, minutes1);
                let time2 = new Date(year, month, date, 21);
                let different = time2 - time1;
                let days = Math.floor(different/86400000);
                let hours = Math.floor((different % 86400000) / 3600000);
                let minutes = Math.round(((different % 86400000) % 3600000) / 60000);
                let result = '';
                if (days >= 1) {
                    result = days+' день  '+hours + ' часов  ' + minutes+ ' минут';
                } else {
                    result = hours + ' часов  ' + minutes+ ' минут';
                }
                this.dep_exp_text = 'ЭКСПРЕСС: Машина выезжает через  ' + result;
            }
        },
        dateManage() {
            let time = new Date();
            let year1 = time.getFullYear();
            let month1 = time.getMonth();
            let date1 = time.getDate();
            let m1 = month1+1;
            if (m1 < 10) {
                m1 = '0'+m1;
            }
            this.min_date_from = year1 + '-' + m1 + '-' + date1;
            this.min_date_to = year1 + '-' + m1 + '-' + date1;

            let m2 = month1 + 2;
            let y = year1;
            if (m2 >= 12) {
                y  += 1;
                m2 = 1
            }
            if (m2 < 10) {
                m2 = '0'+m2;
            }
            this.max_date_from = y + '-' + m2 + '-' + date1;
            this.max_date_to = y + '-' + m2 + '-' + date1;
        },
        timeManage(count) {
            let difference = 0;
            if (this.from_fixed_time == true || this.to_fixed_time == true) {
                difference = 2;
            } else  {
                difference = 4;
            }
            if (count == 1) {
                let arr1 = this.from_time_from_addr.split(':');
                let h1 = parseInt(arr1[0]) + difference;
                let m1 = arr1[1];
                if (h1 >= 24) {
                    h1 = h1 % 24;
                }
                if (h1<10) {
                    h1 = '0'+h1;
                }
                this.to_time_from_addr = h1+':'+m1;
            } else {
                let arr2 = this.from_time_to_addr.split(':');
                let h2 = parseInt(arr2[0]) + difference;
                let m2 = arr2[1];
                if (h2 >= 24) {
                    h2 = h2 % 24;
                }
                if (h2<10) {
                    h2 = '0'+h2;
                }
                this.to_time_to_addr = h2+':'+m2;
            }

        },
        choosePayment(payer) {
            if (payer === 'sender') {
                for (let  payinp in this.payments.sender) {
                    if (this.payments.sender[payinp] && payinp !== 'subtotal' && payinp !== 'INN' && payinp !== 'company' && payinp !== 'tel' && payinp !== 'email' && payinp !== 'name') {
                        this.payments.receiver[payinp] = false;
                        this.payments.third_party[payinp] = false;
                    }
                }
            } else if (payer === 'receiver') {
                for (let  payinp in this.payments.receiver) {
                    if (this.payments.receiver[payinp] && payinp !== 'subtotal' && payinp !== 'INN' && payinp !== 'company' && payinp !== 'tel' && payinp !== 'email' && payinp !== 'name') {
                        this.payments.sender[payinp] = false;
                        this.payments.third_party[payinp] = false;
                    }
                }
            } else if (payer === 'third_party') {
                for (let  payinp in this.payments.third_party) {
                    if (this.payments.third_party[payinp] && payinp !== 'subtotal' && payinp !== 'INN' && payinp !== 'company' && payinp !== 'tel' && payinp !== 'email' && payinp !== 'name') {
                        this.payments.receiver[payinp] = false;
                        this.payments.sender[payinp] = false;
                    }
                }
            }
        },
        async addressProps(query) {
            var url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address";
            var token = "41753b88fcd51e0b8fb2e83a08a0bfc0212637be";

            var options = {
                method: "POST",
                mode: "cors",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Authorization": "Token " + token
                },
                body: JSON.stringify({query: query})
            }
            let response = await fetch(url, options)
            let result = await response.json();
            this.Addrprops = result.suggestions;

        },
        sortCities() {
            let arr = [];
            for (let city in this.to_cities) {
                arr.push(this.to_cities[city].name);
            }
            arr = arr.sort(function(x,y) {
                if (x == 'Москва' || x =='Санкт-Петербург' || y == 'Москва' || y =='Санкт-Петербург' ) {
                } else {
                    return x.localeCompare(y);
                }

            });
            console.log(arr);
            let citiessorted = {};
            for (name of arr) {
                for (let city in this.to_cities) {
                    if (this.to_cities[city].name == name) {
                        citiessorted[city]=  {
                            name: this.to_cities[city].name,
                            code: this.to_cities[city].code
                        };
                    }

                }}
            this.to_cities = citiessorted
        }

    },
    computed: {
        packagePrice() {
            let price = 0;
            if (this.bort_pac) {
                price += this.bort_pac_price;
            }
            if (this.rig_pac) {
                price += this.rig_pac_price;
            }
            if (this.stretch_pac) {
                price += this.stretch_pac_price;
            }
            return  price;
        },
        not_big() {
            return (this.priceType() == "minP" || this.priceType() == "single" || this.priceType() == "docs");
        },
        oversize() {
            return (this.heaviest > OversizeKG || this.longest > Oversize)
        },
        package_price() {
            return this.stretch_pac_price+this.rig_pac_price+this.bort_pac_price;
        },
        stepm() {
            if (this.meters >= 0 && this.meters < 0.5) {
                return 0.01;
            } else if (this.meters >= 0.5 && this.meters < 5) {
                return 0.1;
            } else if (this.meters >= 5 && this.meters < 10) {
                return 0.5;
            } else if (this.meters >= 10 && this.meters < 80) {
                return 1;
            }
        },
        stepkg() {
            if (this.kg >= 0.5 && this.kg < 10) {
                return 0.5;
            } else if ((this.kg === 10 || this.kg > 10) && this.kg < 50) {
                return 1;
            } else if (this.kg >= 50 && this.kg < 100) {
                return 5;
            } else if (this.kg >= 100 && this.kg < 1000) {
                return 10;
            } else if (this.kg >= 1000 && this.kg < 20000) {
                return 100;

            }
        },
        stepheaviest() {
            if (this.heaviest >= 0 && this.heaviest < 30) {
                return 1;
            } else if (this.heaviest >= 30 && this.heaviest < 100) {
                return 5;
            } else if (this.heaviest >= 100 && this.heaviest < 1000) {
                return 50;
            }
        },
        steplongest() {
            if (this.longest >= 0 && this.longest < 50) {
                return 5;
            } else if (this.longest >= 50 && this.longest < 90) {
                return 10;
            } else if (this.longest >= 90 && this.longest < 300) {
                return 20;
            }
        },
        payAllChosen() {
            return this.payments.sender.pay_all || this.payments.receiver.pay_all || this.payments.third_party.pay_all
        },
        to_addr_selected()   {
            return this.with_addr_to;
        },
        to_term_selected() {
            return !this.with_addr_to;
        },
        from_term_selected() {
            return !this.with_addr_from;
        },
        from_addr_selected() {
            return this.with_addr_from;
        },

    },
    created() {
        this.calculator();
        this.getDepTimeExpress();
        this.getDepTimeEconom();
        this.timer();
        this.dateManage();
        setInterval(this.timer, 1000 * 60);
        this.payments;
        this.sortCities();
    },
    watch:  {
        payments: {
            deep: true,
            handler(newVal, oldVal) {
                let url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/party";
                let token = "41753b88fcd51e0b8fb2e83a08a0bfc0212637be";

                for (let payer in this.payments) {
                    if (this.payments[payer].INN === '') {
                        this.payments[payer].company  =  '';
                    }  else  {
                        let query = this.payments[payer].INN;
                        let options = {
                            method: "POST",
                            mode: "cors",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "Authorization": "Token " + token
                            },
                            body: JSON.stringify({query: query})
                        }

                        fetch(url, options)
                            .then(response => response.text())
                            .then(result => this.payments[payer].company = JSON.parse(result)['suggestions'][0].value)
                            .catch(error => console.log("error", error));
                    }

                }
            }
        },
        addressTo: function (newVal, oldVal) {
            setTimeout(this.addressProps(newVal), 300);
            this.addressToProps = this.Addrprops;
        },
        addressFrom: function (newVal, oldVal) {
            setTimeout(this.addressProps(newVal), 300);
            this.addressFromProps = this.Addrprops;
        },
        from_time_from_addr: function (newVal, oldVal) {
            this.timeManage(1);
        },
        from_time_to_addr: function (newVal, oldVal) {
            this.timeManage(2);
        },
        express: function (newVal, oldVal) {
            this.calculator();
        },
        selected_from_city: function (newVal, oldVal) {
            this.calculator();
        },
        selected_to_city: function (newVal, oldVal) {
            this.calculator();
        },
        kg: function (newVal, oldVal) {
            this.calculator();
        },
        meters: function (newVal, oldVal) {
            this.calculator();
        },
        pieces: function (newVal, oldVal) {
            this.calculator();
        },
        heaviest: function (newVal, oldVal) {
            this.calculator();
        },
        longest: function (newVal, oldVal) {
            this.calculator();
        },
        to_fixed_time: function (newVal, oldVal) {
            this.calculator();
            this.timeManage(2)
        },
        from_fixed_time: function (newVal, oldVal) {
            this.calculator();
            this.timeManage(1)
        },
        rig_pac: function (newVal, oldVal) {
            this.calculator();
        },
        stretch_pac: function (newVal, oldVal) {
            this.calculator();
        },
        bort_pac: function (newVal, oldVal) {
            this.calculator();
        },
        insurance: function (newVal, oldVal) {
            this.calculator();
        },
        worth: function (newVal, oldVal) {
            this.calculator();
        },
        with_addr_from: function (newVal, oldVal) {
            this.calculator();
        },
        with_addr_to: function (newVal, oldVal) {
            this.calculator();
        },
        PRR_to_addr: function (newVal, oldVal) {
            this.calculator();
        },
        PRR_from_addr: function (newVal, oldVal) {
            this.calculator();
        },


    }
}
</script>

<style scoped>

</style>
