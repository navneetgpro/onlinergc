<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>404 Page Not Found</title>
  <script>
    function Redirect() 
    {  
			window.history.back();
    }
    setTimeout('Redirect()', 7000);
  </script>
<style>
html,
body,
#tv {
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
}
#fpsstats {
  position: fixed;
  top: 0;
  right: 0;
  color: red;
  z-index: 9999;
}
#tv {
  position: absolute;
  top: 0;
  left: 0;
  -webkit-transform: translate3d(0, 0, 1);
  -moz-transform: translate3d(0, 0, 1);
  transform: translate3d(0, 0, 1);
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  image-rendering: optimizeSpeed;
  /* Older versions of FF          */
  image-rendering: -moz-crisp-edges;
  /* FF 6.0+                       */
  image-rendering: -webkit-optimize-contrast;
  /* Safari                        */
  image-rendering: -o-crisp-edges;
  /* OS X & Windows Opera (12.02+) */
  image-rendering: pixelated;
  /* Awesome future-browsers       */
  -ms-interpolation-mode: nearest-neighbor;
  /* IE                            */
}
</style>
</head>
<body>
<div id="fpsstats"></div>
<canvas id="tv"></canvas>
<script>
(function() {
	"use strict";

	var canvas = document.querySelector("#tv"),
		context = canvas.getContext("gl") || canvas.getContext("2d"),
		stats = document.querySelector("#fpsstats"),
		lastRender = 0,
		fps = 0,
		scaleFactor = 1.2, // Noise size
		samples = [],
		sampleIndex = 0,
		scanOffsetY = 0,
		scanSize = 0,
		FPS = 50,
		scanSpeed = FPS * 4, // 15 seconds from top to bottom
		SAMPLE_COUNT = 10,
		mouseTracker = new MouseTracker(canvas, context);

	window.onresize = function() {
		canvas.width = canvas.offsetWidth / scaleFactor;
		canvas.height = canvas.width / (canvas.offsetWidth / canvas.offsetHeight);
		scanSize = (canvas.offsetHeight / scaleFactor) / 4;

		samples = []
		for(var i = 0; i < SAMPLE_COUNT; i++)
			samples.push(generateRandomSample(context, canvas.width, canvas.height));
	};

	function interpolate(x, x0, y0, x1, y1) {
		return y0 + (y1 - y0)*((x - x0)/(x1 - x0));
	}


	function generateRandomSample(context, w, h) {	
		var intensity = [];
		var random = 0;
		var factor = h / 10;

		var intensityCurve = [];
		for(var i = 0; i < Math.floor(h / factor) + factor; i++)
			intensityCurve.push(Math.floor(Math.random() * 10));

		for(var i = 0; i < h; i++) {
			var value = interpolate((i/factor), Math.floor(i / factor), intensityCurve[Math.floor(i / factor)], Math.floor(i / factor) + 1, intensityCurve[Math.floor(i / factor) + 1]);
			intensity.push(value);
		}

		var imageData = context.createImageData(w, h);
		for(var i = 0; i < (w * h); i++) {
			var k = i * 4;
			var color = Math.floor(36 * Math.random());
			// Optional: add an intensity curve to try to simulate scan lines
			color += intensity[Math.floor(i / w)];
			imageData.data[k] = imageData.data[k + 1] = imageData.data[k + 2] = color;
			imageData.data[k + 3] = 255;
		}
		return imageData;
	}
	
	function Queue(size) {
		this.size = size;
		
		var array = new Array();
		
		this.enqueue = function(item) {
			array.push(item);
			if(array.length > this.size) this.dequeue();
		}
		
		this.dequeue = function() {
			return array.splice(0, 1);
		}
		
		this.getItem = function(index){
			return array[index];
		}
		
		this.length = function(){
			return array.length;
		}
		
		this.filter = function(filterFunc) {
			array = array.filter(filterFunc);
		}
	}
	
	function MouseTracker(canvas, context) {
		this.ctx = context;
		this.canvas = canvas;
		this._opacity = 0;
		this._hideSpeed = 0.005;
		this._showSpeed = 0.01;
		this._size = Math.max(this.canvas.height, this.canvas.width) / 8;
		this._maxOpacity = 0.4;
		this.particles = new Queue(100);
		this._lastMouseEvent = Date.now();
		this._mouseEventDelay = 20;
		this.position = {
			x: 0,
			y: 0
		}; 
		var scope = this;
		this.canvas.addEventListener("mousemove", function(e) { scope.onMouseMove(e); });
		this.canvas.addEventListener("touchmove", function(e) { 
			for(var i = -0; i < e.touches.length; i++) 
				scope.onMouseMove(e.touches.item(i)); 
		});
	}
	
	MouseTracker.prototype.onMouseMove = function(event) { 
		if(Date.now() - this._lastMouseEvent > this._mouseEventDelay) {
			if(this._opacity < this._maxOpacity)
				this._opacity += this._showSpeed * 2;
			var x = (event.clientX * event.target.width) / event.target.clientWidth;
			var y = (event.clientY * event.target.height) / event.target.clientHeight;

			this.particles.enqueue({
				x: x,
				y: y,
				opacity: this._opacity
			});
			this._lastMouseEvent = Date.now();
		}
	};
	
	MouseTracker.prototype.render = function() {	
		for(var i = this.particles.length() - 1; i >= 0; i--) {
			var item = this.particles.getItem(i);
			if(item.opacity > 0) { 
				var grd = this.ctx.createRadialGradient(
					item.x, item.y, 5,
					item.x, item.y, this._size
				);
				grd.addColorStop(0, 'rgba(255,255,255, ' + item.opacity +' )');
				grd.addColorStop(1, 'rgba(255,255,255,0)');
				
				item.opacity -= this._hideSpeed;
				this.ctx.save();
				this.ctx.fillStyle = grd;
				this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
				this.ctx.globalCompositeOperation = "lighter";
			}
		}
		
		this.particles.filter(function(i) { return i.opacity > 0; });
	};

	function render() {
		context.globalCompositeOperation = "source-over";
		context.putImageData(samples[Math.floor(sampleIndex)], 0, 0);

		sampleIndex += 30 / FPS; // 1/FPS == 1 second
		if(sampleIndex >= samples.length) sampleIndex = 0;

		var grd = context.createLinearGradient(0, Math.max(0, scanOffsetY), 0, scanSize);

		context.globalCompositeOperation = "lighter";
		grd.addColorStop(0, 'rgba(255,255,255,0.08)');
		grd.addColorStop(1, 'rgba(255,255,255,0.08)');
		context.fillStyle = grd;
		context.fillRect(0, scanOffsetY, canvas.width, scanSize);
		
		
		mouseTracker.render();

		scanOffsetY += (canvas.height / scanSpeed);
		if(scanOffsetY > canvas.height) scanOffsetY = -scanSize;
		
		window.requestAnimationFrame(render);
		fps = Math.floor(1 / ((Date.now() - lastRender) / 1000));
		lastRender = Date.now();
	}
	window.onresize();
	window.requestAnimationFrame(render);
	window.setInterval(function() {
		stats.innerText = fps;
	}, 1000);
})();
</script>
</body>
</html>
