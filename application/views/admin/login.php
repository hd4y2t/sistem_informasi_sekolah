<!DOCTYPE html>
<html>
<head>
  <title>Login Administrator</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'?>fontawesome/css/font-awesome.css">
<meta charset='UTF-8'>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto);
body,
input,
select,
textarea,
body * {
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
}
body::after, body::before,
input::after,
input::before,
select::after,
select::before,
textarea::after,
textarea::before,
body *::after,
body *::before {
  box-sizing: border-box;
}

body {
  background-image: -webkit-linear-gradient(top, #262, #242);
  background-image: linear-gradient(top, #262, #262);
  background:#262;
}

h1 {
  font-size: 2rem;
  text-align: center;
  margin: 0 0 2em;
}

.container {
  max-width: 25rem;
  max-height: 35rem;
  margin: 2rem auto;
  background: #fff;
  width: 100%;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  padding: 3rem 5rem 0;
  border-radius: 1px;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: box-shadow 0.28s ease, -webkit-transform 0.28s ease;
  transition: box-shadow 0.28s ease, -webkit-transform 0.28s ease;
  transition: box-shadow 0.28s ease, transform 0.28s ease;
  transition: box-shadow 0.28s ease, transform 0.28s ease, -webkit-transform 0.28s ease;
}

fieldset {
  margin: 0 0 3rem;
  padding: 0;
  border: none;
}


/*------------------------------input type text and textarea and other starts-----*/
.form-inline > .form-group,
.form-inline > .btn {
  display: inline-block;
  margin-bottom: 0;
}

.form-help {
  margin-top: 0.125rem;
  margin-left: 0.125rem;
  color: #b3b3b3;
  font-size: 0.8rem;
}

.form-group input {
  height: 1.9rem;
}
.form-group textarea {
  resize: none;
}
.form-group select {
  width: 100%;
  font-size: 1rem;
  height: 1.6rem;
  padding: 0.125rem 0.125rem 0.0625rem;
  background: none;
  border: none;
  line-height: 1.6;
  box-shadow: none;
}
.form-group .input-label {
  position: absolute;
  top: 0.25rem;
  pointer-events: none;
  padding-left: 0.125rem;
  z-index: 1;
  color: #b3b3b3;
  font-size: 1rem;
  font-weight: normal;
  -webkit-transition: all 0.28s ease;
  transition: all 0.28s ease;
}
.form-group .bar {
  position: relative;
  border-bottom: 0.0625rem solid #999;
  display: block;
}
.form-group .bar::before {
  content: '';
  height: 0.125rem;
  width: 0;
  left: 50%;
  bottom: -0.0625rem;
  position: absolute;
  background: #D81900;
  -webkit-transition: left 0.28s ease, width 0.28s ease;
  transition: left 0.28s ease, width 0.28s ease;
  z-index: 2;
}
.form-group input,
.form-group textarea {
  display: block;
  background: none;
  padding: 0.125rem 0.125rem 0.0625rem;
  font-size: 1rem;
  border-width: 0;
  border-color: transparent;
  line-height: 1.9;
  width: 100%;
  color: transparent;
  -webkit-transition: all 0.28s ease;
  transition: all 0.28s ease;
  box-shadow: none;
}
.form-group input[type="file"] {
  line-height: 1;
}
.form-group input[type="file"] ~ .bar {
  display: none;
}
.form-group select,
.form-group input:focus,
.form-group input:valid,
.form-group input.form-file,
.form-group input.has-value,
.form-group textarea:focus,
.form-group textarea:valid,
.form-group textarea.form-file,
.form-group textarea.has-value {
  color: #333;
}
.form-group select ~ .input-label,
.form-group input:focus ~ .input-label,
.form-group input:valid ~ .input-label,
.form-group input.form-file ~ .input-label,
.form-group input.has-value ~ .input-label,
.form-group textarea:focus ~ .input-label,
.form-group textarea:valid ~ .input-label,
.form-group textarea.form-file ~ .input-label,
.form-group textarea.has-value ~ .input-label {
  font-size: 0.8rem;
  color: gray;
  top: -1rem;
  left: 0;
}
.form-group select:focus,
.form-group input:focus,
.form-group textarea:focus {
  outline: none;
}
.form-group select:focus ~ .input-label,
.form-group input:focus ~ .input-label,
.form-group textarea:focus ~ .input-label {
  color: #D81900;
}
.form-group select:focus ~ .bar::before,
.form-group input:focus ~ .bar::before,
.form-group textarea:focus ~ .bar::before {
  width: 100%;
  left: 0;
}

/*------------------------------input type text and textarea and other ends-----*/



/*--------------------------------Checkbox and radio button Starts --------------*/
.form-radio,
.form-group {
  position: relative;
  margin-top: 2.25rem;
  margin-bottom: 2.25rem;
}

.checkbox .form-help, .form-radio .form-help, .form-group .form-help {
  position: absolute;
  width: 100%;
}
.checkbox .form-help {
  position: relative;
  margin-bottom: 1rem;
}
.form-radio .form-help {
  padding-top: 0.25rem;
  margin-top: -1rem;
}

.checkbox label,
.form-radio label {
  position: relative;
  cursor: pointer;
  padding-left: 2rem;
  text-align: left;
  color: #333;
  display: block;
}
.checkbox input,
.form-radio input {
  width: auto;
  opacity: 0.00000001;
  position: absolute;
  left: 0;
}

.radio {
  margin-bottom: 1rem;
}
.radio .helper {
  position: absolute;
  top: -0.25rem;
  left: -0.25rem;
  cursor: pointer;
  display: block;
  font-size: 1rem;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  color: #999;
}
.radio .helper::before, .radio .helper::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  margin: 0.25rem;
  width: 1rem;
  height: 1rem;
  -webkit-transition: -webkit-transform 0.28s ease;
  transition: -webkit-transform 0.28s ease;
  transition: transform 0.28s ease;
  transition: transform 0.28s ease, -webkit-transform 0.28s ease;
  border-radius: 50%;
  border: 0.125rem solid currentColor;
}
.radio .helper::after {
  -webkit-transform: scale(0);
          transform: scale(0);
  background-color: #D81900;
  border-color: #D81900;
}
.radio label:hover .helper {
  color: #D81900;
}
.radio input:checked ~ .helper::after {
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
}
.radio input:checked ~ .helper::before {
  color: #D81900;
}

.checkbox {
  margin-top: 3rem;
  margin-bottom: 1rem;
}
.checkbox .helper {
  color: #999;
  position: absolute;
  top: 0;
  left: 0;
  width: 1rem;
  height: 1rem;
  z-index: 0;
  border: 0.125rem solid currentColor;
  border-radius: 0.0625rem;
  -webkit-transition: border-color 0.28s ease;
  transition: border-color 0.28s ease;
}
.checkbox .helper::before, .checkbox .helper::after {
  position: absolute;
  height: 0;
  width: 0.2rem;
  background-color: #D81900;
  display: block;
  -webkit-transform-origin: left top;
          transform-origin: left top;
  border-radius: 0.25rem;
  content: '';
  -webkit-transition: opacity 0.28s ease, height 0s linear 0.28s;
  transition: opacity 0.28s ease, height 0s linear 0.28s;
  opacity: 0;
}
.checkbox .helper::before {
  top: 0.65rem;
  left: 0.38rem;
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
  box-shadow: 0 0 0 0.0625rem #fff;
}
.checkbox .helper::after {
  top: 0.3rem;
  left: 0;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.checkbox label:hover .helper {
  color: #D81900;
}
.checkbox input:checked ~ .helper {
  color: #D81900;
}
.checkbox input:checked ~ .helper::after, .checkbox input:checked ~ .helper::before {
  opacity: 1;
  -webkit-transition: height 0.28s ease;
  transition: height 0.28s ease;
}
.checkbox input:checked ~ .helper::after {
  height: 0.5rem;
}
.checkbox input:checked ~ .helper::before {
  height: 1.2rem;
  -webkit-transition-delay: 0.28s;
          transition-delay: 0.28s;
}

.radio + .radio,
.checkbox + .checkbox {
  margin-top: 1rem;
}

.has-error .legend.legend, .has-error.form-group .input-label.input-label {
  color: #d9534f;
}
.has-error.form-group .form-help,
.has-error.form-group .helper, .has-error.checkbox .form-help,
.has-error.checkbox .helper, .has-error.radio .form-help,
.has-error.radio .helper, .has-error.form-radio .form-help,
.has-error.form-radio .helper {
  color: #d9534f;
}
.has-error .bar::before {
  background: #d9534f;
  left: 0;
  width: 100%;
}

/*----------------------------Checkbox and radio button Ends-------------------*/


/*--------------------------------Button starts--------------------------------*/
.button-container {
  text-align: center;
}

.button {
  position: relative;
  background: currentColor;
  border: 1px solid currentColor;
  font-size: 1.1rem;
  color: #D81900;
  margin: 3rem 0;
  padding: 0.30rem 2rem;
  cursor: pointer;
  -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  overflow: hidden;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.button span {
  color: #fff;
  position: relative;
  z-index: 1;
}
.button::before {
  content: '';
  position: absolute;
  background: #071017;
  border: 50vh solid #1d4567;
  width: 30vh;
  height: 30vh;
  border-radius: 50%;
  display: block;
  top: 50%;
  left: 50%;
  z-index: 0;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.button:hover {
  color: #D81900;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}
.button:active::before, .button:focus::before {
  -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
  opacity: 0;
}
.button:focus {
  outline: none;
}
/*--------------------------------Button ends--------------------------------*/

</style>
</head>
<body>

<div class="container">
  <h4 align="center">LOGIN ADMINISTRATOR (Tata Usaha)</h4>
      <p style="color: red;"><?php echo $this->session->flashdata('info'); ?></p>
  <form action="<?php echo base_url().'admin/login' ?>" method="post">
    <div class="form-group">
      <input type="text" name="username" required="required"/>
      <label for="input" class="input-label"><i class="fa fa-user"></i> Username</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="password" name="password" required="required"/></p>
      <label for="textarea" class="input-label"><i class="fa fa-key"></i> Password</label><i class="bar">
    </div>
    <button type="submit" class="button"><span><i class="fa fa-key"></i> Login</span></button>
  </div>
  </form>  
</div>

</body></html>