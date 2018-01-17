/* Welcome to the Fun Button!

To continbute a function, following the directions below:
1. Copy the example function below and paste it between the ***** lines to begin.
2. Change the name of your function to a name of your choice.
3. Customize your function so that it works the way you'd like.
        -You can debug your function by calling it from the console of your preview.
4. When your function is done, add the NAME OF YOUR FUNCTION without () to the outputJunk array below. 


*/


//Let's the client know this script loaded correctly in the browser
console.log("This loaded y'all!");



//EXAMPLE FUNCTION TEMPLATE
var example = function(){
    //Changes the output element to read "EXAMPLE"
    var myString = 'EXAMPLE'
    
    var outputHolder = document.getElementById('fun-output');//gets the output element in the webpage
    outputHolder.innerHTML = myString; //appends the new script into the output.
};


/**      ___
 * | /  |     |\   |  |\   | \  /
 * |/   |__   | \  |  | \  |  \/
 * |\   |     |  \ |  |  \ |  ||
 * | \  |___  |   \|  |   \|  ||
 *  __      __          ' ______
 * |  \    /  \  |\   |     || 
 * |   |  |    | | \  |     ||
 * |   |  |    | |  \ |     ||
 * |__/    \__/  |   \|     ||
 * ______  __             ____  
 *   ||   /  \  |    |   /       |    |
 *   ||  |    | |    |  |        |____|
 *   ||  |    | |    |  |        |    |
 *   ||   \__/   \__/    \____   |    |
 * */

//Here are some examples of the functions you can make to mess with the webpage!
/**var manyZoos = function(){//this could be done with one line of code...
    //Automatically re-directs the user to a video from Too Many Zoos on YouTube
    
    var sDiv = document.createElement("script"); //Creates a new script element
    sDiv.innerHTML = "window.location = 'https://www.youtube.com/embed/IMyqasy2Lco?start=137&autoplay=1&controls=0'"; //Sets the HTML content of the element to re-direct the user
    var outputEl = document.getElementById('fun-output');//gets the output element in the webpage
    outputEl.appendChild(sDiv); //appends the new script into the output.
    window.open("https://www.youtube.com/embed/IMyqasy2Lco?start=137&autoplay=1&controls=0");
};
var showRandall = function(){
    var RandallEl = document.createElement('img');
    RandallEl.setAttribute("src","https://preview.ibb.co/nymVPQ/hedgehogg.png");
    RandallEl.setAttribute("title","This is Randall, made by a mix of pure love, math, and malice.");
    var outputEl = document.getElementById('fun-output');
    outputEl.appendChild(RandallEl);
};

var showEvan = function(){
    var EvanEl = document.createElement('img');
    EvanEl.setAttribute("src","https://preview.ibb.co/c299Sb/2016_12_05_05_54_32.jpg");
    EvanEl.setAttribute("title","Pimp Daddy Evaugn, The best Evaugn in town");
    var outputEl = document.getElementById('fun-output');
    outputEl.appendChild(EvanEl);
};
var shlopified = function(){
    document.body.style.backgroundImage = "url('https://preview.ibb.co/kcbz5m/shlop.jpg')";
};
var kennybunny = function(){
    document.body.style.backgroundImage = "url('https://preview.ibb.co/krFfzQ/3322.jpg')";
};

**/
var randPicture = function(){
	console.log("Called randPicture");
	var picRnd = randomChoice(picList);
	var picTitle = randomChoice(picTitles);
    var picEl = document.createElement('img');
    picEl.setAttribute("src",picRnd);
    picEl.setAttribute("title",picTitle);
    var outputEl = document.getElementById('fun-output');
    outputEl.appendChild(picEl);
};
var picList = [
	"https://preview.ibb.co/nymVPQ/hedgehogg.png",
	"https://preview.ibb.co/c299Sb/2016_12_05_05_54_32.jpg"
	];
	
