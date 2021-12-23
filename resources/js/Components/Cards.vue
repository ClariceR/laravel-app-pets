<template>
    <div class="cards flex items-center justify-around">
        <Card v-for="pet in pets" :key="pet.id" :pet="pet"/>
    </div>
</template>

<script>
import Card from '@/Components/Card.vue';

export default {
    name: 'Cards',
    components: {
        Card,
    },
    data() {
        return {
            pets: [
                {
                    id: 1,
                    avatar: '🦊',
                    name: 'Farofa'
                },
                {
                    id: 2,
                    avatar: '🐭',
                    name: 'Mimi Mouse'
                },
                {
                    id: 3,
                    avatar: '🐷',
                    name: 'Lulu'
                }
            ]
        }
    }
    
}
</script>