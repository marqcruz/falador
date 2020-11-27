const stopButton3 = document.querySelector('#stopButton3');

let context,
	oscillator,
  contextGain,
  x = 0;

function start(){
	context = new AudioContext();
	oscillator = context.createOscillator();
  contextGain = context.createGain();
  
  oscillator.connect(contextGain);
	contextGain.connect(context.destination);
	oscillator.start(0);
}

function stop(){
  start();
  contextGain.gain.exponentialRampToValueAtTime(
  	0.00001, context.currentTime + x
	)
}

stopButton3.addEventListener('click', function(){
	x = 8;
  stop();
});