
var myProgressBar = null
var timerId = null

function loadProgressBar(){
	myProgressBar = new ProgressBar("my_progress_bar_1",{
		borderRadius: 10,
		width: 300,
		height: 20,
		maxValue: 100,
		labelText: "Loaded in {value,0} %",
		orientation: ProgressBar.Orientation.Horizontal,
		direction: ProgressBar.Direction.LeftToRight,
		animationStyle: ProgressBar.AnimationStyle.LeftToRight1,
		animationSpeed: 1.5,
		imageUrl: 'images/v_fg12.png',
		backgroundUrl: 'images/h_bg2.png',
		markerUrl: 'images/marker2.png'
	});
	
	timerId = window.setInterval(function() {
		if (myProgressBar.value >= myProgressBar.maxValue)
			myProgressBar.setValue(0);
		else
			myProgressBar.setValue(myProgressBar.value+1);
		
	},
	100);
}

loadProgressBar();
