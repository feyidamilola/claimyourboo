<template>
  <div class="steppers">
    <div class="step">
      <span>Step 1</span>
      <p>
        type your
        handle
      </p>
    </div>

    <div class="step">
      <span>Step 2</span>
      <p>type your handle</p>
    </div>

    <div class="step">
      <span>Step 3</span>
      <p>
        type your
        handle
      </p>
    </div>

    <div class="step">
      <span>Step 4</span>
      <p>
        type your
        handle
      </p>
    </div>
  </div>
</template>

<script>
import 'vuetify/dist/vuetify.min.css'

export default {
  props: ["step"],
  data() {
    return {};
  }
};
</script>
