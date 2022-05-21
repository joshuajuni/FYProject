<!DOCTYPE html>
<html>
<style>
table {
  border-collapse: collapse;
  width:100%;
}
th, td {
  padding: 10px;
  text-align: left;
}
</style>
<body>

<h2>Assessment</h2>

<table border="3">
    <tr>
      <table>
        <tr>
          <th>Session Title</th>
          <td>{{ $session->title }}</td>
        </tr>
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
      </table>
    </tr>
    @foreach ( $session->assessment as $row )
    <tr>
        <table>
          <tr>
            <th>Examiner Name </th>
            <td>{{ $row->examiner->profile->name}}</td>
          </tr>
        </table>
        <table>
          <tr>
            <th style="text-align: center;">Comments</th>
          </tr>
          <tr>
            <td>{!! $row->comments !!}</td>
          </tr>
        </table>
    </tr>
    @endforeach
</table>

</body>
</html>
