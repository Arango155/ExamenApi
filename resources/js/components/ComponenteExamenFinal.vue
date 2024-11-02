<template>
    <div>
        <h1>Galeria</h1>
        <div v-if="loading">Loading...</div>
        <div v-else>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="image in images" :key="image.id">
                        <td>{{ image.id }}</td>
                        <td>{{ image.author }}</td>
                        <td><img :src="image.download_url" alt="Image" width="200" /></td>
                        <td><a :href="image.url" target="_blank">Ver en Unsplazh</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            images: [],
            loading: true,
        };
    },
    mounted() {
        this.fetchImagesData();
    },
    methods: {
        async fetchImagesData() {
            try {
                const response = await axios.get('https://picsum.photos/v2/list');
                this.images = response.data;
            } catch (error) {
                console.error(error);
            } finally {
                this.loading = false;
            }
        }
    }
};
</script>
