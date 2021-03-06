<!-- it tells version of the html -->
<!DOCTYPE html>
<!-- it describes the structure of web pages -->
<html>
  <!-- header for page-->
  <head>
    <meta charset="utf-8" />
    <!-- title of the page -->
    <title>Olcacdemy</title>
    <!-- meta data for responsiveness -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <!--link to external font style sheets-->
    <link rel="stylesheet" type="text/css" href="css/font.css" />  
    <!-- link to line awesome icons -->
	  <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
    <!-- link for jquey field validation -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- link to external style sheets -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- link to external scrollbar -->
    <link rel="stylesheet" href="css/scrollbar.css" />
  </head>
  <!-- create a body for page -->
  <body class="form">
    <div class="page-content">
      <div class="form-content">
        <div class="form-left"></div>
        <!-- Post form to submit the data to db -->
        <form class="form-detail" action="./index_submit.php" method="post" id="myform">
          <h2>CONTACT US</h2>
          <div class="form-group">
            <div class="form-row form-row-1">
              <!-- creating lable, text field for first & last name,mail,message,query and marks us a required field -->
              <label for="first_name">First Name</label>
              <input
                type="text"
                name="first_name"
                id="first_name"
                class="input-text"
              />
            </div>
            <div class="form-row form-row-1">
              <label for="last_name">Last Name</label>
              <input
                type="text"
                name="last_name"
                id="last_name"
                class="input-text"
              />
            </div>
          </div>
          <div class="form-row">
            <!-- email id must statisfy the condition -->
            <label for="your_email">Your Email</label>
            <input
              type="text"
              name="your_email"
              id="your_email"
              class="input-text"
              required
              pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"
            />
          </div>
          <div class="form-row">
            <label for="message">Message</label>
            <input
              type="text"
              name="message"
              id="message"
              class="input-text"
              required
            />
          </div>
          <div class="form-row">
            <label for="query">Query</label>
            <textarea
              rows="4"
              cols="50"
              name="query"
			  id="query"
              class="input-text"
			  required
            ></textarea>
          </div>
          <div class="form-row-last">
            <input
              type="submit"
              name="register"
              class="submit"
              value="SUBMIT"
            />
          </div>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
      // validator function for validating the fields
      jQuery.validator.setDefaults({
        debug: true,
        success: function (label) {
          label.attr("id", "valid");
        },
      });
      $("#myform").validate({
        messages: {
          first_name: {
            required: "Please your firstname",
          },
          last_name: {
            required: "Please your lastname",
          },
          your_email: {
            required: "Please enter your email",
          },
          message: {
            required: "Please enter your message",
          },
          query: {
            required: "Please enter your query",
          },
        },
        submitHandler: function(form) {
          // sumbits the form to php
          form.submit();
        }
      });
    </script>
  </body>
</html>
