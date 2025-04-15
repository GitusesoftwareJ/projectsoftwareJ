document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const nameInput = form.querySelector("input[name='full_name']");
    const contactInput = form.querySelector("input[name='contact']");

    form.addEventListener("submit", function (e) {
        const fullName = nameInput.value.trim();
        const contactNumber = contactInput.value.trim();

        const isLongEnough = fullName.length >= 10;
        const startsWithCapital = /^[A-Z]/.test(fullName);
        const endsWithLowercase = /[a-z]$/.test(fullName);

        const isNumeric = /^\d+$/.test(contactNumber);
        const isEightDigits = contactNumber.length === 8;

        let errorMsg = "";

        if (!isLongEnough || !startsWithCapital || !endsWithLowercase) {
            errorMsg += "Invalid Full Name:\n";
            if (!isLongEnough) errorMsg += "- Must be at least 10 characters long\n";
            if (!startsWithCapital) errorMsg += "- Must start with a capital letter (A-Z)\n";
            if (!endsWithLowercase) errorMsg += "- Must end with a lowercase letter (a-z)\n";
        }

        if (!isNumeric || !isEightDigits) {
            errorMsg += "\nInvalid Contact Number:\n";
            if (!isNumeric) errorMsg += "- Must contain only numbers\n";
            if (!isEightDigits) errorMsg += "- Must be exactly 8 digits long\n";
        }

        if (errorMsg !== "") {
            e.preventDefault();
            alert(errorMsg);
        }
    });
});

