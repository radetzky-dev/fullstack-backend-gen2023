
<h3 class="text-center page-title">User found: {{ $user->name }}</h3>
<b>Email</b>: {{ $user->email }}
<br>
<b>Registered on</b>: {{ $user->created_at }}
<br>
Dati salvati nella sessione:
<?php echo session('username'); 
