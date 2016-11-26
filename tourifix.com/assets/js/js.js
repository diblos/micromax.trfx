function getSession(){    
	isLogin=$.jStorage.get("login",false);
}

function setSession($bool){
	$.jStorage.set("login",$bool);
}