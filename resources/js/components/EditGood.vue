<template>
    <div>
        <h3 class="text-center">Edit Good</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addPost">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="good.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="good.description">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="" class="form-control" v-model="good.price">
                    </div>
                    <div class="form-group">
                        <label>Minimum Price</label>
                        <input type="text" class="form-control" v-model="good.minimum_price">
                    </div>
                    <div class="form-group">
                        <label>Exchange for</label>
                        <input type="text" class="form-control" v-model="good.exchange_for">
                    </div>
                    <div class="form-group">
                        <label>Seller</label>
                        <select v-model="good.seller_id">
                            <option v-for="seller in sellers" :key="seller.id">{{ seller.name }}</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select v-model="good.category_id">
                            <option v-for="category in categories" :key="category.id">{{ category.name }}</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Goods</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                good: {},
                sellers: [],
                categories: []
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/good/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.good = response.data;
                    // console.log(response.data);
                });
            this.axios
                .get('http://localhost:8000/api/sellers')
                .then(response => {
                    this.sellers = response.data;
                });
            this.axios
                .get('http://localhost:8000/api/categories')
                .then(response => {
                    this.categories = response.data;
                });
        },
        methods: {
            updatePost() {
                this.axios
                    .post(`http://localhost:8000/api/good/update/${this.$route.params.id}`, this.good)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>