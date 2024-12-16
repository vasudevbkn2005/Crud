<form action="/category/{{$category['id']}}" method="POST">
@csrf
@method('put')
Name: <input type="text" name="name" value="{{$category['name']}}"><br>
Description: <input type="text" value="{{$category['des']}}" name="des">
<button>Save</button>
</form>