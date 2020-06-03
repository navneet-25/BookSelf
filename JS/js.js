 function dispnun(path){
    document.getElementById(path).innerHTML = "";
};

function nameFun(){

    var name = document.getElementById('user');

    if (name.value == "") {
        document.getElementById('username').innerHTML = "**Please Fill Your Name!!**";
        return false;
    }
    if (!isNaN(name.value)) {
        document.getElementById('username').innerHTML = "**Characters Are Allow!!**";
        return false;
    }
    if (name.value.length < 3 || name.value.length > 20) {
        document.getElementById('username').innerHTML = "**Invalid Characters**";
        return false;
    }else{
        dispnun('username');
    }
    

}

function passFun(){

    var password = document.getElementById('pass');

    if (password.value == "") {
            document.getElementById('passwords').innerText = "**Please Enter Your Password!!**";
            return false;
    }else {
        dispnun('passwords');
    }

    var upperCase = /[A-Z]/g;
    if (!password.value.match(upperCase)) {
        document.getElementById('passwords').innerHTML = "**Please Use UpperCase As Well**";
        return false;
    }
    var lowerCase = /[a-z]/g;
    if (!password.value.match(lowerCase)) {
        document.getElementById('passwords').innerHTML = "**Please Use LowerCase As Well**";
        return false;
    }
    var specialChar = /[@!#$%^&*]/g;
    if (!password.value.match(specialChar)) {
        document.getElementById('passwords').innerHTML = "**Please Use Special Characters As Well**";
        return false;
    }
    var number = /[0-9]/g;
    if (!password.value.match(number)) {
        document.getElementById('passwords').innerHTML = "**Please Use Numbers As Well**";
        return false;
    }
    if (password.value.length <= 8) {
        document.getElementById('passwords').innerHTML = "**Must Be In 8 Characters**";
        return false;
    }
}

function showFun(){
    var ShowPassword = document.getElementById('pass');

    if (ShowPassword.type === "password") {
        ShowPassword.type = "text";
    }else {
        ShowPassword.type = "password";
    }
}

function confirmPass(){
    var password = document.getElementById('pass');
    var confpass = document.getElementById('conpass');

    if (confpass.value == "") {
        document.getElementById('confrmpass').innerHTML = "Please Fill Your Password";
        return false;
    }
    if (password.value != confpass.value) {
        document.getElementById('confrmpass').innerHTML = "**Password Doest Match**";
        return false;
    }else {
        dispnun('confrmpass');
    }
}

function checkmob(){
    var mob = document.getElementById('mobileNumber');
    
    if(mob.value == ""){
        document.getElementById('mobileno').innerHTML =" ** Please fill the mobile Number field";
        return false;
    }		
    if (mob.value.length!=10) {
        document.getElementById('mobileno').innerHTML = "**Enter Correct Mobile Number**";
        return false;
    }else {
        dispnun('mobileno');
    }
}

function checkemail(){
    var emailc = document.getElementById('emails');
    if (emailc.value == "") {
        document.getElementById('emailids').innerHTML = "**Enter Your Email ID**";
        return false;
    }
    if (emailc.value.indexOf('@') == 0) {
        document.getElementById('emailids').innerHTML = "**@ on Invalid Posision**";
        return false;
    }
    if (!emailc.value.match('@')) {
        document.getElementById('emailids').innerHTML = "**Missing @**";
        return false;
    }if ((!emailc.value.match('gmail')) && (!emailc.value.match('yahoo'))) {
        document.getElementById('emailids').innerHTML = "**Missing gmail or yahoo**";
        return false;
    }
    if ((emailc.value.charAt(emailc.value.length-4)!='.') && (emailc.value.charAt(emailc.value.length-3)!='.')) {
        document.getElementById('emailids').innerHTML = "**'.' is on Invalid Posision**";
        return false;
    }
    if ((!emailc.value.match('com')) && (!emailc.value.match('in'))) {
        document.getElementById('emailids').innerHTML = "**Missing in/com**";
        return false;
    }else {
        dispnun('emailids');
    }

}

function Validation(){

    let name = document.getElementById('user');
    let password = document.getElementById('pass');
    let confpass = document.getElementById('conpass');
    let mob = document.getElementById('mobileNumber');
    let emailc = document.getElementById('emails');
    

    if (name.value == "") {
            document.getElementById('username').innerHTML = "**Please Fill Your Name!!**";
            return false;
    }
    if (!isNaN(name.value)) {

        document.getElementById('username').innerHTML = "**Characters Are Allow!!**";
        return false;
    }
    if (name.value.length < 3 || name.value.length > 20) {
        document.getElementById('username').innerHTML = "**Invalid Characters**";
        return false;
    }else{
        document.getElementById('username').innerHTML = "";
    }

    if (password.value == "") {
            document.getElementById('passwords').innerHTML = "**Please Enter Your Password!!**";
            return false;
    }

    var upperCase = /[A-Z]/g;
    if (!password.value.match(upperCase)) {
        document.getElementById('passwords').innerHTML = "**Please Use UpperCase As Well**";
        return false;
    }
    var lowerCase = /[a-z]/g;
    if (!password.value.match(lowerCase)) {
        document.getElementById('passwords').innerHTML = "**Please Use LowerCase As Well**";
        return false;
    }
    var specialChar = /[@!#$%^&*]/g;
    if (!password.value.match(specialChar)) {
        document.getElementById('passwords').innerHTML = "**Please Use Special Characters As Well**";
        return false;
    }
    var number = /[0-9]/g;
    if (!password.value.match(number)) {
        document.getElementById('passwords').innerHTML = "**Please Use Numbers As Well**";
        return false;
    }
    if (password.value.length <= 8) {
        document.getElementById('passwords').innerHTML = "**Must Be In 8 Characters**";
        return false;
    }

    if (confpass.value == "") {
        document.getElementById('confrmpass').innerHTML = "Please Fill Your Password";
        return false;
    }
    if (password.value != confpass.value) {
        document.getElementById('confrmpass').innerHTML = "**Password Doest Match**";
        return false;
    }

    if(mob.value == ""){
        document.getElementById('mobileno').innerHTML =" ** Please fill the mobile Number field";
        return false;
    }
    if (mob.value.length!=10) {
        document.getElementById('mobileno').innerHTML = "**Enter Correct Mobile Number**";
        return false;
    }

    if (emailc.value == "") {
        document.getElementById('emailids').innerHTML = "**Enter Your Email ID**";
        return false;
    }
    if (emailc.value.indexOf('@') == 0) {
        document.getElementById('emailids').innerHTML = "**@ on Invalid Posision**";
        return false;
    }
    if (!emailc.value.match('@')) {
        document.getElementById('emailids').innerHTML = "**Missing @**";
        return false;
    }if ((!emailc.value.match('gmail')) && (!emailc.value.match('yahoo'))) {
        document.getElementById('emailids').innerHTML = "**Missing gmail or yahoo**";
        return false;
    }
    if ((emailc.value.charAt(emailc.value.length-4)!='.') && (emailc.value.charAt(emailc.value.length-3)!='.')) {
        document.getElementById('emailids').innerHTML = "**'.' is on Invalid Posision**";
        return false;
    }
    if ((!emailc.value.match('com')) && (!emailc.value.match('in'))) {
        document.getElementById('emailids').innerHTML = "**Missing in/com**";
        return false;
    }
} 

