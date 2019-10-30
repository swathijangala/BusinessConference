function validateForm() {
      var x = document.forms["myForm"]["FirstName"].value;
      var y = document.forms["myForm"]["LastName"].value;
      if (x == null || x == "" || y == null || y == ""){
      alert("Enter proper Name");
      }
    }