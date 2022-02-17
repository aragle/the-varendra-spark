function auth() {
    var code = document.getElementById("code").value;

    if (code == "tvs@123") {
        window.location.href = "main-index.php";
    } else {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }
        document.getElementById("message").innerHTML = "authID: " + generateString(16) + "<br>Wrong Code or You're not invited.";
    }

}
