function helloWorld(){
	var hello="hello "+document.getElementById("user").value;
	alert(hello.toLowerCase());//变成小写
	}
function bigHelloWorld(){
	var hello="hello "+document.getElementById("user").value;
	alert(hello.toUpperCase());	//变成大写
	}
function check(big){
	var user=document.getElementById("user").value;
	if(user==""){
		alert("请输入用户名");
		}else{
			switch(big){
				case 1:helloWorld();
				break;
				case 2:bigHelloWorld();
				break;
				case 3:alert("出错");
				}
			
			}
	}