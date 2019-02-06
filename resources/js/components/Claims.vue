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
        <button v-if="socialmedia != '' && username!= ''" v-on:click="next()" type="button">Next</button>
      </div>

      <div v-if="show === 1" class="page__content">
        <p class="page__title mg-b--lg">What’s your claim?</p>

        <div class="question2">
          <div v-for="(question , key) in questions">
            <label>
              <input v-model="relationship" type="radio" :name="relationship" :value="key">
              <span>{{key}}</span>
            </label>
          </div>
        </div>
        <br>
        <button v-if="relationship != ''" v-on:click="next()" type="button">Next</button>
      </div>

      <p v-if="show === 3 && length != ''">
        <span v-for="(option , i) in questions[relationship][1]">
          <input v-model="relationship" type="radio" :name="relationship" :value="key">
          {{key}}
          <span v-if="i == 0">{{ questions[relationship][1][i]}}</span>
          <span v-else>
            <input type="radio" :value="option" v-model="personal">
            {{option}}
          </span>
        </span>
        <br>
        <button v-if="relationship != '' && personal != '' " v-on:click="next()" type="button">Next</button>
      </p>

      <p v-if="show === 4">
        Partner Username
        <input
          type="text"
          name="partnerusername"
          placeholder="Partner Username"
          v-model="partnerusername"
        >
        <br>
        <button
          v-if="partnerusername != '' || partnerusername == username"
          v-on:click="next()"
          type="button"
        >Next</button>
      </p>
      <p v-if="show === 5">
        <!-- <p v-if="relationship === fwb">
                    Your result<br>
                    Your partner is {{partnerusername}} and your relationship is {{relationship}} <br>
                    You have been together for {{length}} <br>
        </p>-->
        <span style="border: 1px solid grey">Your result
          <br>
          Your partner is {{partnerusername}} and your relationship is {{relationship}}
          <br>
          You have been together for {{length}}
          <br>
        </span>
        <!-- <hr> -->
        Share
        <input v-model="share" type="radio" :name="share" value="Yes">Yes
        <input v-model="share" type="radio" :name="share" value="No">No
        <button v-if="share != ''" v-on:click="submit()" type="submit">Submit</button>
      </p>

      <stepper></stepper>
    </form>
  </div>
</template>

<script>
import Question from "../Collections";
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
  computed: {
    reversedMessage: function() {
      // `this` points to the vm instance
      console.log(this.questions);
      //   return this.questions;
    }
  },
  methods: {
    next() {
      this.show = this.show + 1;
      console.log(this.relationship);
    },
    submit() {
      console.log(
        this.username,
        this.socialmedia,
        this.relationship,
        this.length,
        this.personal,
        this.partnerusername,
        this.share
      );
      let form = new FormData();
      form.append("username", this.username);
      form.append("socialmedia", this.socialmedia);
      form.append("relationship", this.relationship);
      form.append("length", this.length);
      form.append("personal", this.personal);
      form.append("partnerusername", this.partnerusername);
      form.append("share", this.share);
      axios
        .post("/submit", form)
        .then(response => console.log(response))
        .catch(error => console.log(error));
    }
  }
};
</script>
