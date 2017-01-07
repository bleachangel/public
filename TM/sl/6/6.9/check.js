function checkregtel(regtel){
	var str=regtel;
	var Expression=/^13(\d{9})$|^18(\d{9}$|^15(\d{9})$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}

function checkregtels(regtels){
	var str=regtels;
	var Expression=/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$/;
	var objExp=new RegExp(Expression);
	if (objExp.test(str)==true) {
		return true;
	}else{
		return false;
	}
}

function checkregemail(emails){
	var str=emails;
	var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
	var objExp=new RegExp(Expression);
	if (objExp.test(str)==true) {
		return true;
	}else{
		return false;
	}
}