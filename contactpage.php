<?php include 'include/header.php';?>


<main class="container">
 
  <h1>Contact us</h1>
    

 
<form method="POST" name="contactform" action="contact-form-handler.php"> 
<form action="#" method="POST" class="needs-validation" novalidate>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
    <div class="invalid-feedback">
      Please enter your name.
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <div class="invalid-feedback">
      Please enter a valid email address.
    </div>
  </div>
  <div class="mb-3">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" required>
    <div class="invalid-feedback">
      Please enter a subject.
    </div>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    <div class="invalid-feedback">
      Please enter a message.
    </div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
    <div class="invalid-feedback">
      Please enter a valid phone number in the format XXX-XXX-XXXX.
    </div>
  </div>
  <div class="mb-3">
    <label for="company" class="form-label">Company</label>
    <input type="text" class="form-control" id="company" name="company">
  </div>
  <div class="mb-3">
    <label for="budget" class="form-label">Budget</label>
    <select class="form-control" id="budget" name="budget">
      <option value="">Choose...</option>
      <option value="Less than $500">$0 - $500</option>
      <option value="$500 - $1,000">$500 - $1,000</option>
      <option value="$1,000 - $5,000">$1,000 - $5,000</option>
      <option value="More than $5,000">More than $5,000</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</main><!-- /.container -->
<?php include 'include/footer.php';?>