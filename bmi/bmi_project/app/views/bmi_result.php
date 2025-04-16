<div class="alert alert-info">
  <strong>Result:</strong><br>
  Hello, <?php echo htmlspecialchars($name); ?>. Your BMI is <?php echo number_format($bmi, 2); ?> (<?php echo $status; ?>).
</div>