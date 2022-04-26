<script setup>
import Button from 'primevue/button';
</script>
<template>
  <Button class="p-button p-button-secondary p-button-text bg-white p-button-raised nav-button" :icon="icon" />
</template>
<script>
export default {
    props: {
        icon: {
            type: String,
            required: true,
        },
    },
};
</script>
<style scoped>
.nav-button {
  font-size: 1.5rem;
  height: 4rem;
  width: 4rem;
  border-radius: 50%;
}
</style>