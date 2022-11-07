<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2>Employee View</h2>
    
    <table class="table table-borderless table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  
  </tbody>
</table>
    
  </div>
</template>

<script>
export default {
  name: 'Employee',
  data () {
    return {
      msg: ''
    }
  }
}
</script>
