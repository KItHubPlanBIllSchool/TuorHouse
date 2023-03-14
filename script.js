var div = document.getElementById('main')
var div1 = document.getElementById('main2')
var display = 1;

function hideShow()
{
	if(display == 1){
		div.style.display = 'block';
		div1.style.display = 'none';
		display = 0;
	}
	else{
		div.style.display = 'none';
		div1.style.display = 'block';
		display = 1;
	}
}