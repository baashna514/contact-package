<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 style="text-align: center;">Contact Us Form</h2>

<div class="container">
  <div style="text-align:center">
    <h2>Webeasy (Pvt) Ltd.</h2>
    <p style="padding-left: 50px;padding-right: 50px;">WebEasy Pvt Ltd is a brand & digital communication agency. We service clients with a passion to strengthen
        Their brand & allow them to reach new levels of customer awareness & interaction.
        Our professional team is client-oriented aiming to fully understand your needs & incorporate it
        With market trends & deliver it as an integrated package of services.</p>
  </div>
  <div class="row">
    <div class="column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13611.530605397264!2d74.3765994!3d31.4724141!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d5ca0193a4fa34f!2sWEBEASY%20(Pvt)%20Limited!5e0!3m2!1sen!2s!4v1631118501827!5m2!1sen!2s" width="850" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="column">
      <form action="{{route('contact-action')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.." required>
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:170px" required></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
