<div class="content">
	This is <span>tooltip#1<i class="v1">Tooltip number one</i></span>. Which can be in <span class="r">red<i class="v1">Tooltip#1 - red color</i></span>, <span class="g">green<i class="v1">Tooltip#1 - green color</i></span> and <span class="b">blue<i class="v1">Tooltip#1 - blue color</i></span>.
	<hr />
	This is <span>tooltip#2<i class="v2">Tooltip number two</i></span>. Which can be in <span class="r">red<i class="v2">Tooltip#2 - red color</i></span>, <span class="g">green<i class="v2">Tooltip#2 - green color</i></span> and <span class="b">blue<i class="v2">Tooltip#2 - blue color</i></span>.
	<hr />
	This is <span>tooltip#3<i class="v3">Tooltip number three</i></span>. Which can be in <span class="r">red<i class="v3">Tooltip#3 - red color</i></span>, <span class="g">green<i class="v3">Tooltip#3 - green color</i></span> and <span class="b">blue<i class="v3">Tooltip#3 - blue color</i></span>.
	<hr />
	This is <span>tooltip#4<i class="v4">Tooltip number four</i></span>. Which can be in <span class="r">red<i class="v4">Tooltip#4 - red color</i></span>, <span class="g">green<i class="v4">Tooltip#4 - green color</i></span> and <span class="b">blue<i class="v4">Tooltip#4 - blue color</i></span>.
	<hr />
	<span class="img"> <img src="https://www.script-tutorials.com/demos/209/images/1.jpg"> <i><img src="https://www.script-tutorials.com/demos/209/images/1.jpg"></i> </span>
	<span class="img g"> <img src="https://www.script-tutorials.com/demos/209/images/2.jpg"> <i class="v2"><img src="https://www.script-tutorials.com/demos/209/images/2.jpg"></i> </span>
	<span class="img r"> <img src="https://www.script-tutorials.com/demos/209/images/3.jpg"> <i class="v3"><img src="https://www.script-tutorials.com/demos/209/images/3.jpg"></i> </span>
</div>
<style type="text/css" rel="stylesheet">
	.content {
		background-color: rgba(255,255,255, 0.9);
		margin: 50px auto;
		width: 800px;
	}
	.content span {
		background: #eee;
		border: 1px solid #444;
		cursor: pointer;
		display: inline-block;
		outline: none;
		padding: 0 5px;
		position: relative;
		text-decoration: none;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
		-o-border-radius: 5px;
		border-radius: 5px;
	}
	.content span i {
		visibility: hidden;
		border: 1px solid #444;
		bottom: 60px;
		left: 50%;
		margin-left: -110px;
		opacity: 0;
		padding: 10px;
		position: absolute;
		width: 200px;
		z-index: 99;
		background-image: -webkit-linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.2));
		background-image: -moz-linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.2));
		background-image: -ms-linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.2));
		background-image: -o-linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.2));
		background-image: linear-gradient(rgba(255,255,255,.6), rgba(255,255,255,.2));
		background-color: #eee;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
		-o-border-radius: 5px;
		border-radius: 5px;
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		-ms-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
	.content span:hover i {
		bottom: 30px;
		opacity: 0.95;
		visibility: visible;
	}
	.content span:hover i.v2 {
		bottom: 30px;
		-webkit-transform: scale(1.3);
		-moz-transform: scale(1.3);
		-ms-transform: scale(1.3);
		-o-transform: scale(1.3);
		transform: scale(1.3);
	}
	.content span:hover i.v3 {
		-webkit-transform: rotateX(360deg) scale(1.2);
		-moz-transform: rotateX(360deg) scale(1.2);
		-ms-transform: rotateX(360deg) scale(1.2);
		-o-transform: rotateX(360deg) scale(1.2);
		transform: rotateX(360deg) scale(1.2);
	}
	.content span i.v4 {
		height: 70px;
		margin-left: -60px;
		padding-top: 40px;
		text-align: center;
		width: 100px;
		-webkit-border-radius: 50% 50% 50% 50%;
		-moz-border-radius: 50% 50% 50% 50%;
		-ms-border-radius: 50% 50% 50% 50%;
		-o-border-radius: 50% 50% 50% 50%;
		border-radius: 50% 50% 50% 50%;
	}
	.content span i:before, .content span i:after {
		border-bottom: 0;
		border-left: 8px solid transparent;
		border-right: 8px solid transparent;
		border-top: 8px solid #444;
		bottom: -8px;
		content: "";
		left: 50%;
		margin-left: -8px;
		position: absolute;
		z-index: 100;
	}
	/* custom colors */
	.content span.r {
		background: #f88;
	}
	.content span.r i {
		background-color: #f44;
		border: 1px solid #f44;
	}
	.content span.r i:before, .content span.r i:after {
		border-top-color: #f44;
	}
	.content span.g {
		background: #8f8;
	}
	.content span.g i {
		background-color: #4f4;
		border: 1px solid #4f4;
	}
	.content span.g i:before, .content span.g i:after {
		border-top-color: #4f4;
	}
	.content span.b {
		background: #88f;
	}
	.content span.b i {
		background-color: #44f;
		border: 1px solid #44f;
	}
	.content span.b i:before, .content span.b i:after {
		border-top-color: #44f;
	}
	/* images */
	.content span img {
		height: 128px;
		width: 128px;
	}
	.content span.img i {
		height: auto;
		margin-left: -65px;
		margin-top: -10px;
		width: auto;
	}
	.content span.img i:before, .content span.img i:after {
		display: none;
	}
	.content span:hover i img {
		height: auto;
		width: auto;
	}
</style>