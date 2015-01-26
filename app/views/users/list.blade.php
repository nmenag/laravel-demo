<h1>Users</h1>
 
<ul>
  @foreach($users as $users)
    <li>{{ $users->name.' '.$users->last_name }} </li>
  @endforeach 
</ul>