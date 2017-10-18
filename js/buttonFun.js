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




//Here are some examples of the functions you can make to mess with the webpage!
var manyZoos = function(){
    //Automatically re-directs the user to a video from Too Many Zoos on YouTube
    
    var sDiv = document.createElement("script"); //Creates a new script element
    sDiv.innerHTML = "window.location = 'https://www.youtube.com/embed/IMyqasy2Lco?start=137&autoplay=1&controls=0'"; //Sets the HTML content of the element to re-direct the user
    var outputEl = document.getElementById('fun-output');//gets the output element in the webpage
    outputEl.appendChild(sDiv); //appends the new script into the output.
};

var showRandall = function(){
    var RandallEl = document.createElement('img');
    RandallEl.setAttribute("src","https://preview.ibb.co/nymVPQ/hedgehogg.png");
    RandallEl.setAttribute("title","This is Randall, made by a mix of pure love, math, and malice.");
    var outputEl = document.getElementById('fun-output');
    outputEl.appendChild(RandallEl);
};

var shlopified = function(){
    document.body.style.backgroundImage = "url('https://preview.ibb.co/kcbz5m/shlop.jpg')";
};

var kennybunny = function(){
    document.body.style.backgroundImage = "url('https://preview.ibb.co/krFfzQ/3322.jpg')";
};

//This array holds all of the possible functions that could randomly be selected when the 'fun' button is pressed.
//Once your function is ready, place its name in the array below!
var outputJunk = [
    manyZoos,
    showRandall,
    shlopified,
    kennybunny
    ];
    
var clearOutput = function(){
    var outputEl = document.getElementById('fun-output');
    outputEl.innerHTML = "";
};

//This function chooses a random function from the array above and runs it when the user clicks the 'fun' button.
var buttonFun = function (){
    clearOutput();
    var rndIndex = Math.round(Math.random()*(outputJunk.length-1));
    console.log(rndIndex);
    outputJunk[rndIndex]();
};