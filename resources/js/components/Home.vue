<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="car in cars" :key="car.id">
                                    <td>{{ car.id }}</td>
                                    <td>{{ car.name }}</td>
                                    <td>{{ car.prize }}</td>
                                    <td>{{ car.stock }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name = 'Home',
        data() {
            return {
                cars: []
            }
        },
        async created() {
            const { data } = await axios.get('http://localhost:8000/api/cars');
            this.cars = data;
        }
    }
</script>
