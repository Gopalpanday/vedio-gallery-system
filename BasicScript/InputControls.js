function validate() {
    var val = document.getElementById('username').value;
    if (val.length == 0) {
        document.getElementById('username').focus();
        return false;
    }
    var val1 = document.getElementById('password').value;
    if (val1.length == 0) {
        document.getElementById('password').focus();
        return false;
    }
}
function validate2() {
    var val2 = document.getElementById('oldpassword').value;
    if (val2.length == 0) {
        document.getElementById('oldpassword').focus();
        return false;
    }
    var val3 = document.getElementById('newpassword').value;
    if (val3.length == 0) {
        document.getElementById('newpassword').focus();
        return false;
    }
}