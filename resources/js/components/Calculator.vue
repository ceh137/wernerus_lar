<template>
    <div id="section-order" class="uk-section uk-section-muted">
        <div class="uk-container">
            <h1 class="uk-h1">Оформить заявку</h1>
        </div>
        <form v-on:submit.prevent="" action="sendinfo.php" method="post"
              class="odrer-form" id="form">
            <div class="uk-container order-row-1">
                <div class="uk-h2">Дата и направление перевозки</div>
                <div class="uk-grid-medium uk-flex-center uk-grid"
                     uk-height-match="target: &gt; div &gt; .uk-card"
                     uk-grid="">
                    <div class="uk-width-expand@m col-1">
                        <div class="uk-card">
                            <div class="uk-h4 first-ttl">Откуда</div>
                            <select v-on:change="calculator()"
                                    v-model="selected_from_city" id="city1"
                                    name="from_city" class="form-select uk-select
form-select uk-select-lg mb-3"
                                    aria-label=".form-select uk-select-lg example">
                                <option v-for="city in from_cities"
                                        :value="city.code">{{ city.name }}</option>
                            </select>
                            <div v-if="!(selected_from_city === 'Москва' ||
selected_from_city === 'Санкт-Петербург')"
                                 class="uk-text-result uk-margin">
                                <div id="DepEco" class="uk-text">{{ dep_eco_text }}</div>
                                <div id="DepExpress" class="uk-text">{{ dep_exp_text
                                    }}</div>
                            </div>
                            <div class="form-row-check uk-margin-small">
                                <div class="form-check"> <input
                                    v-on:input="calculator()"
                                    v-on:change="changeFromAddress()"
                                    :checked="from_addr_selected"
                                    class="form-check-input uk-radio" name="fromrad"
                                    value="from_address_radio" id="fromAddress"
                                    type="radio"> <label class="form-check-label"
                                                         for="fromAddress"> От адреса </label> </div>
                                <div class="form-check"> <input
                                    v-on:input="calculator()"
                                    v-on:change="changeFromAddress()"
                                    :checked="from_term_selected"
                                    class="form-check-input uk-radio" name="fromrad"
                                    value="from_terminal_radio" id="fromTerminal"
                                    type="radio"> <label class="form-check-label"
                                                         for="fromTerminal"> От терминала </label> </div>
                            </div>
                            <div v-if="with_addr_from" class="form-row-control
uk-margin-small-top" id="fromTerminal-row">
                                <div class="uk-margin-small uk-grid-small"
                                     uk-grid="">
                                    <div class="uk-width-1-1"> <input
                                        v-model="addressFrom"
                                        v-on:blur="unfocusAddress('from')"
                                        list="addrFromList" class="form-control
uk-input my-2" id="addressFrom" required=""
                                        name="address_from" placeholder="Адрес"
                                        aria-label="адрес" type="text"> <datalist
                                        id="addrFromList">
                                        <option v-for="address in addressFromProps">
                                            {{address.value}}</option>
                                    </datalist> </div>
                                    <div class="uk-width-1-1"> <input
                                        class="form-control uk-input"
                                        v-model="date_from" :min="min_date_from"
                                        :max="max_date_from" id="dateFrom"
                                        placeholder="Дата" name="date_from"
                                        aria-label="адрес" type="date"> </div>
                                </div>
                                Доставка по городу осуществляется в рабочие дни в
                                рабочее время. Стоимость и возможность доставки во
                                временной интервал необходимо согласовывать
                                дополнительно.<br>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium@m uk-flex uk-flex-center@m
col-2">
                        <div class="uk-card"> <button type="button"
                                                      v-on:click="changeCities()" id="changeCities"
                                                      class="uk-button uk-button-default"></button>
                            <div class="form-check form-check-row-2" align="left">
                                <input v-on:input="calculator()" v-model="econom"
                                       v-on:click="changeExpress()"
                                       class="form-check-input uk-radio" name="rad"
                                       id="Ecorad" type="checkbox"> <label
                                class="form-check-label" for="Ecorad"> ЭКОНОМ </label>
                            </div>
                            <div class="form-check form-check-row-1" align="left">
                                <input v-on:input="calculator()" v-model="express"
                                       v-on:click="changeExpress()"
                                       class="form-check-input uk-radio" :disabled="noExpress" name="rad"
                                       id="Expressrad" type="checkbox"> <label
                                class="form-check-label" for="Expressrad">
                                ЭКСПРЕСС </label>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand@m col-3">
                        <div class="uk-card">
                            <div class="uk-h4 first-ttl">Куда</div>
                            <select v-on:chnage="calculator()"
                                    v-model="selected_to_city" id="city2" name="to_city"
                                    class="form-select uk-select form-select
