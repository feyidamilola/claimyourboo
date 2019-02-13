<template>
  <div class="steppers">
    <div class="step step-active" >
      <div>
        <p>Step 1 :</p>
        <p>Handle</p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <p>Step 2 :</p>
        <p>State</p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <p>Step 3 :</p>
        <p>Verify</p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <p>Step 4 :</p>
        <p>Authorize</p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <p>Step 5 :</p>
        <p>Claim</p>
      </div>
    </div>
  </div>
</template>

<script>
// import "vuetify/dist/vuetify.min.css";

export default {
  props: ["step"],
  data() {
    return {};
  }
};
</script>
