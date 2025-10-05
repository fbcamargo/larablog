<template>
    <div>
        <h1>Meu CRUD de inércia</h1>
        <Link href="/posts/create">New Post</Link>
        <table>
            <thead>
                <tr>
                    <th v-for="header in headers" :key="header">
                        {{ header }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.title }}</td>
                    <td>{{ post.body }}</td>
                    <td>
                        <button @click="deletePost(post.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup lang="ts">
import { Post } from '@/types/Post';
import { Link, useForm } from '@inertiajs/vue3';
defineProps<{
    posts: Post[]
}>();

const headers = ['posts', 'body', 'actions'];

const form = useForm({});

const deletePost = (id: number) => {
    form.delete(`posts/${id}`)
}
</script>
