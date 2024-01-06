<?php include 'inc/header.php'; ?>

    <h1>Contact Us</h1>

    <!-- https://formcarry.com/blog/how-to-create-a-simple-html-contact-form/ -->

    <div class="formcarry-container">
      <form action="form-process.php" method="POST" class="formcarry-form">
        <label for="name">Your Name*</label>
        <input type="text" id="name" name="fullName" required />

        <label for="email">Your Email Address*</label>
        <input type="email" id="email" name="email" required />

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" />

        <label for="address">Address</label>
        <input type="address" id="address" name="address" />


        <label for="message">Tell us more about your project</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <button type="submit">Send</button>
      </form>
    </div>

    <?php include 'inc/footer.php'; ?>