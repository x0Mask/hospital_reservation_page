// Add this script at the end of your body tag in index.php
document.querySelector("form").addEventListener("submit", function (e) {
	const name = document.querySelector("#name").value.trim();
	const email = document.querySelector("#email").value.trim();
	const date = document.querySelector("#date").value.trim();

	if (!name || !email || !date) {
		alert("برجاء ملاء جميع الحقول");
		e.preventDefault(); // Prevent the form from being submitted
	}

	// Additional email format validation
	const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailPattern.test(email)) {
		alert("برجاء ادخال بريد الكترونى صحيح");
		e.preventDefault();
	}
});
