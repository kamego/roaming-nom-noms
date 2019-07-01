<template>
	<table class="table" v-if="menuList.length>0">
		<tbody>
			<tr v-for="(menu,index) in menuList">
				<td>
					<a href="#!" @click.prevent="updateActiveMenu(menu.id)">{{ menu.title }}</a>
					<a href="#!" class="float-right" @click.prevent="removeMenu(menu.id,index)">Remove</a>
				</td>
			</tr>
		</tbody>
	</table>
</template>

<script>
import { bus } from '../../admin';

export default {
	props: ['menus'],
	data: function () {
		return {
			menuList: JSON.parse(this.menus)
		}
	},
	mounted() {
		console.log(this.menus);
	},
	created() {
		bus.$on('menuCreated', menu => {
			this.menuList.push(menu);
			console.log(menu);
		});
	},
	methods: {
		updateActiveMenu(id) {
			axios.get('/api/menus/'+id)
				.then( response => {
					bus.$emit('updateActiveMenu', response.data);

					console.log(response);
				})
				.catch( error => {
					console.log(error);
				})
		},
		removeMenu(id,index) {
			axios.get('/api/menus/'+id+'/delete')
				.then( response => {
					this.menuList.splice(index,1);
					console.log(response);
				})
				.catch(function (error) {
					console.log(error);
				});
		}
	}
}
</script>
