<div>
   <h1>add new user</h1>
   {{ session('massage') }}
<form action="add" method="post">
@csrf
  <input type="text" name="username" placeholder="enter name">
<br>
<br>
<input type="text" name="email" placeholder="enter email">
<br>
<br>
<input type="text" name="phone" placeholder="enter phone">
<br>
<br>
<button>add new user</button>

</form>

</div>
