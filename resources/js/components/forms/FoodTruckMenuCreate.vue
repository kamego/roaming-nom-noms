<template>
	<form method="post" action="/" class="container">
		<div class="form-row align-items-end">
			<div class="col-auto">
				<label>New Menu Section:</label>
				<input type="text" class="form-control" name="title" v-model="menu.title" />
			</div>
			<div class="col-auto justify-content-end">
				<button v-if="!processingForm" type="submit" class="btn btn-primary" @click.prevent="addMenu">Add Section</button>
				<button v-else class="btn btn-primary" disabled="disable">Adding section...</button>
				<input type="hidden" name="_token" v-bind:value="csrfToken">
			</div>
		</div>
	</form>
</template>

<script>
import { bus } from '../../admin';

export default {
	props: ['csrfToken','foodTruck'],
	data: function () {
		return {
			truck: JSON.parse(this.foodTruck),
			menu: {},
			processingForm: false
		}
	},
	mounted() {
	},
	methods: {
		addMenu() {
			let data = this.menu;

			this.processingForm = true;
			
			axios.post('/api/food-trucks/'+this.truck.id+'/menus', data)
				.then( response => {
					bus.$emit('menuCreated', response.data);
					console.log(response);
					this.processingForm = false;
				})
				.catch(function (error) {
					console.log(error);
				});
		}
	}
}
</script>
