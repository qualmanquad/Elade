<?php include 'inc/header.php'; ?>

    <h1>Contact Us</h1>

    <!-- https://formcarry.com/blog/how-to-create-a-simple-html-contact-form/ -->


  <div class="formcarry-container">
    <form class="formcarry-form" action="https://formsubmit.co/trevorqualman@gmail.com" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_subject" value="New submission!">
      <label for="name" >Your Name</label>
      <input type="text" placeholder="Name" name="name">

      <input type="hidden" name="_next" value="http://localhost:8080/elade/thankyou.php">

      <label for="email">Your Email Address*</label>
      <input type="email" name="email" placeholder="Email" required>

      <label for="tel">Phone Number</label>
      <input type="tel" name="tel" placeholder="Phone Number">

      <label for="address">Address</label>
      <textarea name="address" placeholder="Address" required></textarea>

      <label for="message">Tell us about your project </label>
      <textarea name="message" placeholder="Details of your project" required></textarea>

      <label for="message">Attachments </label>
      <input type="file" name="attachment" accept="image/png, image/jpeg">
      <button type="submit">Send</button>
    </form>
</div>
    
<?php include 'inc/footer.php'; ?>