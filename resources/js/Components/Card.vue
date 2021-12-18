<template>
    <div class="pet-card">
        <h1>{{ pet.avatar }}</h1>
        <h3>{{ pet.name }}</h3>
    </div>
</template>

<script>
export default {
    name: 'card',

    data() {
        return {
            pet: {
                id: 1,
                avatar: '🦊',
                name: 'Farofa'
            }
        }
    }
}
</script>

<style scoped>
    .pet-card {
    padding: 20px;
    width: 250px;
    cursor: pointer;
    border: 1px solid #39495c;
    margin-bottom: 18px;
    }

    .pet-card:hover {
    transform: scale(1.01);
    box-shadow: 0 3px 12px 0 rgba(0, 0, 0, 0.2);
    }
</style>