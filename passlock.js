function passWord() {
	var testV = 1;
	var pass1 = prompt('Bitte Passwort eingeben', ' ');
	while (testV < 3) {
		if (pass1 == "letmein") {
			alert('Richtig!');
			window.open('admin.html');
			break;
		}
		testV += 1;
		var pass1 =
			prompt('Zugriff  verweigert – Passwort falsch, bitte erneut versuchen!', 'Passwort');
	}
	return " ";
}