$(document).ready(function() {
    setEmailAddress("info@chiccodicafe.com");
  });
  
  function setEmailAddress(emailValue) {
    $("#spanTest").append($("<a>").attr("href", "javascript:location='mailto:" + obfuscateString(emailValue) + "';void 0").text(obfuscateString(emailValue)));
  }
  
  function obfuscateString(plaintext) {
    var obfuscated = "";
  
    for (var i = 0; i < plaintext.length; i++) {
      obfuscated += "\\u00" + plaintext.charCodeAt(i).toString(16);
    }
  
    return obfuscated;
  }