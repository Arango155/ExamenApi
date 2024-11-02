import { createApp } from 'vue';
import ComponenteExamen from './components/ComponenteExamenFinal.vue';


const productos = createApp({});
productos.component('componente-examen', ComponenteExamen);
productos.mount('#componente');

