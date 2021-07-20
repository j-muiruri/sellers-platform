<template>
    <div>
        <h3 class="text-center">All Goods</h3><br/>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Seller</th>
                <th>Category</th>
                <th>Price</th>
                <th>Minimum Amount</th>
                <th>Exchange Commodity Type</th>
                <th>Exchange for commodity </th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="good in goods" :key="good.id">
                <td>{{ good.id }}</td>
                <td>{{ good.name }}</td>
                <td>{{ good.description }}</td>
                <td>{{ good.seller.name }}</td>
                <td>{{ good.category.name }}</td>
                <td>{{ good.price }}</td>
                <td>{{ Object.keys(JSON.parse(good.exchange_for)) }}</td>
                <td>{{ Object.keys(JSON.parse(good.exchange_for)) }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: good.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deletePost(good.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                goods: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/goods')
                .then(response => {
                    this.goods = response.data;
                });
        },
        methods: {
            deletePost(id) {
                this.axios
                    .delete(`http://localhost:8000/api/good/delete/${id}`)
                    .then(response => {
                        let i = this.goods.map(item => item.id).indexOf(id); // find index of your object
                        this.goods.splice(i, 1)
                    });
            }
        }
    }
</script>