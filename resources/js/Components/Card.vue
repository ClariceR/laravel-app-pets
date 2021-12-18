<template>
    <div class="pet-card flex items-center flex-col w-1/4 bg-slate-100 rounded-lg shadow">
        <h1 class="text-9xl pt-6">{{ pet.avatar }}</h1>
        <h3 class="text-2xl py-6">{{ pet.name }}</h3>
    </div>
</template>

<script>
export default {
    props: {
        pet: {
            type: Object,
            required: true
        }
    }  
}
</script>