uk-select-lg mb-3" aria-label=".form-select
uk-select-lg example">
                                <option v-for="city in to_cities" :value="city.code">{{
                                        city.name }}</option>
                            </select>
                            <div class="uk-text-result uk-margin">
                                <div id="arrEco" class="uk-text">{{ arr_eco_text }}</div>
                                <div id="arrExpress" class="uk-text">{{ arr_exp_text
                                    }}</div>
                            </div>
                            <div class="form-row-check uk-margin-small">
                                <div class="form-check"> <input
                                    v-on:input="calculator()"
                                    v-on:change="changeToAddress()"
                                    :checked="to_addr_selected"
                                    class="form-check-input uk-radio" name="torad"
                                    id="toAddress" type="radio"> <label
                                    class="form-check-label" for="toAddress"> До
                                    адреса </label> </div>
                                <div class="form-check"> <input
                                    v-on:input="calculator()"
                                    v-on:change="changeToAddress()"
                                    :checked="to_term_selected"
                                    class="form-check-input uk-radio" name="torad"
                                    id="toTerminal" type="radio"> <label
                                    class="form-check-label" for="toTerminal"> До
                                    терминала </label> </div>
                            </div>
                            <div v-if="with_addr_to" class="form-row-control
uk-margin-small-top" id="toTerminal-row">
                                <div class="uk-margin-small uk-grid-small"
                                     uk-grid="">
                                    <div class="uk-width-1-1"> <input
                                        v-model="addressTo"
                                        v-on:blur="unfocusAddress('to')"
                                        list="addressToList" class="form-control
uk-input my-2" id="addressTo"
                                        name="address_to" placeholder="Адрес"
                                        aria-label="адрес" type="text"> <datalist
                                        id="addressToList">
                                        <option v-for="address in addressToProps">{{
                                                address.value }}</option>
                                    </datalist> </div>
                                    <div class="uk-width-1-1"> <input
                                        class="form-control uk-input"
                                        v-model="date_to" :min="min_date_to"
                                        :max="max_date_to" id="dateTo"
                                        placeholder="Дата" aria-label="адрес"
                                        type="date"> </div>
                                </div>
                                Доставка по городу осуществляется в рабочие дни в
                                рабочее время. Стоимость и возможность доставки во
                                временной интервал необходимо согласовывать
                                дополнительно.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section uk-section-default order-row-2">
                <div class="uk-container">
                    <div class="uk-h2">Информация о грузе</div>
                    <div class="uk-grid-medium uk-child-width-1-2
uk-child-width-1-5@m uk-flex-center uk-grid" uk-grid="">
                        <div>
                            <div class="uk-h4">Вес груза</div>
                            <div class="input-group"> <input
                                v-on:input="logInputKg()" :step="stepkg"
                                v-model="kg" id="kg" class="form-control uk-input"
                                name="kilos" aria-label="Sizing example input"
                                aria-describedby="labelkg" type="number"> <span
                                class="input-group-text" id="labelkg">кг</span> </div>
                            <label for="kgRange" class="form-label"></label> <input
                            v-on:input=" logsliderKg()" v-model="range.kg"
                            min="0" max="100" step="0.5" class="form-range"
                            id="kgRange" type="range"> </div>
                        <div>
                            <div class="uk-h4">Обьем груза</div>
                            <div class="input-group"> <input v-on:input="
logInputM()" v-model="meters" :step="stepm"
                                                             id="meters" class="form-control uk-input"
                                                             name="meters" step="0.01" min="1" max="80"
                                                             aria-label="Sizing example input"
                                                             aria-describedby="labelmeters" type="number"> <span
                                class="input-group-text" id="labelmeters">м<sup>3</sup></span>
                            </div>
                            <label for="metersRange" class="form-label"></label> <input
                            v-on:input=" logsliderM()" v-model="range.meters"
                            min="0" max="100" step="0.01" class="form-range"
                            id="metersRange" type="range"> </div>
                        <div>
                            <div class="uk-h4">Кол-во мест</div>
                            <div class="input-group"> <input
                                v-on:input="logInputPieces()" v-model="pieces"
                                :step="steppieces" id="pieces" class="form-control
uk-input" name="pieces" step="1" min="0" max="150"
                                aria-label="Sizing example input"
                                aria-describedby="labelpieces" type="number"> <span
                                class="input-group-text" id="labelpieces">шт</span>
                            </div>
                            <label for="piecesrange" class="form-label"></label> <input
                            v-on:input=" logsliderPieces()"
                            v-model="range.pieces" min="0" max="100" step="1"
                            class="form-range" id="piecesrange" type="range"> </div>
                        <div>
                            <div class="uk-h4">Самое тяжелое место</div>
                            <div class="input-group"> <input v-on:input="
