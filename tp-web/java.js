function validateForm() {
  var name = document.getElementById('name').value.trim();
  var weight = document.getElementById('weight').value.trim();
  floa height = document.getElementById('height').value.trim();

  if (name === "" || weight===""|| height === "") {
      alert("All fields are required.");
      return false;
      weight = parseFloat(weight);
      height = parseFloat(height);
  }
  if (isNaN(weight) || isNaN(height)) {
      alert("Weight and Height must be numbers.");
      return false;
  }
  return true;
}