var picTitles = [
	"This is Randall, made by a mix of pure love, math, and malice.",
	"Pimp Daddy Evaugn, The best Evaugn in town"
	];
	
var randVideo = function(){
	console.log("Called randVideo");
	var type = randomChoice(videoList);
	var video = randomChoice(type);
	//Math.round(Math.random()*(videoList.length-1));
	//var objRnd = Math.round(Math.random()*(videoList.otoRnd.length));
	window.open(video);
};

var hedgehogs = function(){
	console.log("Called hedgehogs");
	window.open("https://docs.google.com/document/d/1T6kj8-V8Bn7IafELpgcBdiBT9ucRK9FSVucnAFSPcvA/edit");
}

var videoList = 
	[
		
		//Otomatone Videos curated by Ben
		[
		"https://www.youtube.com/embed/4ROqQ99zVtQ?autoplay=1&controls=0",
		"https://www.youtube.com/embed/8OQtrmhpIXU?autoplay=1&controls=0",
		"https://www.youtube.com/embed/9uuwbSUdW8M?autoplay=1&controls=0",
		"https://www.youtube.com/embed/-FwAQ7BxZQ4?autoplay=1&controls=0",
		"https://www.youtube.com/embed/KIoIsDXXZp0?autoplay=1&controls=0",
		"https://www.youtube.com/embed/A2_liowdedI?autoplay=1&controls=0",
		"https://www.youtube.com/embed/MEianU8A7tY?autoplay=1&controls=0",
		"https://www.youtube.com/embed/G8iEMVr7GFg?autoplay=1&controls=0",
		"https://www.youtube.com/embed/x0plnLJ7Dm0?autoplay=1&controls=0",
		"https://www.youtube.com/embed/uh8s8-LD5io?autoplay=1&controls=0",
		"https://www.youtube.com/embed/e4zjgUoXU_U?autoplay=1&controls=0",
		"https://www.youtube.com/embed/VlqA0uq6i6E?autoplay=1&controls=0",
		"https://www.youtube.com/embed/Oub55g9wog0?autoplay=1&controls=0",
		"https://www.youtube.com/embed/HmFsmw3ICcI?autoplay=1&controls=0",
		"https://www.youtube.com/embed/R5CcvCRS6uo?autoplay=1&controls=0",
		"https://www.youtube.com/embed/UOONbcse5B8?autoplay=1&controls=0"
		],
		[
		//too many zooz and that weird saxophone guy
		"https://www.youtube.com/embed/IMyqasy2Lco?start=137&autoplay=1&controls=0",
		"https://www.youtube.com/embed/jEHOsWTsdkY?autoplay=1&controls=0"
		],
		//Random Videos
		[
		"https://www.youtube.com/embed/x81iip6psks?autoplay=1&controls=0",
		"https://www.youtube.com/embed/mxhxL1LzKww?start=243&autoplay=1&controls=0"
		]
];

var backgroundList = [
	"url('https://preview.ibb.co/kcbz5m/shlop.jpg')",
	"url('https://preview.ibb.co/krFfzQ/3322.jpg')"
	];
	
var rndSolitaire = [
	"https://image.ibb.co/hBHdLG/Shlok_2.png",
	"data:image/png;base64,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",
	"https://image.ibb.co/eAX1FR/Goat_copy.png",
	"https://image.ibb.co/kycbFR/steve_harvey_copy.png",
	"js/Untitled-2.png"
	];