logInputHeaviest()" v-model="heaviest"
                                                             :step="stepheaviest" id="heaviest"
                                                             class="form-control uk-input" name="heaviest"
                                                             step="1" min="0" max="1000" aria-label="Sizing
example input" aria-describedby="lableheaviest"
                                                             type="number"> <span class="input-group-text"
                                                                                  id="lableheaviest">кг</span> </div>
                            <label for="heaviestRange" class="form-label"></label>
                            <input v-on:input=" logsliderHeaviest()"
                                   v-model="range.heaviest" min="1" max="100" step="1"
                                   class="form-range" id="heaviestRange" type="range">
                        </div>
                        <div>
                            <div class="uk-h4">Самое длинное</div>
                            <div class="input-group"> <input
                                v-on:input="logInputLongest()" v-model="longest"
                                :step="steplongest" id="longest"
                                class="form-control uk-input" name="longest"
                                step="1" min="0" max="300" aria-label="Sizing
example input" aria-describedby="basic-addon2"
                                type="number"> <span class="input-group-text"
                                                     id="basic-addon2">см</span> </div>
                            <label for="longestRange" class="form-label"></label>
                            <input v-on:input="logsliderLongest()"
                                   v-model="range.longest" min="0" max="100"
                                   step="0.01" class="form-range" id="longestRange"
                                   type="range"> </div>
                    </div>
                    <div class="form-row-check uk-margin-top">
                        <div class="form-check"> <input v-model="with_addr_to"
                                                        v-on:change="toAddr()" class="form-check-input
uk-checkbox check" name="options[]" id="check1"
                                                        type="checkbox"> <label class="form-check-label"
                                                                                for="check1" id="labelFor1"> Доставка груза до
                            адреса {{ to_addr_price.toLocaleString('ru-Ru') }}
                            руб. </label> </div>
                        <div class="form-check"> <input
                            v-model="with_addr_from" v-on:change="fromAddr()"
                            class="form-check-input uk-checkbox check"
                            name="options[]" id="check2" type="checkbox"> <label
                            class="form-check-label" for="check2" id="labelFor2">
                            Забор груза от адреса {{
                                from_addr_price.toLocaleString('ru-Ru') }} руб. </label>
                        </div>
                        <div class="form-check"> <input v-model="rig_pac"
                                                        v-on:click="rigClick()" class="form-check-input
uk-radio check package" name="options[]" id="check3"
                                                        type="checkbox"> <label class="form-check-label"
                                                                                for="check3" id="labelFor3"> Жесткая упаковка {{
                                rig_pac_price.toLocaleString('ru-Ru') }} руб. </label>
                        </div>
                        <div class="form-check"> <input v-model="stretch_pac"
                                                        class="form-check-input uk-checkbox check"
                                                        name="options[]" id="check4" type="checkbox"> <label
                            class="form-check-label" for="check4" id="labelFor4">
                            Упаковка в стретч-пленку {{
                                stretch_pac_price.toLocaleString('ru-Ru') }} руб. </label>
                        </div>
                        <div class="form-check"> <input v-model="bort_pac"
                                                        v-on:click="bortClick()" class="form-check-input
uk-radio check package" name="options[]" id="check5"
                                                        type="checkbox"> <label class="form-check-label"
                                                                                for="check5" id="labelFor5"> Упаковка в паллет-борт
                            {{ bort_pac_price.toLocaleString('ru-Ru') }} руб. </label>
                        </div>
                        <div class="form-check"> <input v-model="insurance"
                                                        class="form-check-input uk-checkbox check"
                                                        name="options[]" id="check6" type="checkbox"> <label
                            class="form-check-label" for="check6" id="labelFor6">
                            Страховка {{ insurance_price.toLocaleString('ru-Ru')
                            }} руб. </label> </div>
                        <div class="form-check"> <input v-model="PRR_from_addr"
                                                        class="form-check-input uk-checkbox check"
                                                        name="options[]" id="check7" type="checkbox"> <label
                            class="form-check-label" for="check7" id="labelFor7">
                            ПРР при заборе груза {{
                                PRR_from_addr_price.toLocaleString('ru-Ru') }} руб.
                        </label> </div>
                        <div class="form-check"> <input v-model="PRR_to_addr"
                                                        class="form-check-input uk-checkbox check"
                                                        name="options[]" id="check8" type="checkbox"> <label
                            class="form-check-label" for="check8" id="labelFor8">
                            ПРР при доставке груза {{
                                PRR_to_addr_price.toLocaleString('ru-Ru') }} руб. </label>
                        </div>
                    </div>
                    <div class="uk-margin-top">
                        <div class="row-lableworth">
                            <div class="uk-h4" id="lableworth"><span>Ценность {{
                                    worth.toLocaleString('ru-Ru') }} руб.</span></div>
                            <div class="input-group"> <input v-model="worth"
                                                             id="worth" class="form-control uk-input"
                                                             name="worth" step="1" min="0" aria-label="Sizing
