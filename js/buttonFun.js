//Let's the client know this script loaded correctly in the browser
console.log("This loaded y'all!");


    
    
    
    


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
    RandallEl.setAttribute("src","https://preview.ibb.co/nymVPQ/hedgehogg.png")
    RandallEl.setAttribute("title","This is Randall, made by a mix of pure love, math, and malice.");
    var outputEl = document.getElementById('fun-output');
    outputEl.appendChild(RandallEl);
}

//This array holds all of the possible functions that could randomly be selected when the 'fun' button is pressed.
var outputJunk = [
    manyZoos,
    showRandall
    ];
    
var clearOutput = function(){
    var outputEl = document.getElementById('fun-output');
    outputEl.innerHTML = "";
}

//This function chooses a random function from the array above and runs it when the user clicks the 'fun' button.
var buttonFun = function (){
    clearOutput();
    var rndIndex = Math.round(Math.random()*(outputJunk.length-1));
    console.log(rndIndex);
    outputJunk[rndIndex]();
};