  <script>
    $(document).ready(function() {
      $('#example').DataTable();
  } );
  </script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
<div class="row header">
<h1 class="h2 fw-normal mb-1">All Dev Table</h1>
</div>
<table id="example" class="table table-striped table-bordered border rounded shadow-sm bg-white" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Status</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dev_table as $dev)
        <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{ $dev->name }}</p>
            
          </div>
        </div>
      </td>
      <td>
      <p class="fw-normal mb-1">{{ $dev->email }}</p>
        
      </td>
      <td>
      <p class="fw-normal mb-1">{{ $dev->position }}</p>
      </td>
      <td>{{ $dev->status }}</td>
      <td>{{ $dev->phone }}</td>
      <td>{{ $dev->adress }}</td>
      
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