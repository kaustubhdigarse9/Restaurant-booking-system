function validate() {
  var mobileno = document.myform.mobileno.value;
  for (i = 0; i < mobileno.length; i++) {
    if (
      (document.myform.mobileno.value.length >= "a" &&
        document.myform.mobileno.value.length <= "z") ||
      (document.myform.mobileno.value.length >= "A" &&
        document.myform.mobileno.value.length <= "Z")
    ) {
      alert("Mobile Number should not contain characters");
      return false;
    } else {
      true;
    }
  }
  if (
    document.myform.mobileno.value.length > 10 ||
    document.myform.mobileno.value.length < 10
  ) {
    alert("Mobile Number should have 10 characters");
    return false;
  } else {
    true;
  }

  if (
    document.myform.mobileno.value.length == null ||
    document.myform.mobileno.value.length == ""
  ) {
    alert("Mobile number can't be blank");
    return false;
  } else {
    true;
  }
}
