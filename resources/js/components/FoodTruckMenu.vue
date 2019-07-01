<template>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<label>Title:</label>
				<input type="text" v-model="menu.title" class="form-control" />
			</div>
		</div>
		<div class="form-row" v-if="menu.title">
			<div class="col-12">
				<form method="post" action="/" class="container">
					<div class="form-row align-items-end">
						<div class="col">
							<label>Name:</label>
							<input type="text" v-model="item.name" class="form-control" />
						</div>
						<div class="col">
							<label>Price:</label>
							<input type="text" v-model="item.price" class="form-control" />
						</div>
						<div class="col-auto justify-content-end">
							<button v-if="!processingForm" type="submit" class="btn btn-primary" @click.prevent="addItem">Add Item</button>
							<button v-else class="btn btn-primary" disabled="disable">Adding item...</button>
							<input type="hidden" name="_token" v-bind:value="csrfToken">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-6" v-for="(item, index) in menuItems">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">{{ item.name }}</h5>
						<p class="card-text">{{ item.description }}</p>
						<p>{{ item.price }}</p>
					</div>
<!--   <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul> -->
					<div class="card-body">
					    <a href="#!" class="card-link" @click.prevent="removeItem(item.id,index)">Remove</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { bus } from '../admin';

export default {
	props: ['csrfToken','defaultMenu'],
	data: function () {
		return {
			item: [],
			menu: [],
			menuItems: [],
			processingForm: false
		}
	},
	mounted() {
		this.menu = JSON.parse(this.defaultMenu);
		this.menuItems = this.menu.items;
	},
	created() {
		bus.$on('updateActiveMenu', menu => {
			this.menu = menu;
			this.menuItems = menu.items;
		});
	},
	methods: {
		addItem() {
			let data = Object.assign(this.menu,this.item);

			this.processingForm = true;

			console.log(data);
			
			axios.post('/api/menus/'+this.menu.id+'/items', data)
				.then( response => {
					bus.$emit('itemCreated', response.data);
					
					this.menuItems.push(response.data);
					
					this.processingForm = false;

					console.log(response);
				})
				.catch(function (error) {
					console.log(error);
				});
		},
		removeItem(id,index) {
			axios.get('/api/menu-items/'+id+'/delete')
				.then( response => {
					this.menuItems.splice(index,1);
					console.log(response);
				})
				.catch(function (error) {
					console.log(error);
				});
		}
	}
}
</script>
