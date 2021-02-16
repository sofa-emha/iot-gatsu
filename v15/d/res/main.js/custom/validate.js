var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button
$("#loginFromIOT").submit(function(e) {
    e.preventDefault();
});

function validate() {
    var username = document.getElementById("loginUser").value;
    var password = document.getElementById("loginPassword").value;

    if (username == "" && password == "") {
        alert("Nama pengguna dan kata sandi masih kosong.");
    } else if (username == "" || password == "") {
        alert("Salah satu dari nama pengguna atau kata sandi masih kosong.");
    } else if (username == "admin" && password == "root") {
        window.location.href = "/d/my/";
        return false;
    } else if (username == "iotgatsu" && password == "GatotSubroto31") {
        window.location.href = "/d/my/";
        return false;
    } else {
        attempt --;
        if (attempt >=1 ) {
            alert("Anda memiliki "+attempt+"x kesempatan lagi.");
        } else if (attempt == 0) {
            document.getElementById("loginUser").disabled = true;
            document.getElementById("loginPassword").disabled = true;
            document.getElementById("submit").disabled = true;
            alert("Anda tidak memiliki kesempatan lagi, silahkan refresh halaman ini.");
            return false;
        }
    }
}