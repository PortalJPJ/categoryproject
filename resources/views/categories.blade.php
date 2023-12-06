<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport"
 content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
 <h1 class="font-bold border-b-gray-300 border-b pb-2 mb-3">
 Categories
 </h1>
 <ul>
 @foreach ($categories as $category)
 <li>
  <b>Category:</b>{{ $category->name }} 
 <br/> 
 <b>Image:</b>{{ $category->image }}
<p>**********</p>
</li>
 @endforeach
 </ul>
 @include('partials.form')
</body>
</html>
