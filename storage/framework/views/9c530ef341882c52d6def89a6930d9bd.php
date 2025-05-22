<!-- -----------css of index page---------------------------
<style>
/* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set a background color for the entire page */
/* body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
} */
body {
    font-family: Arial, sans-serif;
    background-color: #9BB586;
    margin: 0;
    padding: 0;
}

/* Style the header section */
.header h1{   
    font-size: 85px;
    margin-top: 50px;
    font-weight: 400;
    color: rgb(10, 12, 18);
    font-family: 'Roboto Condensed', sans-serif; /* Apply the font */
}


.neon{
    color: #fff;
    border: 4px solid #fff;
    padding: 30px 70px;
    width: fit-content;
    margin: 200px auto;
    font-size: 50px;
    font-weight: 400;
    font-style: italic;
    transition: text-shadow 0.5s, box-shadow 0.5s;
}

.neon:hover{
    text-shadow: -2px -2px 10px #fff,
                2px 2px 10px #fff,
                0 0 20px #2c503dde,
                0 0 40px #2c503dde,
                0 0 60px #2c503dde,
                0 0 80px #2c503dde,
                0 0 100px #2c503dde;

    box-shadow: 0 0 5px #fff,
                inset 0 0 5px #fff,
                0 0 20px rgba(205, 255, 40, 0.904),
                inset 0 0 20px rgba(205, 255, 40, 0.904),
                0 0 40px rgba(205, 255, 40, 0.904),
                inset 0 0 40px rgba(205, 255, 40, 0.904);
}
header p{
    font-size: 60px; /* Increase the font size */
    margin: 4rem 0; 
    
}
.header {
    background-image: <?php echo e(asset('images/2.jpg')); ?>;
    background-size: cover;
    background-position: center;
    background-color: #2c3e50;
    color: #fff;
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 1rem;
    height: 100vh;
}
/* Style the container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    text-align: center;

}

/* Style the Call to Action button */
.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #e74c3c;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #c0392b;
}


/* Style the footer */
footer {
    text-align: center;
    padding: 1rem;
    background-color: #2c3e50;
    color: #fff;
}


@media (max-width: 768px) {
    /* Adjust styles for smaller screens */
    .container {
        padding: 1rem;
    }
}
.logo {
    width: 100px; /* Adjust the width as needed */
    height: auto;
    margin-right:35rem ;
}

.navbar {
    background-color: #c5c7825a;
    overflow: hidden;
    align-items: center;
    display: flex;
    margin-bottom: 2rem;
    position: absolute;
    top: 0%;
    width: 100%;
    padding: 20px 7%;
}

.logo {
    width: 100px;
    height: auto;
    margin-left: auto; 
}

.navbar a {
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    margin-right: 20px; 
    width: ;
    
}

.navbar a:last-child {
    margin-right: 0; 
}

.navbar a:hover {
    background-color: #2c503dde;
}
/* Add this CSS code to your style.css file */

.typing-animation {
    overflow: hidden;
    border-right: 0.15em solid orange; /* Change to your desired color */
    white-space: nowrap;
    margin: 0 auto;
    letter-spacing: 0.20em;
    animation: typing 6s steps(40, end), blink-caret 0.75s step-end infinite;
}

@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: orange; } /* Change to your desired color */
}

/* Rest of your existing styles... */
</style> -->


