<h4>USer login</h4>
<form action="/form" method="post">
  @csrf
  <label for="email"> Email:</label><br>
  <input type="email" id="email" name="eamail"><br><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"></br><br>
   <input type="submit" value="Submit">
</form>