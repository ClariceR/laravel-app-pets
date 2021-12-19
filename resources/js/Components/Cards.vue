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
        Card
    },
    data() {
        return {
            pets: [
                {
                    id: 4,
                    avatar: '🐵',
                    name: 'Prego'
                },
                {
                    id: 5,
                    avatar: '🐛',
                    name: 'Chumbrega'
                },
                {
                    id: 6,
                    avatar: '🐶',
                    name: 'Lolim'
                }
            ]
        }
    }
    
}
</script>