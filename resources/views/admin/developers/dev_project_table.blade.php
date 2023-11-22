  <script>
    $(document).ready(function() {
      $('#here').DataTable();
  } );
  </script>

<div class="container">
<div class="row header">
<h3>All Tasks Table</h3>
</div>
<table id="here" class="table table-striped table-bordered border rounded shadow-sm bg-white" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Project Name</th>
                <th>topic</th>
                <th>task</th>
                <th>Client name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dev_tasks as $task)
        <tr>
      <td>
        <div class="d-flex align-items-center">
          
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$task->name}}</p>
            
          </div>
        </div>
      </td>
      <td>
      <p class="fw-normal mb-1">{{$task->email}}</p>
        
      </td>
      <td>
      <p class="fw-normal mb-1">{{$task->project_name}}</p>
      </td>
      <td>{{$task->topic}}</td>
      <td>{{$task->task}}</td>
      <td>{{$task->client_name}}</td>
      
      <td> 
      <button type="button" class="btn btn-sm btn-rounded bg-primary text-white my-2">
          Edit
        </button>
        <button type="button" class="btn btn-sm btn-rounded bg-danger text-white">
          Remove
        </button>
      </td>
    </tr>
    
    
            
            @endforeach
        </tbody>
        
    </table>
 
    </div>