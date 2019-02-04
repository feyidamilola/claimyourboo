<template >
    <div>
       
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
