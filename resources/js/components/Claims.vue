<template >
  <div class="page__container">
    <form @submit.prevent="submit" class="form">
      <div v-if="show === 0" class="page__content">
        <p class="page__title page__title--lg mg-b--lg">
          Is your boo really
          your boo?
        </p>
        <p class="page__subtitle mg-b">Find out now.</p>
        <div>
          <label class="input">
            <span>@</span>
            <input
              type="text"
              name="username"
              placeholder="enter your handle"
              v-model="username"
              class="form__field"
            >
          </label>
        </div>
        <div class="page__media">
          <label for class="media-radio">
            <input v-model="socialmedia" type="radio" :name="socialmedia" value="Twitter">
            <span>
              <i class="fa fa-check"></i>
            </span>
            <i class="fa fa-twitter"></i>
          </label>

          <label class="media-radio">
            <input v-model="socialmedia" type="radio" :name="socialmedia" value="Instagram">
            <span>
              <i class="fa fa-check"></i>
            </span>

            <i class="fa fa-instagram"></i>
          </label>
        </div>

        <br>
        <button
          v-if="socialmedia != '' && username!= ''"
          v-on:click="next()"
          type="button"
          class="btn"
        >Next</button>
      </div>

      <div v-if="show === 1" class="page__content">
        <p class="page__title mg-b--lg">What’s your claim?</p>

        <div class="question2 row">
          <div v-for="(question , key) in questions" class="col-md-4 col-sm-12 col-xs-12">
            <label>
              <input v-model="relationship" type="radio" :name="relationship" :value="key">
              <span class="quest">{{key}}</span>

              <i class="fa fa-check"></i>
            </label>
          </div>
        </div>
        <br>
        <button v-if="relationship != ''" v-on:click="next()" type="button" class="btn">Next</button>
      </div>

      <div v-if="show === 2 && relationship != ''" class="page__content row claim">
        <div
          v-for="(option , i) in questions[relationship][0]"
          class="col-md-4 col-sm-12 col-xs-12"
          v-bind:class="{ 'col-md-12': i === 0 }"
        >
          <p v-if="i == 0" class="page__title mg-b--lg">{{ questions[relationship][0][i]}}</p>

          <label v-else>
            <input type="radio" :value="option" v-model="length">
            <span>{{option}}</span>
            <i class="fa fa-check"></i>
          </label>
        </div>
        <button
          v-if="relationship != '' && length != '' "
          v-on:click="next()"
          type="button"
          class="btn col-md-12"
        >Next</button>
      </div>

      <div v-if="show === 3 && length != ''" class="page__content row claim">
        <div
          v-for="(option , i) in questions[relationship][1]"
          class="col-sm-12 col-xs-12"
          v-bind:class="[{ 'col-md-12': i === 0 } , `col-md-${12 / (questions[relationship][1].length - 1)}` ]"
        >
          <p v-if="i == 0" class="page__title mg-b--lg">{{ questions[relationship][1][i]}}</p>

          <label v-else>
            <input type="radio" :value="option" v-model="personal">
            <span>{{option}}</span>
            <i class="fa fa-check"></i>
          </label>
        </div>
        <button
          v-if="relationship != '' && personal != '' "
          v-on:click="next()"
          type="button"
          class="btn col-md-12"
        >Next</button>
      </div>

      <div v-if="show === 4" class="page__content">
        <p class="page__title mg-b--lg">Who be this person to you sef?</p>
        <div>
          <label class="input">
            <span>@</span>
            <input
              type="text"
              name="partnerusername"
              placeholder="Enter partners "
              v-model="partnerusername"
              class="form__field"
            >
          </label>
        </div>

        <!-- <div class="page__media">
          <label for class="media-radio">
            <input v-model="socialmedia" type="radio" :name="socialmedia" value="Twitter">
            <span>
              <i class="fa fa-check"></i>
            </span>
            <i class="fa fa-twitter"></i>
          </label>

          <label class="media-radio">
            <input v-model="socialmedia" type="radio" :name="socialmedia" value="Instagram">
            <span>
              <i class="fa fa-check"></i>
            </span>

            <i class="fa fa-instagram"></i>
          </label>
        </div>-->
        <button
          v-if="partnerusername != '' || partnerusername == username"
          v-on:click="next()"
          type="button"
          class="btn"
        >Next</button>
      </div>

      <div v-if="show === 5" class="page__content">
        <p class="page__subtitle mg-b">

          {{result}}
        </p>
        <!-- <hr> -->
        <p class="page__subtitle mg-b">Share</p>
        <input v-model="share" type="radio" :name="share" value="Yes">Yes
        <input v-model="share" type="radio" :name="share" value="No">No
        <button v-if="share != ''" v-on:click="submit()" type="submit">Submit</button>
      </div>

      <stepper></stepper>
    </form>
  </div>
</template>

<script>
import Question from "../Collections";
import response from "../Response";
// import Steppers from "./Stepper";

export default {
  data() {
    return {
      questions: Question,
      show: 0,
      relationship: "",
      length: "",
      socialmedia: "",
      personal: "",
      username: "",
      partnerusername: "",
      share: ""
    };
  },
  mounted() {},
  computed: {
    result: function() {
      console.log(
        this.partnerusername,
        this.relationship,
        this.length,
        this.personal
      );
      return response(
        this.partnerusername,
        this.relationship,
        this.length,
        this.personal
      );
    }
  },
  methods: {
    next() {
      this.show = this.show + 1;
      let steppers = document.querySelectorAll(".step");

      Array.from(steppers).forEach((step, i) => {
        console.log(step);
        if (step.classList.contains("step-active")) {
          step.classList.remove("step-active");
        }
      });

      Array.from(steppers).forEach((step, i) => {
        if (i === this.show) {
          step.classList.add("step-active");
        }
      });
    },
    submit() {
      console.log(
        this.username,
        this.socialmedia,
        this.relationship,
        this.length,
        this.personal,
        this.partnerusername,
        this.result,
        this.share
      );
      let form = new FormData();
      form.append("username", this.username);
      form.append("socialmedia", this.socialmedia);
      form.append("relationship", this.relationship);
      form.append("length", this.length);
      form.append("personal", this.personal);
      form.append("partnerusername", this.partnerusername);
      form.append("result", this.result);
      form.append("share", this.share);
      axios
        .post("/submit", form)
        .then(response => console.log(response))
        .catch(error => console.log(error));
    }
  }
};
</script>
