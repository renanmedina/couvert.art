import axios from 'axios';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./frontend/**/*.vue', { eager: true })
    return pages[`./frontend/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})