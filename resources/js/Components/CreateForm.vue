<template>
    
        <div id="v-model-radiobutton">
            <input type="radio" id="fox" value="Fox" v-model="picked" />
            <label for="fox">🦊</label>
            <br />
            <input type="radio" id="wolf" value="Wolf" v-model="picked" />
            <label for="wolf">🐺</label>
            <br />
            <span>Picked: {{ picked }}</span>
        </div>
    
</template>

<script>

export default {
    name: 'CreateForm',
    data() {
        return {
            picked: ''
    }
  }
    // methods: {
    //     submit() {
    //         this.form.post(route("pets.store"));
    //     },
    // },
};
</script>