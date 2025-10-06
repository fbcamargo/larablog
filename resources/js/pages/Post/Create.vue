<template>
    <form @submit.prevent="submit" class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="text" id="title" v-model="form.title" required>
        </div>
        <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
            <textarea rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="text" id="body" v-model="form.body" required>
            </textarea>
        </div>
        <div class="mb-5 float-end">
            <Link :href="`/posts`"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            Voltar</Link>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</template>
<script setup lang="ts">
import { Link, useForm } from '@inertiajs/vue3';
import { Post } from '@/types/Post';
import { onMounted } from 'vue';

const props = defineProps<{
    post: Post,
    isUpdating: {
        type: boolean,
        default: false
    }
}>();

const form = useForm({
    title: '',
    body: ''
});

const addPost = () => form.post('/posts');
const updatePost = () => form.put(`/posts/${props.post.id}`);
const submit = () => (props.isUpdating ? updatePost() : addPost());

onMounted(() => {
    if (props.post) {
        form.title = props.post.title;
        form.body = props.post.body;
    }
});
</script>
