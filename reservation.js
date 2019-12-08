let btnRes = document.getElementById('buttonReservation');
let nameVar = document.getElementById('name').value;
let dateVar = document.getElementById('date').value;
let timeVar = document.getElementById('time').value;

btnRes
		.addEventListener(
				"click",
				function() {
					alert(
							"Ihre Reservierung für einen Tisch bei QMUH Ravensburg auf den Namen ",
							document.getElementById('name').value, " am ",
							document.getElementById('date').value, " um ",
							document.getElementById('time').value,
							" wurde erfolgreich übermittelt.")
				});