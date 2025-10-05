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

const form = useForm({
    title: '',
    body: ''
});

const submit = () => {
    form.post('/posts')
};
</script>
