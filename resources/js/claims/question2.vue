<template >
    <div>
       <p v-if="show === 0">
            <span v-for="(question , key) in questions">
                <input v-model="relationship" type="radio" :name="relationship" :value="key"/> {{key}}
            </span>
        </p>
        <p v-if="show === 1 && relationship != ''">
            <span v-for="(option , i) in questions[relationship][0]">
                <!-- <input v-model="relationship" type="radio" :name="relationship" :value="key"/> {{key}} -->
                <span v-if="i == 0">
                    {{ questions[relationship][0][i]}}
                    <!-- {{option}} -->
                </span>
                <span v-else>
                    <input type="radio" :value="option" v-model="question2"> {{option}}
                </span>
            </span>
        </p>
        <p>
            
        </p>
        <p v-if="show === 2 && question2 != ''">
            <span v-for="(option , i) in questions[relationship][1]">
                <!-- <input v-model="relationship" type="radio" :name="relationship" :value="key"/> {{key}} -->
                <span v-if="i == 0">
                    {{ questions[relationship][1][i]}}
                    <!-- {{option}} -->
                </span>
                <span v-else>
                    <input type="radio" :value="option" v-model="question2"> {{option}}
                </span>
            </span>
        </p>
        <!-- <p v-else>
            You have to answer a question.
        </p> -->
        <button v-on:click="next()">Next</button>
    </div>
    
    
</template>

<script>
  import Question from '../Collections';
  export default{

      data(){
          return {
              questions : Question,
              show :0,
              relationship: '',
              question2 : ''
          }
      },
      computed : {
           reversedMessage: function () {
        // `this` points to the vm instance
        console.log(this.questions);
        //   return this.questions;
        }
      },
      methods : {
          next() {
              this.show = this.show + 1;
              console.log(this.relationship);
          }
      }
  }
</script>
