<html>
<head>
<title>Bond Web Service Demo</title>
<style>
body {font-family:georgia;}
</style>
<script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {  

	$('.category').click(function(e){
        e.preventDefault(); //stop default action of the link
		cat = $(this).attr("href");  //get category from URL
		loadAJAX(cat);  //load AJAX and parse JSON file
	});
});	


function loadAJAX(cat)
{
	//AJAX connection will go here
    //alert('cat is: ' + cat);

	$.ajax({
		type: "GET", 
		dataType: "json", 
		url: "api.php?cat=" + cat,
		success: bondJSON

	});
}
    
function toConsole(data)
{//return data to console for JSON examination
	console.log(data); //to view,use Chrome console, ctrl + shift + j
}

function bondJSON(data){
	//here is how I see data returned via the console
	console.log(data);

	// this loads data on page but bunched up
	//$("#output").text(JSON.stringify(data));

	let myData = JSON.stringify(data,null,4);

	myData = "<pre>" + myData + "</pre>";
	$("#output").html(myData);
}

</script>
</head>
	<body>
	<h1>Bond Web Service</h1>
		<a href="year" class="category">Bond Films By Year</a><br />
		<a href="box" class="category">Bond Films By International Box Office Totals</a>
		<h3 id="filmtitle">Title Will Go Here</h3>
		<div id="films">
		h1>Bond Web Service</h1>
        <a href="year" class="category">Bond Films By Year</a><br />
        <a href="box" class="category">Bond Films By International Box Office Totals</a>
        <h3 id="filmtitle">Title Will Go Here</h3>
        <div id="films">
            <div class="film">
                <b>Film: </b>1<br />
                <b>Title: </b>Dr. No<br />
                <b>Year: </b>1962<br />
                <b>Director: </b>Terence Young<br />
                <b>Producers: </b>Harry Saltzman and Albert R. Broccoli <br />
                <b>Writers: </b>Richard Maibaum, Johanna Harwood and Berkely Mather<br />
                <b>Composer: </b>Monty Norman<br />
                <b>Bond: </b>Sean Connery<br />
                <b>Budget: </b>$1,000,000.00<br />
                <b>Box Office: </b>$59,567,035.00<br />

                "Image": "dr-no.jpg"

                    <div class="pic">img src"thumbnails/dr-no.jpg"</div>
                </div>
            </div>
		</div>
		<div id="output">Results go here</div>
	</body>
</html>