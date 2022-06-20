require('./bootstrap');


import { createApp } from 'vue';

let app=createApp({})
app.component('index-calc', require('./components/IndexCalc.vue').default);
app.component('calculator', require('./components/Calculator.vue').default);
app.mount("#app")
import Alpine from 'alpinejs'

window.Alpine = Alpine

import './../../vendor/power-components/livewire-powergrid/dist/powergrid'

Alpine.start()
