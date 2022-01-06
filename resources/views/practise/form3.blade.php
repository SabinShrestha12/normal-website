<h4>Login user</h4>
<form action="login3" method="post">
  @csrf
  <label for="email"> Email:</label><br>
  <input type="email" id="email" name="eamail"><br><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"></br><br>
   <input type="submit" value="Submit">
</form>