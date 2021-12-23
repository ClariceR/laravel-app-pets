<template>
    <div class="pet-card flex items-center flex-col w-1/4 bg-slate-100 rounded-lg shadow">
        <div id="v-model-radiobutton">
            <input type="radio" id="{{ animal.id }}" value="{{ animal.emoji }}" v-model="picked" />
            <label for="{{ animal.id }}" class="pl-2 text-4xl">{{ animal.emoji }}</label>
            
            <span>Type: {{ animal.class }}</span>
            <span>Picked: {{ picked }}</span>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        animal: {
            type: Object,
            required: true,
        }
    },
    data() {
        return {
            picked: ''
        }
    }
}
</script>