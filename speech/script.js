let convert = document.querySelector(".convert");
let speech = new SpeechSynthesisUtterance();
let textarea = document.querySelector(".textarea");
let volume = document.querySelector(".volume");
let pitch = document.querySelector(".pitch");
let rate = document.querySelector(".rate");

function convertText(){

speech.text = textarea.value;
speech.pitch = 1;
speech.volume = 1;
speech.lang = "en-US";
speech.rate = 1;

speechSynthesis.speak(speech);
}

convert.addEventListener("click", ()=>{
  convertText();
});