<style>
/* Reset default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Set a background color for the entire page */
body {
  font-family: Arial, sans-serif;
  background: linear-gradient(to bottom, #0a2c1b, #9cd06f);
  margin: 0;
  padding: 0;
  text-align: center;
}

/* Style the header section */
.header h1 {
  font-size: 85px;
  margin-top: 50px;
  font-weight: 400;
  color: rgb(10, 12, 18);
  font-family: "Roboto Condensed", sans-serif;
  /* Apply the font */
}

.neon {
  color: #fff;
  border: 4px solid #fff;
  padding: 30px 70px;
  width: fit-content;
  margin: 200px auto;
  font-size: 50px;
  font-weight: 400;
  font-style: italic;
  transition: text-shadow 0.5s, box-shadow 0.5s;
}

.neon:hover {
  text-shadow: -2px -2px 10px #fff, 2px 2px 10px #fff, 0 0 20px #2c503dde,
    0 0 40px #2c503dde, 0 0 60px #2c503dde, 0 0 80px #2c503dde,
    0 0 100px #2c503dde;

  box-shadow: 0 0 5px #fff, inset 0 0 5px #fff,
    0 0 20px rgba(205, 255, 40, 0.904), inset 0 0 20px rgba(205, 255, 40, 0.904),
    0 0 40px rgba(205, 255, 40, 0.904), inset 0 0 40px rgba(205, 255, 40, 0.904);
}

header p {
  font-size: 60px;
  /* Increase the font size */
  margin: 4rem 0;
}

.w-50 p {
  font-family: "Roboto Condensed", sans-serif;
  /* Use the Roboto Condensed font */
  font-size: 18px;
  /* Adjust the font size as needed */
  line-height: 1.6;
  /* Adjust the line height for better readability */
  color: #333;
  /* Set the font color */
  margin-bottom: 20px;
  /* Add spacing between paragraphs */
}

.header {
  background-image: url("images/bg.jpg");
  background-size: cover;
  background-position: center;
  background-color: #2c3e50;
  color: #fff;
  display: flex;
  flex-direction: column;
  text-align: center;
  justify-content: center;
  align-items: center;
  padding: 1rem;
  height: 100vh;
}

/* Style the container */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
  text-align: center;
}

/* Style the Call to Action button */
.cta-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #e74c3c;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #c0392b;
}

/* Style the footer */
footer {
  text-align: center;
  padding: 1rem;
  background-color: #2c3e50;
  color: #fff;
  bottom: 0;
  width: 100%;
}

@media (max-width: 768px) {

  /* Adjust styles for smaller screens */
  .container {
    padding: 1rem;
  }
}

.logo {
  width: 50px;
  /* Adjust the width as needed */
  height: auto;
  /* Automatically adjust the height to maintain aspect ratio */
  margin-right: 25rem;
}

.navbar {
  background-color: #c5c7825a;
  overflow: hidden;
  align-items: center;
  display: flex;
  margin-bottom: 2rem;
  position: absolute;
  top: 0%;
  width: 100%;
  padding: 20px 7%;
}

.navbar a {
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin-right: 20px;
  width: ;
}

.navbar a:last-child {
  margin-right: 0;
}

.navbar a:hover {
  background-color: #2c503dde;
}

/* Add this CSS code to your style.css file */

.typing-animation {
  overflow: hidden;
  border-right: 0.15em solid orange;
  /* Change to your desired color */
  white-space: nowrap;
  margin: 0 auto;
  letter-spacing: 0.2em;
  animation: typing 6s steps(40, end), blink-caret 0.75s step-end infinite;
}

@keyframes typing {
  from {
    width: 0;
  }

  to {
    width: 100%;
  }
}

@keyframes blink-caret {

  from,
  to {
    border-color: transparent;
  }

  50% {
    border-color: orange;
  }

  /* Change to your desired color */
}

/* Rest of your existing styles... */

.typing-animation {
  overflow: hidden;
  /* Hide overflowing characters */
  white-space: nowrap;
  /* Prevent line breaks */
  border-right: 0.15em solid orange;
  /* Add blinking cursor effect */
  animation: typing 5s steps(40, end), blink-caret 0.75s step-end;
  font-family: "Roboto Condensed", sans-serif;
  /* Use the Roboto Condensed font */
  font-size: 56px;
  /* Adjust the font size as needed */
  font-weight: 700;
  /* Set the font weight to bold */
  color: #000000;
  /* Set the font color */
}

@keyframes typing {
  from {
    width: 0;
  }

  to {
    width: 100%;
  }
}

@keyframes blink-caret {

  from,
  to {
    border-color: transparent;
  }

  50% {
    border-color: orange;
  }
}

main {
  display: flex;
  justify-content: center;
  align-items: center;
}

.hello {
  background-color: #9BB586;

}

.white {
  color: #c9fe65cf;
  font-weight: bold;
}

.save {
  font-weight: bold;
}
</style><?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/Client/css.blade.php ENDPATH**/ ?>