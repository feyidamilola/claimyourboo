<template >
    <div>
        <p>{{ reversedMessage }}</p>
    </div>
    
</template>

<script>
  import Question from '../Collections';
  export default{
      data(){
          return {
              questions : Question
          }
      },
      computed : {
           reversedMessage: function () {
      // `this` points to the vm instance
      console.log(this.questions);
    //   return this.questions;
    }
      }
  }
</script>
