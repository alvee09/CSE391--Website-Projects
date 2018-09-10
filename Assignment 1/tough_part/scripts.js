function changeColor1(){
      document.getElementById("randomQuote").style.color= "black";
      document.getElementById("randomQuote").style.background= "lightgreen";
      document.getElementById("randomQuote").style.borderColor= "green";
      document.getElementById("randomQuote").style.fontSize = "18px";

    }
    function changeColor2(){
      document.getElementById("randomQuote").style.color= "black";
      document.getElementById("randomQuote").style.background= "lightblue";
      document.getElementById("randomQuote").style.borderColor= "blue";
      document.getElementById("randomQuote").style.fontSize = "20px";

    }
    function changeColor3(){
      document.getElementById("randomQuote").style.color= "black";
      document.getElementById("randomQuote").style.background= "pink";
      document.getElementById("randomQuote").style.borderColor= "red";
      document.getElementById("randomQuote").style.fontSize = "25px";

    }
	function changeColor4(){
      document.getElementById("randomQuote").style.color= "black";
      document.getElementById("randomQuote").style.background= "lightyellow";
      document.getElementById("randomQuote").style.borderColor= "orange";
      document.getElementById("randomQuote").style.fontSize = "15px";

    }
    function calc() {
      console.log("entered");
      var number = document.getElementById("convert").value; 
      var type= document.getElementById("choice").value;
      console.log("type" + type);
      if(type == "1")
      {
      	var num2 = Number(number);
      	num2= num2*0.4563;
      	ans= num2;
      	document.getElementById("ans").innerHTML= ans+ " pounds";
      }
      else if (type== "2")
      {
      	var num2 = Number(number);
      	num2 = num2*2.2046;
      	ans = num2;
      	document.getElementById("ans").innerHTML= ans+ " kilograms";
      }
      console.log(ans);
    }

//alert("connected");
	var max= 0;
	var rev= [];			
	var num =[];
//	var temp= [];
	function numAdd(val) {
		console.log(val);
		var item=0;
		num= val.split(",");
		console.log(num);
		findMax();
		printReverse();
				
				//findAvg(num);
		}
	function findMax() {
		item=0;
		for (var i = 0; i <=num.length - 2; i++) {
			if(Number(num[i])>max)
				{
					console.log("max"+num[i]);
					max= num[i];
					item++;
					console.log("item"+item);
				}
			}
		document.getElementById("max").innerHTML= max;
		findMin();
		}
	function findMin(){
		var min= Number(num[0]);
		for (var i = 0; i <=num.length - 2; i++) {
			if(Number(num[i])<min)
				{
					console.log("min"+num[i]);
					min= num[i];
				}
			}
		document.getElementById("min").innerHTML= min;
		findSum();
		}
	function findSum() {
		var sum= 0;
		var avg= 0;
		for (var i = 0; i <=num.length - 2; i++) {
			rev[i]=num[i];
			sum= sum+Number(num[i]);
			//console.log(num.length);
			avg= sum/(num.length-1);
			document.getElementById("sum").innerHTML= sum;
			document.getElementById("avg").innerHTML= avg;
			}
		}
	function printReverse(){
			//document.getElementById("rev").innerHTML= num[num.length-2];
		var rev= num.reverse();
		for (var i = 0; i <=rev.length-1; i++) {
		// data= document.getElementById("rev").value;
		//.log(data);
		console.log("rev item"+rev[i]);
		document.getElementById("rev").innerHTML=rev;
		console.log(rev[i]);
				}
		}

//part of magic starts here

var lines= ["First line", "second line", "third line",
"forth line","fifth line","sixth line","seventh line"];

var temp= [];

function prep_magic(){
	document.getElementById("line1").innerHTML= lines[0];
	document.getElementById("line2").innerHTML= lines[1];
	document.getElementById("line3").innerHTML= lines[2];
	document.getElementById("line4").innerHTML= lines[3];
	document.getElementById("line6").innerHTML= lines[4];
	document.getElementById("line7").innerHTML= lines[5];
	document.getElementById("line10").innerHTML= lines[6];
}
function clear_it() {
	for (var i = 0; i < lines.length; i++) {
		temp[i]=null;
	}
	printLines(temp);
	document.getElementById("line5").innerHTML= "";
	document.getElementById("line8").innerHTML= "";
	document.getElementById("line9").innerHTML= "";

	document.getElementById("line1").innerHTML="No item remaining";
}
function capital() {
	for (var i = 0; i < lines.length; i++) {
		temp[i]=lines[i].toUpperCase();
	}
	printLines(temp);
	
}
function sort() {
	temp = lines.sort();
	printLines(temp);
}
function reverse() {
	for (var i = 0; i < lines.length; i++) {
		temp[i]=lines[i].split(" ").reverse().join(" ");
	}
	printLines(temp);
}
function blank(){
	document.getElementById("line1").innerHTML= lines[0];
	document.getElementById("line2").innerHTML= lines[1];
	document.getElementById("line3").innerHTML= lines[2];
	document.getElementById("line4").innerHTML= lines[3];
	document.getElementById("line5").innerHTML= lines[4];
	document.getElementById("line6").innerHTML= lines[5];
	document.getElementById("line7").innerHTML= lines[6];

	document.getElementById("line8").innerHTML= null;
	document.getElementById("line9").innerHTML= null;
	document.getElementById("line10").innerHTML= null;

}
function add_num(){
	document.getElementById("line1").innerHTML= "1 "+lines[0];
	document.getElementById("line2").innerHTML= "2 "+lines[1];
	document.getElementById("line3").innerHTML= "3 "+lines[2];
	document.getElementById("line4").innerHTML= "4 "+lines[3];
	document.getElementById("line6").innerHTML= "5 "+lines[4];
	document.getElementById("line7").innerHTML= "6 "+lines[5];
	document.getElementById("line10").innerHTML= "7 "+lines[6];
}
function shuffle() {
	temp = [];
	var item_chosed=[];
		for(var x= lines.length-1; x>=0; x--)
		{	
			var randomNumber= Math.floor(Math.random() * Math.floor(x));
				temp[randomNumber]= lines[x];		
		}
	
	printLines(temp);	
}
function printLines(temp) {
	document.getElementById("line1").innerHTML= temp[0];
	document.getElementById("line2").innerHTML= temp[1];
	document.getElementById("line3").innerHTML= temp[2];
	document.getElementById("line4").innerHTML= temp[3];
	document.getElementById("line6").innerHTML= temp[4];
	document.getElementById("line7").innerHTML= temp[5];
	document.getElementById("line10").innerHTML= temp[6];
}