function onLoad() {
	document.getElementById("typeLogin").value = 0;
	changeLogin();
	document.getElementById("type").value = 0;
	changeFields();
}

function changeLogin() {
	console.log("changeLogin at changed value");
	if (document.getElementById("typeLogin").value == 2) {
		document.getElementById("namelabelLogin").style.display = '';
		document.getElementById("namelabelLogin").innerHTML = 'Restaurantname';
		document.getElementById("usernameLogin").style.display = '';
		document.getElementById("pwlabel").style.display = '';
		document.getElementById("pw").style.display = '';
	} else if (document.getElementById("typeLogin").value == 1) {
		document.getElementById("namelabelLogin").style.display = '';
		document.getElementById("namelabelLogin").innerHTML = 'Benutzername';
		document.getElementById("usernameLogin").style.display = '';
		document.getElementById("pwlabel").style.display = '';
		document.getElementById("pw").style.display = '';
	} else {
		document.getElementById("namelabelLogin").style.display = 'none';
		document.getElementById("usernameLogin").style.display = 'none';
		document.getElementById("pwlabel").style.display = 'none';
		document.getElementById("pw").style.display = 'none';
	}
}

function changeFields() {
	if (document.getElementById("type").value == 2) {
		document.getElementById("namelabel").style.display = '';
		document.getElementById("name").style.display = '';
		document.getElementById("emaillabel").style.display = '';
		document.getElementById("email").style.display = '';
		document.getElementById("restNameLabel").style.display = '';
		document.getElementById("restName").style.display = '';
		document.getElementById("restAdressLabel").style.display = '';
		document.getElementById("restAdress").style.display = '';
		document.getElementById("requestlabel").style.display = '';
		document.getElementById("request").style.display = '';
	} else if (document.getElementById("type").value == 1) {
		document.getElementById("namelabel").style.display = '';
		document.getElementById("name").style.display = '';
		document.getElementById("emaillabel").style.display = '';
		document.getElementById("email").style.display = '';
		document.getElementById("restNameLabel").style.display = 'none';
		document.getElementById("restName").style.display = 'none';
		document.getElementById("restAdressLabel").style.display = 'none';
		document.getElementById("restAdress").style.display = 'none';
		document.getElementById("requestlabel").style.display = '';
		document.getElementById("request").style.display = '';
	} else {
		document.getElementById("namelabel").style.display = 'none';
		document.getElementById("name").style.display = 'none';
		document.getElementById("emaillabel").style.display = 'none';
		document.getElementById("email").style.display = 'none';
		document.getElementById("restNameLabel").style.display = 'none';
		document.getElementById("restName").style.display = 'none';
		document.getElementById("restAdressLabel").style.display = 'none';
		document.getElementById("restAdress").style.display = 'none';
		document.getElementById("requestlabel").style.display = 'none';
		document.getElementById("request").style.display = 'none';
	}
}

function setTypeValue() {
	if (document.getElementById("typeLogin").value == 2) {
		document.getElementById("typeinput").value = '2';
	} else if (document.getElementById("typeLogin").value == 1) {
		document.getElementById("typeinput").value = '1';
		document.getElementById("restName").value = '-';
		document.getElementById("restAdress").value = '-';
	}
}