var solitaire = function(){
			console.log("Called solitaire");
			var instruct = document.createElement("P");                      
			var t = document.createTextNode("Having fun yet?");
			var outputEl = document.getElementById('fun-output');
			outputEl.appendChild(t);                                          
			document.body.appendChild(instruct);
			var canvas = document.createElement( 'canvas' );
			var outputCan = document.getElementById('fun-output');
			canvas.style.position = 'fixed';
			canvas.style.zIndex =  "-10";
			canvas.style.top = String(document.documentElement.scrollTop) +"px";
			canvas.style.left = "0px";
			canvas.width = window.innerWidth;
			canvas.height = window.innerHeight;
			outputCan.appendChild(canvas);
			var context = canvas.getContext( '2d' );
			var id = 1;
			var image = document.createElement( 'img' );
			image.src = randomChoice(rndSolitaire);
			var cwidth = image.width, cwidthhalf = cwidth / 2;
			var cheight =image.height, cheighthalf = cheight / 2;
			console.log("Width: "+cwidth+", Height: "+cheight);
			
			var particles = [];
			
			var ParticleSolitaire = function ( id, x, y, sx, sy ) {
				if ( sx === 0 ) sx = 2;
				var cx = ( id % 4 ) * cwidth;
				var cy = Math.floor( id / 4 ) * cheight;
				this.update = function () {
					x += sx;
					y += sy;
					if ( x < ( - cwidthhalf ) || x > ( canvas.width + cwidthhalf ) ) {
						var index = particles.indexOf( this );
						particles.splice( index, 1 );
						return false;
					
					}
					if ( y > canvas.height - cheighthalf ) {
						y = canvas.height - cheighthalf;
						sy = - sy * .9; 
					}
					sy += 0.98; 
					context.drawImage( image, cx, cy, cwidth, cheight, Math.floor( x - cwidthhalf ), Math.floor( y - cheighthalf ), cwidth, cheight	);
					return true;
				}
			}
			var throwCard = function ( x, y ) {
				id > 0 ? id -- : id = 1;
				var particle = new ParticleSolitaire( id, x, y, Math.floor( Math.random() * 6 - 3 ) * 2, - Math.random() * 25 );
				particles.push( particle );
			}
			document.addEventListener( 'mousedown', function ( event ) {
    			throwCard( event.clientX, event.clientY );
				document.addEventListener( 'mousemove', onMouseMove, false );
			}, false );
			document.addEventListener( 'mouseup', function ( event ) {
				throwCard( event.clientX, event.clientY );
				document.removeEventListener( 'mousemove', onMouseMove, false );
			}, false );
			function onMouseMove( event ) {
				event.preventDefault();
				throwCard( event.clientX, event.clientY );
			}
			document.addEventListener( 'touchstart', function ( event ) {
				event.preventDefault();
				for ( var i = 0; i < event.changedTouches.length; i ++ ) {
					throwCard( event.changedTouches[ 0 ].pageX, event.changedTouches[ 0 ].pageY );
				}
			}, false );
			document.addEventListener( 'touchmove', function ( event ) {
				event.preventDefault();
				for ( var i = 0; i < event.touches.length; i ++ ) {
					throwCard( event.touches[ i ].pageX, event.touches[ i ].pageY );
				}
			}, false );
			setInterval( function () {
				var i = 0, pl = particles.length;
				while ( i < pl ) {
					particles[ i ].update() ? i ++ : pl --; //check particle.update for condition. If paricle.update returns true, stops loop
				}
			}, 1000/60 );
};

//This array holds all of the possible functions that could randomly be selected when the 'fun' button is pressed.
//Once your function is ready, place its name in the array below!

    
var randomChoice = function (funcArray){
	var num = Math.round(Math.random()*(funcArray.length-1));
	var selectedThingy = funcArray[num];
	console.log(num);
	return selectedThingy;
};



var randBackground = function(){
	console.log("Called randBackground");
	var randBgsource = randomChoice(backgroundList);
	document.body.style.backgroundImage=randBgsource;
};

var outputJunk = [
    randPicture,
    randVideo,
    randBackground,
    hedgehogs,
    solitaire//by John Lay
    ];

var clearOutput = function(){
    var outputEl = document.getElementById('fun-output');
    outputEl.innerHTML = "";
};

//This function chooses a random function from the array above and runs it when the user clicks the 'fun' button.
var buttonFun = function (){
    clearOutput();
    var rndIndex = Math.round(Math.random()*(outputJunk.length-1));
	outputJunk[rndIndex]();
};