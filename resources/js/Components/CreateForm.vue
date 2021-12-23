<template>
        <label>Avatar</label>
        <radio-option v-for="animal in animals" :key="animal.id" :animal="animal"/>
        <!-- <div id="v-model-radiobutton">
            <input type="radio" id="fox" value="Fox" v-model="picked" />
            <label for="fox" class="pl-2 text-4xl">🦊</label>
            <br />
            <input type="radio" id="wolf" value="Wolf" v-model="picked" />
            <label for="wolf" class="pl-2 text-4xl">🐺</label>
            <br />
            <input type="radio" id="unicorn" value="Unicorn" v-model="picked" />
            <label for="unicorn" class="pl-2 text-4xl">🦄</label>
            <br />
            <span>Type: {{ picked }}</span>
        </div> -->
        <div>
            <label for="name">Name</label>
            <input
                type="text"
                v-model="name"
                class="
                    w-full
                    px-4
                    py-2
                    mt-2
                    border
                    rounded-md
                    focus:outline-none
                    focus:ring-1
                    focus:ring-blue-600
                "
            />
        </div>
    
</template>

<script>
import RadioOption from '@/Components/RadioOption.vue';

export default {
    name: 'CreateForm',
    components: {
        RadioOption,
    },
    data() {
        return {
            picked: '',
            name: '',
            animals: [
                {
                    id: 1,
                    emoji: '🦊',
                    class: 'Fox'
                },
                {
                    id: 2,
                    emoji: '🐭',
                    class: 'Mouse'
                },
                {
                    id: 3,
                    emoji: '🐷',
                    class: 'Pig'
                }
            ]
    }
  }
    // methods: {
    //     submit() {
    //         this.form.post(route("pets.store"));
    //     },
    // },
};
</script>