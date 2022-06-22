require('./bootstrap')

import { createApp } from 'vue'
// import HelloWorld from './components/Welcome'
import Products from './components/Products'

const app = createApp({
	data() {
		return {
			name: 'Marvin'
		}
	}
})

// app.component('hello-world', HelloWorld)
app.component('products', Products)

app.mount('#app')