<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>&lt;Table&gt; Responsive</title>
  <link rel="stylesheet" href="{{asset('assets/stylet.css')}}">

</head>
<body>

<nav style="padding: 10px; background-color: #191970; color: white; text-align: right;">
  <div>
    <span style="margin-right: 20px; font-weight: bold;">Xush kelibsiz!</span>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" style="margin-right: 10px; padding: 5px 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; border: none; cursor: pointer;">
            Logout
        </button>
    </form>

    <!-- Delete Account Form -->
    <!-- <form action="{{ route('account.delete') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" style="padding: 5px 10px; background-color: red; color: white; text-decoration: none; border-radius: 5px; border: none; cursor: pointer;">
            Delete Account
        </button>
    </form> -->
  </div>
</nav>


<!-- partial:index.partial.html -->
<h1><span class="blue">&lt;</span>Foydalanuvchilar Ro'yxati<span class="blue">&gt;</span></h1>

<table class="container">
	<thead>
		<tr>
			<th><h1>ID</h1></th>
			<th><h1>Ism</h1></th>
			<th><h1>Email</h1></th>
			<th><h1>Yaratilgan Sana</h1></th>
		</tr>
	</thead>
	<tbody>	
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<!-- partial -->
  <script  src="{{asset('assets/script.js')}}"></script>

</body>
</html>
