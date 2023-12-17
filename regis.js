function validate() {
  if (
    document.myform2.password.value.length > 5 ||
    document.myform2.password.value.length < 30
  ) {
    alert("password should be between 5 and 20 characters");
    return false;
  } else {
    true;
  }
}
