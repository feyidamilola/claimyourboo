<template>
  <div class="steppers">
    <div class="step step-active">
      <div>
        <span>Step 1</span>
        <p>
          type your
          handle
        </p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <span>Step 2 :</span>
        <p>state your claim</p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <span>Step 3</span>
        <p>verify your claim</p>
      </div>
    </div>

    <div class="line"></div>

    <div class="step">
      <div>
        <span>Step 4</span>
        <p>authorize your claim</p>
      </div>
    </div>

    <div class="line"></div>


    <div class="step">
      <div>
        <span>Step 5</span>
        <p>claim your boo</p>
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
