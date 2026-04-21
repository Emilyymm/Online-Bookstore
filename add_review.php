<!DOCTYPE html>
<html>
<head>
<title>Leave Review</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Leave a Review</h2>

<form action="submit_review.php" method="POST">

<label>Book ID</label>
<input type="text" name="book_id" required>

<label>Your Name</label>
<input type="text" name="username" required>

<label>Your Review</label>
<textarea name="review"></textarea>

<button type="submit">Submit Review</button>

</form>

</body>
</html>