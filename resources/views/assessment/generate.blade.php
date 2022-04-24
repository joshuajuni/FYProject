<!DOCTYPE html>
<html>
<style>

</style>
<body>

<h2>Assessment</h2>

<table style="width:100%">
  <tr>
    <th>Student Name</th>
    <td>{{ $session->student->profile->name }}</td>
  </tr>
  <tr>
      <th>Student Matrix No.</th>
        <td>{{ $session->student->profile->user->username }}</td>
  </tr>
  <tr>
      <th>Proposal Title</th>
      <td>{{ $session->proposal_title }}</td>
  </tr>
  @foreach ( $session->assessment as $row )
  <tr>
    <th>Examiner Name </th>
    <td>{{ $row->examiner->profile->name}}</td>
  </tr>
  <tr>
      <th>Comments</th>
        <td>{{ $row->comments }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
