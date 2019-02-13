<template >
  <div class="page__container">
    <div class="page__content">
      <canvas id="canvas"></canvas>
    </div>
  </div>
</template>

<script>
import { fabric } from "fabric";

export default {
    props: ['details' , 'number'],
  data() {
    return {
      res : this.details,
      no : this.number
    };
  },
  mounted: function() {
    //   console.log(this.res)
    const canvas = new fabric.Canvas("canvas", {
      width: 600,
      height: 600
    });
    canvas.selection = false;

    let imageUrl = 'http://localhost:8000/img/res.jpg';

    fabric.Image.fromURL(imageUrl, function(myImg) {
 //i create an extra var for to change some image properties
 var img1 = myImg.set({ left: 0, top: 0 ,width:600,height:600});
 canvas.add(img1);
 canvas.sendToBack(img1);
});



    let textString = `${this.no} people have claimed your boo as husband`;

    let text = new fabric.Textbox(textString.toUpperCase(), {
      left: 0,
      right:0,
      top: 100,
      angle: 0,
      fill: "#000",
      fontWeight: "",
      width: 600,
      zIndex: 7,
      textAlign: "center",
      fontSize: 19,
      fontFamily : 'Pacifico'
    });

     let text2 = new fabric.Textbox(this.res.result.toUpperCase(), {
      left: 0,
      right:0,
      top: 470,
      angle: 0,
      fill: "#000",
      fontWeight: "",
      width: 600,
      zIndex: 7,
      textAlign: "center",
      fontSize: 19,
      fontFamily : 'Pacifico'
    });

    canvas.add(text);
     canvas.add(text2);



    fabric.Image.fromURL("http://fabricjs.com/assets/pug_small.jpg", function(
      myImg
    ) {
      //i create an extra var for to change some image properties
      var img1 = myImg.set({ left: 0, top: 0, width: 300, height: 300 });
      canvas.add(img1);
      canvas.centerObject(img1);
    });

    // canvas.add(obj);
    // canvas.centerObject(text);

    let widthscrencan = (window.innerWidth > 0) ? window.innerWidth : screen.width; // capture width screen onload
let canvasScale = 1; //global

      if (widthscrencan <=360){

  function zoomIn() {
	  var SCALE_FACTOR = .37;
      let canvasScale = canvasScale * SCALE_FACTOR;

      canvas.setHeight(canvas.getHeight() * SCALE_FACTOR);
      canvas.setWidth(canvas.getWidth() * SCALE_FACTOR);

      var objects = canvas.getObjects();
      for (var i in objects) {
          var scaleX = objects[i].scaleX;
          var scaleY = objects[i].scaleY;
          var left = objects[i].left;
          var top = objects[i].top;

          var tempScaleX = scaleX * SCALE_FACTOR;
          var tempScaleY = scaleY * SCALE_FACTOR;
          var tempLeft = left * SCALE_FACTOR;
          var tempTop = top * SCALE_FACTOR;

          objects[i].scaleX = tempScaleX;
          objects[i].scaleY = tempScaleY;
          objects[i].left = tempLeft;
          objects[i].top = tempTop;

          objects[i].setCoords();
      }


      canvas.renderAll();


  }

   window.onload = zoomIn;
 }




   if ((widthscrencan >=361) || (widthscrencan ==768)){

			function zoomIn768() {
		  var SCALE_FACTOR = .45;
		  canvasScale = canvasScale * SCALE_FACTOR;

		  canvas.setHeight(canvas.getHeight() * SCALE_FACTOR);
		  canvas.setWidth(canvas.getWidth() * SCALE_FACTOR);

		  var objects = canvas.getObjects();
		  for (var i in objects) {
			  var scaleX = objects[i].scaleX;
			  var scaleY = objects[i].scaleY;
			  var left = objects[i].left;
			  var top = objects[i].top;

			  var tempScaleX = scaleX * SCALE_FACTOR;
			  var tempScaleY = scaleY * SCALE_FACTOR;
			  var tempLeft = left * SCALE_FACTOR;
			  var tempTop = top * SCALE_FACTOR;

			  objects[i].scaleX = tempScaleX;
			  objects[i].scaleY = tempScaleY;
			  objects[i].left = tempLeft;
			  objects[i].top = tempTop;

			  objects[i].setCoords();
		  }


		  canvas.renderAll();



		}
		  window.onload = zoomIn768;
	}

   if ((widthscrencan >=769) || (widthscrencan ==992)){

			function zoomIn992() {
		  var SCALE_FACTOR = .5;
		  canvasScale = canvasScale * SCALE_FACTOR;

		  canvas.setHeight(canvas.getHeight() * SCALE_FACTOR);
		  canvas.setWidth(canvas.getWidth() * SCALE_FACTOR);

		  var objects = canvas.getObjects();
		  for (var i in objects) {
			  var scaleX = objects[i].scaleX;
			  var scaleY = objects[i].scaleY;
			  var left = objects[i].left;
			  var top = objects[i].top;

			  var tempScaleX = scaleX * SCALE_FACTOR;
			  var tempScaleY = scaleY * SCALE_FACTOR;
			  var tempLeft = left * SCALE_FACTOR;
			  var tempTop = top * SCALE_FACTOR;

			  objects[i].scaleX = tempScaleX;
			  objects[i].scaleY = tempScaleY;
			  objects[i].left = tempLeft;
			  objects[i].top = tempTop;

			  objects[i].setCoords();
		  }


		  canvas.renderAll();



		}
		  window.onload = zoomIn992;
	}

	  if ((widthscrencan >=993) || (widthscrencan ==1200)){

			function zoomIn1200() {
		  var SCALE_FACTOR = 1;
		  canvasScale = canvasScale * SCALE_FACTOR;

		  canvas.setHeight(canvas.getHeight() * SCALE_FACTOR);
		  canvas.setWidth(canvas.getWidth() * SCALE_FACTOR);

		  var objects = canvas.getObjects();
		  for (var i in objects) {
			  var scaleX = objects[i].scaleX;
			  var scaleY = objects[i].scaleY;
			  var left = objects[i].left;
			  var top = objects[i].top;

			  var tempScaleX = scaleX * SCALE_FACTOR;
			  var tempScaleY = scaleY * SCALE_FACTOR;
			  var tempLeft = left * SCALE_FACTOR;
			  var tempTop = top * SCALE_FACTOR;

			  objects[i].scaleX = tempScaleX;
			  objects[i].scaleY = tempScaleY;
			  objects[i].left = tempLeft;
			  objects[i].top = tempTop;

			  objects[i].setCoords();
		  }


		  canvas.renderAll();



		}
		  window.onload = zoomIn1200;
	}


	  if (widthscrencan >=1300){

			function zoomIn1300() {
		  var SCALE_FACTOR = 1;
		  canvasScale = canvasScale * SCALE_FACTOR;

		  canvas.setHeight(canvas.getHeight() * SCALE_FACTOR);
		  canvas.setWidth(canvas.getWidth() * SCALE_FACTOR);

		  var objects = canvas.getObjects();
		  for (var i in objects) {
			  var scaleX = objects[i].scaleX;
			  var scaleY = objects[i].scaleY;
			  var left = objects[i].left;
			  var top = objects[i].top;

			  var tempScaleX = scaleX * SCALE_FACTOR;
			  var tempScaleY = scaleY * SCALE_FACTOR;
			  var tempLeft = left * SCALE_FACTOR;
			  var tempTop = top * SCALE_FACTOR;

			  objects[i].scaleX = tempScaleX;
			  objects[i].scaleY = tempScaleY;
			  objects[i].left = tempLeft;
			  objects[i].top = tempTop;

			  objects[i].setCoords();
		  }


		  canvas.renderAll();



		}
		  window.onload = zoomIn1300;
	}


 widthscrencan.onload
  }

};
</script>

