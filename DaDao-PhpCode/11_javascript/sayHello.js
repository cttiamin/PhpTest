function helloWorld(){
	var hello="hello "+document.getElementById("user").value;
	alert(hello.toLowerCase());//���Сд
	}
function bigHelloWorld(){
	var hello="hello "+document.getElementById("user").value;
	alert(hello.toUpperCase());	//��ɴ�д
	}
function check(big){
	var user=document.getElementById("user").value;
	if(user==""){
		alert("�������û���");
		}else{
			switch(big){
				case 1:helloWorld();
				break;
				case 2:bigHelloWorld();
				break;
				case 3:alert("����");
				}
			
			}
	}