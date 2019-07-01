<template>
	<form method="post" action="update">
		<input type="hidden" name="_token" v-bind:value="csrfToken">
		<div class="container">
			<div class="form-row">
				<div class="col-6">
					<label>Name:</label>
					<input type="text" v-model="truck.name" name="name" class="form-control" /> <br>
					<label>Phone Number:</label>
					<input type="text" v-model="truck.phone_number" name="name" class="form-control" /> <br>
					<label>Email:</label>
					<input type="text" v-model="truck.email" name="email" class="form-control" /> <br>
					<button v-if="!processingForm" type="submit" class="btn btn-primary" @click.prevent="updateFoodTruck">Update</button>
					<button v-else class="btn btn-primary" disabled="disable">Updating...</button>
				</div>
			</div>
		</div>
	</form>
</template>

<script>
export default {
	props: ['csrfToken','foodTruck'],
	data: function () {
		return {
			truck: JSON.parse(this.foodTruck),
			processingForm: false
		}
	},
	mounted() {
	},
	methods: {
		updateFoodTruck() {
			let data = this.truck;

			this.processingForm = true;
			
			axios.post('/api/food-trucks/'+this.truck.id, data)
				.then( response => {
					this.processingForm = false;
				})
				.catch(function (error) {
					console.log(error);
				});
		}
	}
}
</script>
