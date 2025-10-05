<template>
    <form @submit.prevent="submit">
        <label for="title">Title</label>
        <input type="text" id="title" v-model="form.title">
        <label for="body">Body</label>
        <input type="text" id="body" v-model="form.body">
        <button type="submit">Submit</button>
        <Link href="/posts">Voltar</Link>
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
    form.title = props.post.title;
    form.body = props.post.body;
});
</script>
