<template>
    <div>
        <h3 class="text-center">Add Good</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addPost">
                    <p v-if="errors !=null">
                        <b>Please correct the following error(s):</b>
                        <ul>
                            <li v-for="error in errors" :key="error">{{ error }}</li>
                            </ul>
                    </p>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="good.name" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="good.description" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="" class="form-control" v-model="good.price" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Price</label>
                        <input type="text" class="form-control" v-model="good.minimum_price" required>
                    </div>
                    <div class="form-group">
                        <label>Exchange for</label>
                        <input type="text" class="form-control" v-model="good.exchange_for" required>
                    </div>
                    <div class="form-group">
                        <label>Seller</label>
                        <select class="form-control" v-model="good.seller_id" required>
                            <option v-for="seller in sellers" :key="seller.id">{{ seller.name }}</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" v-model="good.category_id" required>
                            <option v-for="category in categories" :key="category.id">{{ category.name }}</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Goods</button>
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
      categories: [],
      errors: [],
    };
  },
  created() {
    this.axios.get("http://localhost:8000/api/sellers").then((response) => {
      this.sellers = response.data;
      console.log(response);
    });
    this.axios.get("http://localhost:8000/api/categories").then((response) => {
      this.categories = response.data;
    });
  },
  methods: {
    addPost() {
      this.axios
        .post("http://localhost:8000/api/good/add", this.good)
        .then((response) => {
          if (response.data.status == false) {
            this.errors = response.data.error;
          } else{
            this.$router.push({ name: "home" });
          }
          // console.log(response.data)
        })
        .catch((error) => console.log(error))
        .finally(() => (this.loading = false));
    },
  },
};
</script>