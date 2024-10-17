<form>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="feedback">Feedback:</label>
  <textarea id="feedback" name="feedback"></textarea><br><br>
  <input type="submit" value="Send Feedback" onclick="sendFeedback()">
</form>

<script>
  function sendFeedback() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var feedback = document.getElementById("feedback").value;
    var subject = "Feedback from " + name;
    var body = "Name: " + name + "\nEmail: " + email + "\nFeedback: " + feedback;
    var mailto = "mailto:kazibwefrank759@(link unavailable)" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
    window.location.href = mailto;
  }
</script>