example input" aria-describedby="lableworth"
                                                             type="number"> <span class="input-group-text">руб</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin-top">
                        <div class="row-lableworth">
                            <div class="uk-h4" id="labletype">Вид груза</div>
                            <div class="input-group">
                                <select v-model="cargo_type" name="cargoType"
                                        id="cargoType" class=" form-control uk-select">
                                    <option selected="selected" value="Не указан">Не
                                        указан</option>
                                    <option value="ТНП">ТНП (игрушки, подарки,
                                        канцтовары, спорттовары, одежда, обувь,
                                        косметика)</option>
                                    <option
                                        value="Оборудование/Электрооборудование/комплектующие">Оборудование/Электрооборудование/комплектующие</option>
                                    <option value="Автозапчасти, аксессуары, Авто/Мото
и др. Техника">Автозапчасти, аксессуары,
                                        Авто/Мото и др. Техника</option>
                                    <option value="Оргтехника, аудио/видео/бытовая
техника, комплектующие">Оргтехника,
                                        аудио/видео/бытовая техника, комплектующие</option>
                                    <option value="Мебель/комплектующие/мебель в
сборе/мягкая мебель">Мебель/комплектующие/мебель
                                        в сборе/мягкая мебель</option>
                                    <option value="Строй материалы, сантехника,
инструменты">Строй материалы, сантехника,
                                        инструменты</option>
                                    <option value="Мед. товар/пищевые
добавки/спортивное питание">Мед. товар/пищевые
                                        добавки/спортивное питание</option>
                                    <option value="Стекло/автостекло/оконные/дверные
рамы со стеклом">Стекло/автостекло/оконные/дверные
                                        рамы со стеклом</option>
                                    <option value="Жидкости в бочках/канистрах">Жидкости
                                        в бочках/канистрах</option>
                                    <option value="Хрупкие предметы
интерьера/сувениры, изделия из
камня/мрамор/гранит">Хрупкие предметы
                                        интерьера/сувениры, изделия из
                                        камня/мрамор/гранит</option>
                                    <option value="Личные вещи">Личные вещи</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section uk-section-muted order-row-3">
                <div class="uk-container">
                    <div class="uk-child-width-1-1 uk-child-width-1-3@m
