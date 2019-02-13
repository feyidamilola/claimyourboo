<template >
  <div v-if="view" class="loader">
    <div>
      <div class="lds-heart">
        <div></div>
      </div>

      <div class="loader-text">hold on.....</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["view"],
  data() {
    return {};
  },
  methods: {}
};
</script>


