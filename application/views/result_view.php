<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
</head>
<body>
	<div id="alert">
		<p>Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> time(s) now.</p>
	</div>
	<div id="body">
		<h2>Submitted Information</h2>
		<p>Name: <?php echo $survey_info['name']; ?></p>
		<p>Dojo Location: <?php echo $survey_info['location']; ?></p>
		<p>Favorite Language: <?php echo $survey_info['language']; ?></p>
		<p>Comment: <?php echo $survey_info['comment']; ?></p>
		<a href="/home">Go Back</a>
	</div>
</body>
</html>