function changeLogin() {
	if (document.getElementById("type").value == 2) {
		document.getElementById("namelabel").style.display = '';
		document.getElementById("namelabel").innerHTML = 'Restaurantname';
		document.getElementById("username").style.display = '';
		document.getElementById("pwlabel").style.display = '';
		document.getElementById("pw").style.display = '';
	} else if (document.getElementById("type").value == 1) {
		document.getElementById("namelabel").style.display = '';
		document.getElementById("namelabel").innerHTML = 'Benutzername';
		document.getElementById("username").style.display = '';
		document.getElementById("pwlabel").style.display = '';
		document.getElementById("pw").style.display = '';
	} else {
		document.getElementById("namelabel").style.display = 'none';
		document.getElementById("username").style.display = 'none';
		document.getElementById("pwlabel").style.display = 'none';
		document.getElementById("pw").style.display = 'none';
	}
}