uk-flex-center uk-grid" uk-grid="">
                        <div>
                            <div class="uk-h2">Отправитель</div>
                            <div class="uk-margin-small"> <label for="INNsender"
                                                                 class="form-label uk-form-label">ИНН, если юр.
                                лицо</label>
                                <div class="uk-form-controls">
                                    <input
                                    v-model="payments.sender.INN"
                                    class="form-control uk-input" required=""
                                    name="INNsender" id="INNsender"
                                    placeholder="ИНН" type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small"> <label for="сompSender"
                                                                 class="form-label uk-form-label">Название компании</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.sender.company"
                                    id="compSender" class="form-control uk-input"
                                    placeholder="Компания" type="text"> </div>
                            </div>
                            <div class="uk-margin-small"> <label for="FIOsender"
                                                                 class="form-label uk-form-label">ФИО</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.sender.name"
                                    class="form-control uk-input" required=""
                                    name="FIOsender" id="FIOsender"
                                    placeholder="ФИО" type="text"> </div>
                            </div>
                            <div class="uk-margin-small"> <label for="Telsender"
                                                                 class="form-label uk-form-label">Телефон</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.sender.tel"
                                    class="form-control uk-input" required=""
                                    name="Telsender" id="Telsender"
                                    pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                    placeholder="+7(___)___-__-__" type="tel"> </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="Emailsender" class="form-label uk-form-label">Email</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.sender.email"
                                    class="form-control uk-input" required=""
                                    name="Emailsender" id="Emailsender"
                                    placeholder="Email" type="email"> </div>
                            </div>
                            <div class="form-row-check uk-margin-top">
                                <div class="form-check"> <input
                                    v-model="payments.sender.pay_all"
                                    v-on:change="calculateSubs('sender')"
                                    class="form-check-input uk-radio PayAll"
                                    name="PayAll" id="PayAllSender" type="checkbox">
                                    <label class="form-check-label" for="PayAllSender">
                                        За все {{ total.toLocaleString('ru-Ru') }} руб.
                                    </label> </div>
                                <div class="form-check"> <input
                                    v-model="payments.sender.pay_TT"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayTermTransfer Sender"
                                    name="PayTermTransfer"
                                    id="PayTermTransferSender" type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayTermTransferSender"> За терминальную
                                    перевозку {{ TT_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div v-if="rig_pac || stretch_pac || bort_pac"
                                     class="form-check"> <input
                                    v-model="payments.sender.pay_pac"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPac Sender" name="PayPac"
                                    id="PayPacSender" type="checkbox"> <label
                                    class="form-check-label" for="PayPacSender"> За
                                    упаковку {{ packagePrice.toLocaleString('ru-Ru')
                                    }} руб. </label> </div>
                                <div v-if="insurance" class="form-check"> <input
                                    v-model="payments.sender.pay_ins"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayIns Sender" name="PayIns"
                                    id="PayInsSender" type="checkbox"> <label
                                    class="form-check-label" for="PayInsSender"> За
                                    страховку {{
                                        insurance_price.toLocaleString('ru-Ru') }} руб.
                                </label> </div>
                                <div v-if="with_addr_from" class="form-check"> <input
                                    v-model="payments.sender.pay_del_from_addr"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayFromAddressToTerm Sender"
                                    name="PayFromAddressToTerm"
                                    id="PayFromAddressToTermSender" type="checkbox">
                                    <label class="form-check-label"
                                           for="PayFromAddressToTermSender"> За доставку от
                                        адреса до терминала {{
                                            from_addr_price.toLocaleString('ru-Ru') }} руб.
                                    </label> </div>
                                <div v-if="PRR_from_addr" class="form-check"> <input
                                    v-model="payments.sender.pay_PRR_from_addr"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPRRatAddress Sender"
                                    name="PayPRRatAddress"
                                    id="PayPRRatAddressSender" type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayPRRatAddressSender"> За ПРР на адресе {{
                                        PRR_from_addr_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div v-if="with_addr_to" class="form-check"> <input
                                    v-model="payments.sender.pay_del_to_addr"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayFromTermToAddress Sender"
                                    name="PayFromTermToAddress"
                                    id="PayFromTermToAddressSender" type="checkbox">
                                    <label class="form-check-label"
                                           for="PayFromTermToAddressSender"> За доставку с
                                        терминала на адрес {{
                                            to_addr_price.toLocaleString('ru-Ru') }} руб. </label>
                                </div>
                                <div v-if="PRR_to_addr" class="form-check"> <input
                                    v-model="payments.sender.pay_PRR_to_addr"
                                    v-on:change="calculateSubs('sender')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPRRtoAddress Sender"
                                    name="PayPRRtoAddress"
                                    id="PayPRRtoAddressSender" type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayPRRtoAddressSender"> За ПРР на доставке
                                    на адрес {{
                                        PRR_to_addr_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div class="uk-h2" id="PaymentSender"> {{
                                        payments.sender.subtotal.toLocaleString('ru-Ru')
                                    }} руб. </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-h2">Получатель</div>
                            <div class="uk-margin-small"> <label
                                for="INNreceiver" class="form-label uk-form-label">ИНН,
                                если юр. лицо</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.receiver.INN"
                                    class="form-control uk-input" required=""
                                    id="INNreceiver" placeholder="ИНН" type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="сompReceiver" class="form-label
uk-form-label">Название компании</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.receiver.company"
                                    id="compReceiver" class="form-control uk-input"
                                    placeholder="Компания" type="text"> </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="FIOreceiver" class="form-label uk-form-label">ФИО</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.receiver.name"
                                    class="form-control uk-input" required=""
                                    id="FIOreceiver" placeholder="ФИО" type="text">
                                </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="Telreceiver" class="form-label uk-form-label">Телефон</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.receiver.tel"
                                    class="form-control uk-input" required=""
                                    id="Telreceiver"
                                    pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                    placeholder="+7(___)___-__-__" type="tel"> </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="Emailreceiver" class="form-label
uk-form-label">Email</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.receiver.email"
                                    class="form-control uk-input" required=""
                                    id="Emailreceiver" placeholder="Email"
                                    type="email"> </div>
                            </div>
                            <div class="form-row-check uk-margin-top">
                                <div class="form-check"> <input
                                    v-model="payments.receiver.pay_all"
                                    v-on:change="calculateSubs('receiver')"
                                    class="form-check-input uk-radio PayAll "
                                    name="PayAll" id="PayAllReceiver"
                                    type="checkbox"> <label
                                    class="form-check-label" for="PayAllReceiver">
                                    За все {{ total.toLocaleString('ru-Ru') }} руб.
                                </label> </div>
                                <div class="form-check"> <input
                                    v-model="payments.receiver.pay_TT"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayTermTransfer Receiver"
                                    name="PayTermTransfer"
                                    id="PayTermTransferReceiver" type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayTermTransferReceiver"> За терминальную
                                    перевозку {{ TT_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div v-if="rig_pac || stretch_pac || bort_pac"
                                     class="form-check"> <input
                                    v-model="payments.receiver.pay_pac"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPac Receiver" name="PayPac"
                                    id="PayPacReceiver" type="checkbox"> <label
                                    class="form-check-label" for="PayPacReceiver">
                                    За упаковку {{
                                        packagePrice.toLocaleString('ru-Ru') }} руб. </label>
                                </div>
                                <div v-if="insurance" class="form-check"> <input
                                    v-model="payments.receiver.pay_ins"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayIns Receiver" name="PayIns"
                                    id="PayInsReceiver" type="checkbox"> <label
                                    class="form-check-label" for="PayInsReceiver">
                                    За страховку {{
                                        insurance_price.toLocaleString('ru-Ru') }} руб.
                                </label> </div>
                                <div v-if="with_addr_from" class="form-check"> <input
                                    v-model="payments.receiver.pay_del_from_addr"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayFromAddressToTerm Receiver"
                                    name="PayFromAddressToTerm"
                                    id="PayFromAddressToTermReceiver"
                                    type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayFromAddressToTermReceiver"> За доставку
                                    от адреса до терминала {{
                                        from_addr_price.toLocaleString('ru-Ru') }} руб.
                                </label> </div>
                                <div v-if="PRR_from_addr" class="form-check"> <input
                                    v-model="payments.receiver.pay_PRR_from_addr"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPRRatAddress Receiver"
                                    name="PayPRRatAddress"
                                    id="PayPRRatAddressReceiver" type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayPRRatAddressReceiver"> За ПРР на адресе
                                    {{ PRR_from_addr_price.toLocaleString('ru-Ru')
                                    }} руб. </label> </div>
                                <div v-if="with_addr_to" class="form-check"> <input
                                    v-model="payments.receiver.pay_del_to_addr"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayFromTermToAddress Receiver"
                                    name="PayFromTermToAddress"
                                    id="PayFromTermToAddressReceiver"
                                    type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayFromTermToAddressReceiver"> За доставку
                                    с терминала на адрес {{
                                        to_addr_price.toLocaleString('ru-Ru') }} руб. </label>
                                </div>
                                <div v-if="PRR_to_addr" class="form-check"> <input
                                    v-model="payments.receiver.pay_PRR_to_addr"
                                    v-on:change="calculateSubs('receiver')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPRRtoAddress Receiver"
                                    name="PayPRRtoAddress"
                                    id="PayPRRtoAddressReceiver" type="checkbox"> <label
                                    class="form-check-label"
                                    for="PayPRRtoAddressReceiver"> За ПРР на
                                    доставке на адрес {{
                                        PRR_to_addr_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div class="uk-h2" id="PaymentReceiver"> {{
                                        payments.receiver.subtotal.toLocaleString('ru-Ru')
                                    }} руб. </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-h2">3-е лицо</div>
                            <div class="uk-margin-small"> <label for="INN3dparty"
                                                                 class="form-label uk-form-label">ИНН, если юр.
                                лицо</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.third_party.INN"
                                    class="form-control uk-input" id="INN3dparty"
                                    placeholder="ИНН" type="text"> </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="сomp3dparty" class="form-label uk-form-label">Название
                                компании</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.third_party.company"
                                    id="comp3dparty" class="form-control uk-input"
                                    placeholder="Компания" type="text"> </div>
                            </div>
                            <div class="uk-margin-small"> <label for="FIO3dparty"
                                                                 class="form-label uk-form-label">ФИО</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.third_party.name"
                                    class="form-control uk-input" id="FIO3dparty"
                                    placeholder="ФИО" type="text"> </div>
                            </div>
                            <div class="uk-margin-small"> <label for="Tel3dparty"
                                                                 class="form-label uk-form-label">Телефон</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.third_party.tel"
                                    class="form-control uk-input" id="Tel3dparty"
                                    pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                                    placeholder="+7(___)___-__-__" type="tel"> </div>
                            </div>
                            <div class="uk-margin-small"> <label
                                for="Email3dparty" class="form-label
uk-form-label">Email</label>
                                <div class="uk-form-controls"> <input
                                    v-model="payments.third_party.email"
                                    class="form-control uk-input" id="Email3dparty"
                                    placeholder="Email" type="email"> </div>
                            </div>
                            <div class="form-row-check uk-margin-top">
                                <div class="form-check"> <input
                                    v-model="payments.third_party.pay_all"
                                    v-on:change="calculateSubs('third_party')"
                                    class="form-check-input uk-radio PayAll Sender"
                                    name="PayAll" id="PayAll3dparty" type="checkbox">
                                    <label class="form-check-label PayAlllabel"
                                           for="PayAll3dparty"> За все {{
                                            total.toLocaleString('ru-Ru') }} руб. </label>
                                </div>
                                <div class="form-check"> <input
                                    v-model="payments.third_party.pay_TT"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayTermTransfer 3dparty"
                                    name="PayTermTransfer"
                                    id="PayTermTransfer3dparty" type="checkbox"> <label
                                    class="form-check-label PayTermTransferlabel"
                                    for="PayTermTransfer3dparty"> За терминальную
                                    перевозку {{ TT_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div v-if="rig_pac || stretch_pac || bort_pac"
                                     class="form-check"> <input
                                    v-model="payments.third_party.pay_pac"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPac 3dparty" name="PayPac"
                                    id="PayPac3dparty" type="checkbox"> <label
                                    class="form-check-label PayPaclabel"
                                    for="PayPac3dparty"> За упаковку {{
                                        packagePrice.toLocaleString('ru-Ru') }} руб. </label>
                                </div>
                                <div v-if="insurance" class="form-check"> <input
                                    v-model="payments.third_party.pay_ins"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayIns 3dparty" name="PayIns"
                                    id="PayIns3dparty" type="checkbox"> <label
                                    class="form-check-label PayInslabel"
                                    for="PayIns3dparty"> За страховку {{
                                        insurance_price.toLocaleString('ru-Ru') }} руб.
                                </label> </div>
                                <div v-if="with_addr_from" class="form-check"> <input
                                    v-model="payments.third_party.pay_del_from_addr"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayFromAddressToTerm 3dparty"
                                    name="PayFromAddressToTerm"
                                    id="PayFromAddressToTerm3dparty" type="checkbox">
                                    <label class="form-check-label
PayFromAddressToTermlabel"
                                           for="PayFromAddressToTerm3dparty"> За доставку
                                        от адреса до терминала {{
                                            from_addr_price.toLocaleString('ru-Ru') }} руб.
                                    </label> </div>
                                <div v-if="PRR_from_addr" class="form-check"> <input
                                    v-model="payments.third_party.pay_PRR_from_addr"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPRRatAddress 3dparty"
                                    name="PayPRRatAddress"
                                    id="PayPRRatAddress3dparty" type="checkbox"> <label
                                    class="form-check-label PayPRRatAddresslabel"
                                    for="PayPRRatAddress3dparty"> За ПРР на адресе
                                    {{ PRR_from_addr_price.toLocaleString('ru-Ru')
                                    }} руб. </label> </div>
                                <div v-if="with_addr_to" class="form-check"> <input
                                    v-model="payments.third_party.pay_del_to_addr"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayFromTermToAddress 3dparty"
                                    name="PayFromTermToAddress"
                                    id="PayFromTermToAddress3dparty" type="checkbox">
                                    <label class="form-check-label
PayFromTermToAddresslabel"
                                           for="PayFromTermToAddress3dparty"> За доставку с
                                        терминала на адрес {{
                                            to_addr_price.toLocaleString('ru-Ru') }} руб. </label>
                                </div>
                                <div v-if="PRR_to_addr" class="form-check"> <input
                                    v-model="payments.third_party.pay_PRR_to_addr"
                                    v-on:change="calculateSubs('third_party')"
                                    :disabled="payAllChosen" class="form-check-input
uk-radio PayPRRtoAddress 3dparty"
                                    name="PayPRRtoAddress"
                                    id="PayPRRtoAddress3dparty" type="checkbox"> <label
                                    class="form-check-label PayPRRtoAddresslabel"
                                    for="PayPRRtoAddress3dparty"> За ПРР на доставке
                                    на адрес {{
                                        PRR_to_addr_price.toLocaleString('ru-Ru') }}
                                    руб. </label> </div>
                                <div class="uk-h2" id="Payment3dparty"> {{
                                        payments.third_party.subtotal.toLocaleString('ru-Ru')
                                    }} руб. </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <h4>Комментарий к заказу</h4>
                        <textarea v-model="comment" name="comment" id="comment" style="max-width: 300px" class="uk-textarea" rows="5" placeholder="Комментарий к заказу"></textarea>
                    </div>
                    <h6 id="warning">{{ warning }}</h6>
                    <div id="total" class="uk-h1">ИТОГО: {{
                            total.toLocaleString('ru-Ru') }} руб.</div>
                    <button v-on:click="submitForm()" type="button"
                            class="uk-button uk-button-primary btn-order">ОТПРАВИТЬ</button>
                </div>
            </div>
            <input id="stretch_price" type="hidden"> <input
            id="rigid_pac_price" type="hidden"> <input id="bort_price"
                                                       type="hidden"> <input id="TT_price" type="hidden"> <input
            id="insurance_price" type="hidden"> <input
            id="PRRtoAddress_price" type="hidden"> <input
            id="PRRatAddress_price" type="hidden"> <input
            id="DelToAddress_price" type="hidden"> <input
            id="DelFromAddress_price" type="hidden"> <input
            id="amount_sender" type="hidden"> <input
            id="amount_receiver" type="hidden"> <input
            id="amount_3dparty" type="hidden"> <input id="totalhidden"
                                                      type="hidden"> </form>
    </div>
</template>

<script>
export default {
    name: "Calculator",
    props: {
       order: {
           default: {},
           type: Object
       }
    },
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
                };
                if (this.comment) {
                    this.comment = this.comment.replace('#', ' ');
                    this.comment = this.comment.replace('&', ' ');
                    this.comment = this.comment.replace('%', ' ');
                    this.comment = this.comment.replace('$', ' ');
                }

                let dataToSubmit = {
                    date_to: this.date_to,
                    date_from: this.date_from,
                    payments: this.payments,
                    from_time_from_addr: this.from_time_from_addr,
                    to_time_from_addr: this.to_time_from_addr,
                    from_time_to_addr: this.from_time_to_addr,
                    to_time_to_addr: this.to_time_to_addr,
                    selected_from_city: this.selected_from_city,
                    selected_to_city: this.selected_to_city,
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
                if (window.location.pathname.split("/").pop() == 'edit') {
                    axios.put('/admin/orders/'+this.order.id, {
                        data: dataToSubmit,
                        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    }).then(function (response) {
                        console.log(response);
                        window.location.href = '/admin/orders/';
                    })
                } else {
                    axios.post('/order', {data : dataToSubmit, _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    }).then(function (response) {
                        console.log(response.data);
                        alert(response.data);
                        window.location.href = '/';
                    }).catch(function (response) {
                        console.log(response.data);
                        alert(response.data);
                    });
                }

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
                // document.getElementById('Ecorad').checked = true;
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
                if (this.from_time_from_addr) {
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
                }

            } else {
                if (this.from_time_to_addr) {
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
            return this.payments.sender.pay_all === true || this.payments.receiver.pay_all === true || this.payments.third_party.pay_all === true;
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
        console.log(this.order !== {}, this.order === {})
        if (!this.order.hasOwnProperty('payments')) {
            this.getDepTimeExpress();
            this.getDepTimeEconom();
            this.timer();
            this.dateManage();
            setInterval(this.timer, 1000 * 60);
            this.payments;
            this.payAllChosen;
            this.sortCities();
            this.calculator();
            this.logInputKg();
            this.logInputHeaviest();
            this.logInputLongest();
            this.logInputPieces();
            this.logInputM();

        } else {
            console.log(this.order);
            this.payments = this.order.payments;
            this.cargo_type = this.order.cargo_type.name;
            this.comment = this.order.comment;
            this.date_to = this.order.date_del_to_addr;
            this.date_from = this.order.date_del_from_addr;
            this.from_time_from_addr = this.order.del_from_addr_time_from;
            this.to_time_from_addr = this.order.del_from_addr_time_to;
            this.from_time_to_addr = this.order.del_to_addr_time_from;
            this.to_time_to_addr = this.order.del_to_addr_time_to;
            this.selected_from_city = this.order.route.city_from.code;
            this.selected_to_city = this.order.route.city_to.code;
            this.kg = this.order.weight;
            this.meters = this.order.volume;
            this.pieces = this.order.pieces;
            this.heaviest = this.order.heaviest;
            this.longest = this.order.longest;
            this.to_fixed_time = this.order.to_fixed_time;
            this.from_fixed_time = this.order.from_fixed_time;
            this.rig_pac = this.order.rig_pac == 1;
            this.stretch_pac = this.order.stretch_pac == 1;
            this.bort_pac = this.order.bort_pac == 1;
            this.insurance = this.order.insurance == 1;
            this.with_addr_from = this.order.from_addr == 1;
            this.with_addr_to = this.order.to_addr == 1;
            this.PRR_to_addr = this.order.prr_to_addr == 1;
            this.PRR_from_addr = this.order.prr_from_addr == 1;
            this.express = this.order.method.name == 'ЭКСПРЕСС';
            this.econom = this.order.method.name == 'ЭКОНОМ';
            this.addressFrom = this.order.address_from;
            this.addressTo = this.order.address_to;
            console.log(this.selected_to_city, this.selected_from_city);
            console.log(this.$data);

            this.getDepTimeExpress();
            this.getDepTimeEconom();
            this.timer();
            this.dateManage();
            setInterval(this.timer, 1000 * 60);
            this.payments;
            this.payAllChosen;
            this.sortCities();
            this.calculator();
            this.logInputKg();
            this.logInputHeaviest();
            this.logInputLongest();
            this.logInputPieces();
            this.logInputM();
        }
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
