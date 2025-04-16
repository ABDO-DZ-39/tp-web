<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/
bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
<form method="POST" action="">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="weight">Weight (kg)</label>
    <input type="number" name="weight" step="0.1" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="height">Height (m)</label>
    <input type="number" name="height" step="0.01" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Calculate BMI</button>
</form>