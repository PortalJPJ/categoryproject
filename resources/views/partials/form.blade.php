<form method="post" action="{{ route('category.store') }}">
 @csrf

 <h3 class="font-bold border-b-gray-300 border-b pb-2 mb-3 mt-4">
 Add a new category
</h3>
 
<div>

<label>Name</label>

 <input type="text" name="name" id="name" class="border border-gray-200 p-1">

</div><div> 

<label>Category</label>

 <input type="text" name="image" id="image" class="border border-gray-200 p-1" 
 value="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">

</div>

 <input type="submit" name="send" value="Submit" class="bg-gray-200 p-1 cursor-pointer
 border border-black">

</form>
